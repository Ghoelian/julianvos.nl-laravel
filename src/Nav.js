import { Apps, Email, Home, LinearScale, Person } from "@mui/icons-material";
import { BottomNavigation, BottomNavigationAction, Paper } from "@mui/material";
import { useState } from "react";

function Nav() {
  const [value, setValue] = useState()

  return (
    <Paper sx={{ position: 'fixed', bottom: 0, left: 0, right: 0 }} elevation={3}>
      <BottomNavigation
        showLabels
        value={value}
        onChange={(event, newValue) => {
          setValue(newValue);
        }}
      >
        <BottomNavigationAction label="Home" icon={<Home/>} />
        <BottomNavigationAction label="About" icon={<Person/>} />
        <BottomNavigationAction label="Portfolio" icon={<Apps/>} />
        <BottomNavigationAction label="Experience" icon={<LinearScale/>} />
        <BottomNavigationAction label="Contact" icon={<Email/>} />
      </BottomNavigation>
    </Paper>
  )
}

export default Nav;