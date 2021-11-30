import React from 'react'
import ReactDOM from 'react-dom'
import App from './App.js'

// the id we wan't to target will be ready after the dom contnet is loaded.

document.addEventListener('DOMContentLoaded', function () {
  const element = document.getElementById('wprw-admin-app')

  // check before using the id we are targetting
  if (!!element) {
    ReactDOM.render(<App />, document.getElementById('wprw-admin-app'))
  }
})
