function elif(cijfer1, cijfer2, actie) {
  if(actie == "aftrekken"){
    return(cijfer1 - cijfer2);
  } else if(actie == "optellen") {
    return(cijfer1 + cijfer2);
  } else if(actie == "vermenigvuldigen") {
    return(cijfer1 * cijfer2);
  } else if(actie == "delen") {
    return(cijfer1 / cijfer2);
  }
}

function sw(cijfer1, cijfer2, actie) {
  switch(actie) {
    case "aftrekken":
      return(cijfer1 - cijfer2);
    case "optellen":
      return(cijfer1 + cijfer2);
    case "vermenigvuldigen":
      return(cijfer1 * cijfer2);
    case "delen":
      return(cijfer1 / cijfer2);
  }
}

document.getElementById("elif").innerHTML = elif(5, 10, "vermenigvuldigen");
document.getElementById("switch").innerHTML = sw(5, 10, "delen");
