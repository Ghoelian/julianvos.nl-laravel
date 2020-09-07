let namen = ["Zoe", "Bram", "Clarissa", "Isa", "Gerrie"];

document.write("A. ");
for(i=0; i<namen.length; i++) {
  document.write(namen[i] + ", ");
}
document.write("<br>");

let j = 0;
document.write("B. ");
while(j<namen.length) {
  document.write(namen[j] + ", ");
  j++;
}

document.write("<br>C. " + namen);

document.write("<br>D. " + namen.length);

namen.push("Julian");
document.write("<br>E. " + namen);

document.write("<br>F. ");
for(k=0; k<namen.length; k++) {
  document.write(namen[k] + "#");
}

namen.sort();
document.write("<br>G. " + namen);
