import React, { Component } from 'react'
import './App.css'

import NavBar from './NavBar'

class App extends Component {
  state = { page: 'home' }

  handleNavBarSelection = action => {
    this.setState({ page: action })
  }

  renderPage(page) {
    switch (page) {
      case 'home':
        return <div>Home</div>
      case 'games':
        return <div>Games</div>
      case 'support':
        return <div>Support</div>
      default:
        return <div>Error: page not found</div>
    }
  }

  render() {
    const navBarItems = [
      { title: 'Home', action: 'home' },
      { title: 'Games', action: 'games' },
      { title: 'Support', action: 'support' }
    ]

    const { page } = this.state

    return (
      <div className="App">
        <NavBar items={navBarItems} onSelection={this.handleNavBarSelection} />
        {this.renderPage(page)}
      </div>
    )
  }
}

export default App
