$(document).ready(function () {
  $(".english").hide();

  $("#dutch").click(function () {
    $(".dutch").show();
    $(".english").hide();
  });

  $("#english").click(function () {
    $(".english").show();
    $(".dutch").hide();
  });

  $(".continue").click(function () {
    let salutation = $(".salutation").val();
    let name = $(".name").val();
    let address = $(".address").val();
    let residence = $(".residence").val();
    let zip = $(".zip").val();
    let dob = $(".dob").val();
    let nationality = $(".nationality").val();
    let job = $(".job").val();

    let regexName = /\w*[a-zA-Z]\s\w*[a-zA-Z]/g;
    let checkedName = regexName.exec(name);

    let regexAddress = /\w*[a-zA-Z]\s{1}\d*/g;
    let checkedAddress = regexAddress.exec(address);

    let regexResidence = /\w+/g;
    let checkedResidence = regexResidence.exec(residence);

    let regexZip = /\d{4}[a-zA-Z]{2}/g;
    let checkedZip = regexZip.exec(zip);

    let regexDOB = /\d{2}-\d{2}-\d{4}/g;
    let checkedDOB = regexDOB.exec(dob);

    let regexNationality = /\w+/g;
    let checkedNationality = regexNationality.exec(nationality);

    let regexJob = /\w+/g;
    let checkedJob = regexJob.exec(job);

    if (checkedName === null) {
      $(".name").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedName !== null) {
      if (checkedName[0] != checkedName.input) {
        $(".name").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".name").css("border", "1px solid rgb(0, 255, 0");
      }
    }


    if (checkedAddress === null) {
      $(".address").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedAddress !== null) {
      if (checkedAddress[0] != checkedAddress.input) {
        $(".address").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".address").css("border", "1px solid rgb(0, 255, 0");
      }
    }


    if (checkedResidence === null) {
      $(".residence").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedResidence !== null) {
      if (checkedResidence[0] != checkedResidence.input) {
        $(".residence").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".residence").css("border", "1px solid rgb(0, 255, 0");
      }
    }


    if (checkedZip === null) {
      $(".zip").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedZip !== null) {
      if (checkedZip[0] != checkedZip.input) {
        $(".zip").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".zip").css("border", "1px solid rgb(0, 255, 0");
      }
    }

    if (checkedDOB === null) {
      $(".dob").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedDOB !== null) {
      if (checkedDOB[0] != checkedDOB.input) {
        $(".dob").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".dob").css("border", "1px solid rgb(0, 255, 0)");
      }
    }


    if (checkedNationality === null) {
      $(".nationality").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedNationality !== null) {
      if (checkedNationality[0] != checkedNationality.input) {
        $(".nationality").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".nationality").css("border", "1px solid rgb(0, 255, 0");
      }
    }


    if (checkedJob === null) {
      $(".job").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedJob !== null) {
      if (checkedJob[0] != checkedJob.input) {
        $(".job").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".job").css("border", "1px solid rgb(0, 255, 0");
      }
    }
  });

  $(".doorgaan").click(function () {
    let salutation = $(".aanhef").val();
    let name = $(".naam").val();
    let address = $(".adres").val();
    let residence = $(".woonplaats").val();
    let zip = $(".postcode").val();
    let dob = $(".geboortedatum").val();
    let nationality = $(".nationaliteit").val();
    let job = $(".beroep").val();

    let regexName = /\w*[a-zA-Z]\s\w*[a-zA-Z]/g;
    let checkedName = regexName.exec(name);

    let regexAddress = /\w*[a-zA-Z]\s{1}\d*/g;
    let checkedAddress = regexAddress.exec(address);

    let regexResidence = /\w+/g;
    let checkedResidence = regexResidence.exec(residence);

    let regexZip = /\d{4}[a-zA-Z]{2}/g;
    let checkedZip = regexZip.exec(zip);

    let regexDOB = /\d{2}-\d{2}-\d{4}/g;
    let checkedDOB = regexDOB.exec(dob);

    let regexNationality = /\w+/g;
    let checkedNationality = regexNationality.exec(nationality);

    let regexJob = /\w+/g;
    let checkedJob = regexJob.exec(job);

    if (checkedName === null) {
      $(".naam").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedName !== null) {
      if (checkedName[0] != checkedName.input) {
        $(".naam").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".naam").css("border", "1px solid rgb(0, 255, 0");
      }
    }


    if (checkedAddress === null) {
      $(".adres").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedAddress !== null) {
      if (checkedAddress[0] != checkedAddress.input) {
        $(".adres").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".adres").css("border", "1px solid rgb(0, 255, 0");
      }
    }


    if (checkedResidence === null) {
      $(".woonplaats").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedResidence !== null) {
      if (checkedResidence[0] != checkedResidence.input) {
        $(".woonplaats").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".woonplaats").css("border", "1px solid rgb(0, 255, 0");
      }
    }


    if (checkedZip === null) {
      $(".postcode").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedZip !== null) {
      if (checkedZip[0] != checkedZip.input) {
        $(".postcode").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".postcode").css("border", "1px solid rgb(0, 255, 0");
      }
    }


    if (checkedDOB === null) {
      $(".dob").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedDOB !== null) {
      if (checkedDOB[0] != checkedDOB.input) {
        $(".geboortedatum").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".geboortedatum").css("border", "1px solid rgb(0, 255, 0)");
      }
    }


    if (checkedNationality === null) {
      $(".nationaliteit").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedNationality !== null) {
      if (checkedNationality[0] != checkedNationality.input) {
        $(".nationaliteit").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".nationaliteit").css("border", "1px solid rgb(0, 255, 0");
      }
    }


    if (checkedJob === null) {
      $(".beroep").css("border", "1px solid rgb(255, 0, 0)");
    }

    if (checkedJob !== null) {
      if (checkedJob[0] != checkedJob.input) {
        $(".beroep").css("border", "1px solid rgb(255, 0, 0)");
      } else {
        $(".beroep").css("border", "1px solid rgb(0, 255, 0");
      }
    }
  });
});