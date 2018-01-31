import PropTypes from 'prop-types'
import React, { Component } from 'react'
import { Link } from 'react-router-dom'
import './NavBar.css'

class NavBar extends Component {
  static propTypes = {
    items: PropTypes.shape({
      title: PropTypes.string.isRequired,
      url: PropTypes.string.isRequired
    }).isRequired,
    onSelection: PropTypes.func.isRequired
  }

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
              <Link className="NavBar-link" to={item.url}>
                {item.title}
              </Link>
            </li>
          ))}
        </ul>
      </nav>
    )
  }
}

export default NavBar
