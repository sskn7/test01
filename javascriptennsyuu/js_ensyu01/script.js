document.write ("■■■問１■■■");
document.write("<br>");
document.write("<br>");

for (var a=1;a <= 5;a++) {
  document.write ("★");
} 

document.write("<br>");
document.write("<br>");
document.write ("■■■問２■■■");
document.write("<br>");
document.write("<br>");

for (var b=1;b <= 2;b++) {
  for (var b2=1;b2 <= 3;b2++) {
    document.write("★");
  }    
  document.write("<br>");
}

document.write("<br>");
document.write ("■■■問３■■■");
document.write("<br>");
document.write("<br>");

for (var c=1;c <= 2;c++) {
  for (var c2= 1;c2 <= 5;c2++) {
    document.write ("☆");
  }
  document.write ("<br>");
}

document.write("<br>");
document.write ("■■■問４■■■");
document.write("<br>");
document.write("<br>");

// let s = "";
for (var d= 1;d <= 4;d++) {
  for (var d2= 1;d2 <= 5;d2++) {
    // s += "★";
    document.write ("★");
  }
  // s += "<br>";
  document.write ("<br>");
}
// document.write(s);

document.write("<br>");
document.write ("■■■問５■■■");
document.write("<br>");
document.write("<br>");

for (var e=1;e <= 4;e++) {
  for (var e2=1;e2 <= 3;e2++) {
    document.write("★");
  }
  document.write ("<br>");
}

document.write("<br>");
document.write ("■■■問６■■■");
document.write("<br>");
document.write("<br>");

for (var f= 1;f <= 3;f++) {
  for (var f2= 1;f2 <= 3;f2++) {
    if (f2%2 == 1) {
      document.write ("☆");
    } else {
      document.write ("★");
    }
  }
  document.write ("<br>");
}

document.write("<br>");
document.write ("■■■問７■■■");
document.write("<br>");
document.write("<br>");

for (var g= 1;g <= 4;g++) {
  for (var i= 1;i <= 5;i++) {
    if (i % 3 == 1) {
      document.write ("☆");
    } else {
      document.write ("★");
    }
  }
  document.write ("<br>");
}

document.write("<br>");
document.write ("■■■問８■■■");
document.write("<br>");
document.write("<br>");

for (var h= 1;h <= 5;h++) {
  for (var h2= 1;h2 <= h;h2++) {
    document.write ("★");
  }
  document.write("<br>");
}