// @flow
import FontAwesome from 'react-fontawesome'
import * as React from 'react'
import { BrowserRouter as Router, Route } from 'react-router-dom'
import './App.css'

import Home from 'pages/Home'
import NavBar from 'components/NavBar'

export default class App extends React.Component<{}> {
  render() {
    const navBarLeftItems = [
      { content: 'Home', url: '/' },
      { content: 'Games', url: '/games' },
      { content: 'Support', url: '/support' }
    ]
    const navBarRightItems = [
      {
        content: <FontAwesome name="facebook-f" />,
        url: 'https://www.facebook.com'
      }
    ]

    return (
      <Router>
        <div className="App">
          <NavBar leftItems={navBarLeftItems} rightItems={navBarRightItems} />
          <Route exact={true} path="/" component={Home} />
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
          <footer>© 2018 Michael Kent</footer>
        </div>
      </Router>
    )
  }
}
