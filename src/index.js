import { CssBaseline } from '@mui/material';
import React from 'react';
import App from './App';
import reportWebVitals from './reportWebVitals';
import { createTheme, ThemeProvider } from "@mui/material/styles";
import { render } from "react-dom";

const darkTheme = createTheme({
  palette: {
    type: 'dark',
    mode: 'dark',
    primary: {
      main: '#ffa54b',
    },
    secondary: {
      main: '#f50057',
    },
    background: {
      default: '#303030'
    }
  }
});

const container = document.getElementById('root');

render(
  <React.StrictMode>
    <ThemeProvider theme={darkTheme}>
      <CssBaseline/>
      <App />
    </ThemeProvider>
  </React.StrictMode>,
  container
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
