export const apiDomain = 'http://localhost:8000/'
export const loginUrl = apiDomain + 'oauth/token'
export const userUrl = apiDomain + 'api/user'
export const requestUrl = apiDomain + 'api/requestuser/submit'
export const artpackUrl = apiDomain + 'api/request-form/artpack/submit'
export const embroideryUrl = apiDomain + 'api/request-form/embroidery/submit'
export const tasksUrl = apiDomain + 'api/tasks/load'
export const singleTask = apiDomain + 'api/tasks/singleTask'
export const getSingleTask = apiDomain + 'api/tasks/getSingleTask'

export const getHeader = function () {
  const tokenData = JSON.parse(window.localStorage.getItem('authUser'))
  const headers = {
    'Accept': 'application/json',
    'Authorization': 'Bearer ' + tokenData.access_token
  }
  return headers
}