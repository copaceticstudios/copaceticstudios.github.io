import React, { Component } from 'react'
import './App.css'

import NavBar from './NavBar'

class App extends Component {
  state = { page: 'home' }

  handleNavBarSelection = action => {
    this.setState({ page: action })
  }

  render() {
    const navBarItems = [
      { title: 'Home', action: 'home' },
      { title: 'Games', action: 'games' },
      { title: 'Support', action: 'support' }
    ]

    const { page } = this.state
    let pageElement
    switch (page) {
      case 'home':
        pageElement = <div>Home</div>
        break
      case 'games':
        pageElement = <div>Games</div>
        break
      case 'support':
        pageElement = <div>Support</div>
        break
      default:
        pageElement = <div>Error: page not found</div>
    }

    return (
      <div className="App">
        <NavBar items={navBarItems} onSelection={this.handleNavBarSelection} />
        {pageElement}
      </div>
    )
  }
}

export default App
