import React, { useState } from 'react'
import axios from 'axios'

const Settings = () => {
  const [firstname, setFirstname] = useState('')
  const [lastname, setLastname] = useState('')
  const [email, setEmail] = useState('')
  const [message, setMessage] = useState(false)

  const submitFormFields = (e) => {
    e.preventDefault()
    setMessage(true)
    console.log({ firstname, lastname, email })
  }

  return (
    <div>
      <h2>React WhatsApp Settings Form</h2>
      <form id='wprw-settings-form' onSubmit={submitFormFields}>
        <table className='form-table' role='presentation'>
          <tbody>
            <tr>
              <th scope='row'>
                <label htmlFor='firstname'>First Name</label>
              </th>
              <td>
                <input
                  id='firstname'
                  name='firstname'
                  value={firstname}
                  placeholder='First Name'
                  className=''
                  onChange={(e) => setFirstname(e.target.value)}
                />
              </td>
            </tr>
            <tr>
              <th scope='row'>
                <label htmlFor='lastname'>Last Name</label>
              </th>
              <td>
                <input
                  id='lastname'
                  name='lastname'
                  value={lastname}
                  placeholder='Last Name'
                  className=''
                  onChange={(e) => setLastname(e.target.value)}
                />
              </td>
            </tr>
            <tr>
              <th scope='row'>
                <label htmlFor='email'>Email Address</label>
              </th>
              <td>
                <input
                  id='email'
                  name='email'
                  value={email}
                  placeholder='Email Address'
                  className=''
                  onChange={(e) => setEmail(e.target.value)}
                />
              </td>
            </tr>
          </tbody>
        </table>
        <p className=''>
          <button type='submit' className='button button-primary'>
            Submit
          </button>
        </p>
      </form>
      {message && (
        <h1 style={{ textAlign: 'center' }}>
          {firstname} {lastname} has an email - {email}
        </h1>
      )}
    </div>
  )
}

export default Settings
