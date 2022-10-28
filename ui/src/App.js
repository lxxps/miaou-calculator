import './App.css';
import React, { Component } from 'react';
import { z } from "zod";

/**
 * healthCheckResponse schema validation
 */
const healthCheckSchema = z.object({
  status: z.number().positive().int(),
  message: z.string(),
  version: z.string()
});

/**
 * App
 */
class App extends Component {
  constructor(props) {
    super(props);
    this.state = { healthCheck: "Unknown" }; // initial status
  }

  componentDidMount() {
    // construct the url of the API call
    const url = `${process.env.REACT_APP_API_ENDPOINT}/healthcheck`;
    fetch(url)
        .then(res => res.json())
        .then(
            (result) => {
              try {
                healthCheckSchema.parse(result);
                this.setState({
                  healthCheck: result
                });
              } catch( e ) {
                this.setState({
                  hasError: true
                });
                // Log to console for now
                console.error(Error(e.message ?? e));
                // Re-throw?
                //throw e;
              }
            }
        )
  }

  render() {
    // get the status from the state
    const healthCheck = this.state.healthCheck;

    return (
        <div className="App">
          <header className="App-header">
            API HealthCheck Status: {healthCheck['status']} {healthCheck['message']}<br/>
            API Version: {healthCheck['version']}<br/>
          </header>
        </div>
    );
  }
}

export default App;
