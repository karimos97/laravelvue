const ID_TOKEN_KEY = "id_token";

export const getToken = () => {
  return window.localStorage.getItem(ID_TOKEN_KEY);
};

export const saveToken = access_token => {
  window.localStorage.setItem(ID_TOKEN_KEY,access_token);
};

export const destroyToken = () => {
  window.localStorage.removeItem(ID_TOKEN_KEY);
};

export default { getToken, saveToken, destroyToken };
