// @flow
import * as React from 'react'
import { BrowserRouter as Router, Route } from 'react-router-dom'
import './App.css'

import Home from 'pages/Home'
import NavBar from 'components/NavBar'

export default class App extends React.Component<{}> {
  render() {
    const navBarItems = [
      { title: 'Home', url: '/' },
      { title: 'Games', url: '/games' },
      { title: 'Support', url: '/support' }
    ]

    return (
      <Router>
        <div className="App">
          <NavBar items={navBarItems} />
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
