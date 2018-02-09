// @flow
import * as React from 'react'
import { Link } from 'react-router-dom'
import './NavBar.css'

export type NavBarItem = { title: string, url: string }

export default class NavBar extends React.Component<{
  items: Array<NavBarItem>
}> {
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
