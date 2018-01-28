import React, { Component } from 'react'
import './NavBar.css'

class NavBar extends Component {
  handleItemClick = event => {
    event.preventDefault()
    this.props.onSelection(event.target.value)
  }

  render() {
    const { items } = this.props
    return (
      <nav>
        <ul>
          {items.map(item => (
            <li key={item.title}>
              <button value={item.action} onClick={this.handleItemClick}>
                {item.title}
              </button>
            </li>
          ))}
        </ul>
      </nav>
    )
  }
}

export default NavBar
