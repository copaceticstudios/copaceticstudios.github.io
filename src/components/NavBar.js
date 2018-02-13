// @flow
import * as React from 'react'
import { Link } from 'react-router-dom'
import './NavBar.css'

export type NavBarItem = { content: React.Node, url: string }

export default class NavBar extends React.Component<{
  leftItems: Array<NavBarItem>,
  rightItems: Array<NavBarItem>
}> {
  render() {
    const { leftItems, rightItems } = this.props

    let itemLink = ({ content, url }) =>
      url.startsWith('http') ? (
        <a className="NavBar-link" href={url}>
          {content}
        </a>
      ) : (
        <Link className="NavBar-link" to={url}>
          {content}
        </Link>
      )

    return (
      <nav>
        <ul>
          {leftItems.map(item => <li key={item.url}>{itemLink(item)}</li>)}
          {rightItems.map(item => (
            <li className="NavBar-right" key={item.url}>
              {itemLink(item)}
            </li>
          ))}
        </ul>
      </nav>
    )
  }
}
