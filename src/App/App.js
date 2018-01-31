import React, { Component } from 'react'
import { BrowserRouter as Router, Route } from 'react-router-dom'
import './App.css'

import NavBar from 'NavBar/NavBar'

export default class App extends Component {
  handleNavBarSelection = action => {
    this.setState({ page: action })
  }

  render() {
    const navBarItems = [
      { title: 'Home', url: '/' },
      { title: 'Games', url: '/games' },
      { title: 'Support', url: '/support' }
    ]

    return (
      <Router>
        <div className="App">
          <NavBar
            items={navBarItems}
            onSelection={this.handleNavBarSelection}
          />
          <Route exact={true} path="/" component={() => <div>Home</div>} />
          <Route
            exact={true}
            path="/games"
            component={() => <div>Games</div>}
          />
          <Route
            exact={true}
            path="/support"
            component={() => <div>Support</div>}
          />
        </div>
      </Router>
    )
  }
}
