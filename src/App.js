import { Paper, Typography } from "@mui/material";
import { Box, Container } from "@mui/system";
import { Image } from "mui-image";
import Nav from "./Nav";

function App() {
  return (
    <>
      <Image src="icons/site-logo-transparent.webp" duration={500} width="50%" sx={{
        left: '50%'
      }}/>

      <Container sx={{
        maxWidth: "75%",
        left: "50%"
      }}>
        <Paper id="about" elevation={3} sx={{ padding: "1rem", textAlign: "center" }}>
          <Typography variant="h2" gutterBottom>
            About Me
          </Typography>
          {/* <Typography variant="subtitle1" gutterBottom>
            Programmer, musician, gamer
          </Typography> */}
          <Typography variant="p" component="div">
            I picked up a love for programming in 2013, from watching <a href="https://www.youtube.com/user/shiffman">The Coding Train</a>.
            I learned the basics of <a href="https://processing.org">Processing</a>, and started following an official programming education in 2017.
          </Typography>
          <br/>
          <Typography variant="p" component="div">
            From October 2018 until March 2019, I was participating in an international internship in the UK, where I have been working with Node.js on the back-end.
            One of the most difficult and useful skills I've had to learn was using Async.js, and subsequently learning to use callbacks, instead of the default async/await.
          </Typography>
          <br/>
          <Typography variant="p" component="div">
            One of my favourite pastimes is playing the guitar.
            I started taking lessons at the age of 14, but my skills with the electric guitar are mostly self-taught.
            I try to practice at least once a day, and am always looking for the next riff to master.
          </Typography>
          <br/>
          <Typography variant="p" component="div">
            For as long as I can remember, video games have been a part of my life.
            My all-time favourite game is The Legend of Zelda: Ocarina of Time, closely followed by <a href="https://clonehero.net">Clone Hero</a> and Breath of the Wild.
          </Typography>
          <br/>
          <Typography variant="p" component="div">
            I'm proficient with:
            <ul>
                <li>React (used to build this website)</li>
                <li>Kotlin (using the Ktor framework)</li>
                <li>Node.js</li>
                <li>C# (.NET Core)</li>
            </ul>
          </Typography>
        </Paper>

        <br/>

        <Paper id="experience" elevation={3} sx={{ padding: "1rem", textAlign: "center" }}>
          <Typography variant="h2" gutterBottom>
            Experience
          </Typography>
        </Paper>
      </Container>

      <Box sx={{ height: "calc(56px + 1rem)" }}></Box>
      <Nav/>
    </>
  );
}

export default App;
