document.addEventListener("DOMContentLoaded", () => {
  const getIPs = (callback) => {
    const ipDups = {};
    const servers = { iceServers: [{ urls: "stun:stun.l.google.com:19302" }] };

    // construct a new RTCPeerConnection
    const pc = new RTCPeerConnection(servers /* , mediaConstraints */);

    function handleCandidate(candidate) {
      // match just the IP address
      const ipRegex =
        /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/;
      let ipAddr;
      const regexExec = ipRegex.exec(candidate);
      if (Array.isArray(regexExec) && regexExec.length) {
        [, ipAddr] = regexExec;
      }

      // remove duplicates
      if (!ipDups[ipAddr]) {
        callback(ipAddr);
      }

      ipDups[ipAddr] = true;
    }

    // listen for candidate events
    pc.onicecandidate = (ice) => {
      // skip non-candidate events
      if (ice.candidate) {
        handleCandidate(ice.candidate.candidate);
      }
    };

    pc.onicecandidateerror = (err) => {}; // eslint-disable-line

    // create a bogus data channel
    pc.createDataChannel("");

    // create an offer sdp
    pc.createOffer()
      .then((offer) => {
        return pc.setLocalDescription(offer);
      })
      .catch((e) => console.log("offer error", e));

    // wait for a while to let everything done
    setTimeout(() => {
      // read candidate info from local description
      const lines = pc.localDescription.sdp.split("\n");
      const candidateLines = lines.filter((line) =>
        line.includes("a=candidate:")
      );
      candidateLines.forEach((line) => handleCandidate(line));
    }, 1000);
  };

  const api_url = "https://api.multibrowser.io/v1/iplocation";
  async function getLocation() {
    const response = await fetch(api_url);
    const data = await response.json();
    // const {
    //   ip,
    //   continent,
    //   district,
    //   city,
    //   ip_range,
    //   ips,
    //   as_number,
    //   lat,
    //   lng,
    // } = data.ip_info;
    var responses = data;
    // const { zone, local } = data.time_info;
    if (responses.ip_info.hasOwnProperty("district")) {
      document.querySelector("#district").textContent = data.ip_info.district;
      console.log(data.ip_info.district);
    } else {
      console.log(1);
      document.querySelector("#districts").remove();
    }
    document.getElementById("ip").textContent = data.ip_info.ip;
    document.getElementById("continent").textContent = data.ip_info.continent;
    // document.getElementById("district").textContent = data.ip_info.district;
    document.getElementById("city").textContent = data.ip_info.city;
    document.getElementById("ip_range").textContent = data.ip_info.ip_range;
    document.getElementById("isp").textContent = data.ip_info.ips;
    document.getElementById("as_number").textContent = data.ip_info.as_number;
    document.getElementById("lat").textContent = data.ip_info.lat;
    document.getElementById("lon").textContent = data.ip_info.lng;
    document.getElementById("zone").textContent = data.time_info.zone;
    document.getElementById("local-time").textContent = data.time_info.local;

    // if (responses.ip_info.hasOwnProperty("ip")) {
    //   document
    //     .querySelector(".card__data_webrtc .webrtc-status-icon")
    //     .classList.remove("disabled");
    //   document.querySelector(".card__data_webrtc .cont").textContent =
    //     data.ip_info.ip;
    // } else {
    //   document
    //     .querySelector(".card__data_webrtc .webrtc-status-icon")
    //     .classList.add("disabled");
    //   document.querySelector(".card__data_webrtc .cont").textContent = "";
    // }
    const localTime = document.getElementById("local-time").textContent;
    document.getElementById("local-time").textContent = new Date(localTime);
  }
  getLocation();

  document.querySelectorAll("#javascript-status span").forEach((node) => {
    node.style.display = "block";
  });

  const setStatus = (selector) => {
    document
      .querySelector(`${selector} > .java-status-icon`)
      .classList.remove("disabled");
    document.querySelector(`${selector} > .cont`).textContent = "Enabled";
  };
  const getWindowSize = () => {
    let winWidth = "?";
    let winHeight = "?";
    try {
      if (document) {
        winWidth = document.body.offsetWidth;
        winHeight = document.body.offsetHeight;
      } else if (document.layers) {
        winWidth = document.body.width;
        winHeight = document.body.height;
      } else if (document.body.clientWidth !== null) {
        winWidth = document.body.clientWidth;
        winHeight = document.body.clientHeight;
      }
    } catch (e) {
      console.error(e);
    }
    return `${winWidth}x${winHeight} (${screen.width}x${screen.height})`;
  };

  getIPs((ip) => {
    if (ip) {
      document
        .querySelector(".card__data_webrtc .webrtc-status-icon")
        .classList.remove("disabled");
      document.querySelector(".card__data_webrtc .cont").textContent = ip;
      console.log(ip);
    } else {
      document
        .querySelector(".card__data_webrtc .webrtc-status-icon")
        .classList.add("disabled");
      document.querySelector(".card__data_webrtc .cont").textContent = "";
    }
  });

  if (window.screen) {
    const screenFieldsArr = [
      "colorDepth",
      "pixelDepth",
      "height",
      "width",
      "availHeight",
      "availWidth",
      "availTop",
      "availLeft",
      "windowSize",
    ];
    const childScreenDivs = document.querySelectorAll("#screen > div");
    screenFieldsArr.forEach((elem, index) => {
      if (window.screen[elem] || Number.isInteger(window.screen[elem])) {
        childScreenDivs[index].children[1].textContent = window.screen[elem];
      }
      if (index === screenFieldsArr.length - 1) {
        childScreenDivs[index].children[1].textContent = getWindowSize();
      }
    });
  }
  // const localTime = document.getElementById("local-time").textContent;
  // document.getElementById("local-time").textContent = new Date(localTime);
  document.getElementById("system-time").textContent = new Date();
  // let c_Depth = screen.colorDepth;
  // let p_Depth = screen.pixelDepth;
  // let height = screen.height;
  // let width = screen.width;
  // let a_Height = screen.availHeight;
  // let a_Width = screen.availWidth;
  // let a_Top = screen.availTop;
  // let a_Left = screen.availLeft;
  // document.getElementById("colorDepth").innerHTML = c_Depth;
  // document.getElementById("pixelDepth").innerHTML = p_Depth;
  // document.getElementById("height").innerHTML = height;
  // document.getElementById("width").innerHTML = width;
  // document.getElementById("availHeight").innerHTML = a_Height;
  // document.getElementById("availWidth").innerHTML = a_Width;
  // document.getElementById("availTop").innerHTML = a_Top;
  // document.getElementById("availLeft").innerHTML = a_Left;
  // document.getElementById("screenSize").innerHTML = getWindowSize();

  if (navigator) {
    const navFieldsArr = [
      "vendorSub",
      "productSub",
      "vendor",
      "maxTouchPoints",
      "hardwareConcurrency",
      "deviceMemory",
      "cookieEnabled",
      "appCodeName",
      "appName",
      "appVersion",
      "platform",
      "product",
      "userAgent",
      "language",
      "onLine",
    ];

    const childNavDivs = document.querySelectorAll("#browser-navigator > div");
    navFieldsArr.forEach((elem, index) => {
      if (navigator[elem] || Number.isInteger(navigator[elem])) {
        childNavDivs[index].children[1].textContent = navigator[elem];
      }
    });

    if (
      navigator &&
      navigator.languages &&
      Array.isArray(navigator.languages)
    ) {
      const { languages } = navigator;
      let resultLanguages = [];

      languages.forEach((item) => {
        const splittedItem = item.split("-");
        resultLanguages.push(splittedItem.pop().toUpperCase());
      });

      resultLanguages = [...new Set(resultLanguages)];

      resultLanguages.forEach((item) => {
        const span = document.createElement("span");
        span.className = "lang";
        span.textContent = item;
        document.getElementById("language").append(span);
      });
    }

    if (navigator.cookieEnabled) {
      setStatus("#cookies-status");
    }

    if (navigator.javaEnabled()) {
      setStatus("#java-status");
    }

    if (navigator.plugins) {
      const childPlugDivs = document.querySelector("#plugins");
      const pluginsValues = Object.values(navigator.plugins);

      if (!pluginsValues.length) {
        childPlugDivs.textContent = "Plugins missing";
      }

      pluginsValues.forEach((elem) => {
        const pluginsDiv = document.createElement("div");
        const pluginsParam = document.createElement("div");
        const pluginsValue = document.createElement("div");

        pluginsDiv.classList.add("card__row");
        pluginsParam.classList.add("card__col", "card__col_param");
        pluginsValue.classList.add("card__col", "card__col_value");

        pluginsDiv.appendChild(pluginsParam);
        pluginsDiv.appendChild(pluginsValue);

        pluginsParam.textContent = elem.name;
        pluginsValue.textContent = elem.filename;

        childPlugDivs.appendChild(pluginsDiv);
      });
    }
  }

  // var java = navigator.javaEnabled();
  // if (java) {
  //   console.log(java);
  //   setStatus("#java-status");
  // }

  let activeX = false;
  let flash = false;

  try {
    flash = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
    activeX = true;
  } catch (e) {
    const { mimeTypes } = navigator;
    if (
      mimeTypes &&
      mimeTypes["application/x-shockwave-flash"] &&
      navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin
    ) {
      flash = true;
    }
  }

  if (activeX) {
    setStatus("#activex-status");
  }

  if (flash) {
    setStatus("#flash-status");
  }
  var nVer = navigator.appVersion;
  var nAgt = navigator.userAgent;
  var nAgtData = navigator.userAgentData.platform;
  var browserName = navigator.appName;
  var fullVersion = "" + parseFloat(navigator.appVersion);
  var nameOffset, verOffset, ix;

  // In Opera, the true version is after "Opera" or after "Version"
  if ((verOffset = nAgt.indexOf("Opera")) != -1) {
    browserName = "Opera";
    fullVersion = nAgt.substring(verOffset + 6);
    if ((verOffset = nAgt.indexOf("Version")) != -1)
      fullVersion = nAgt.substring(verOffset + 8);
  }
  // In MSIE, the true version is after "MSIE" in userAgent
  else if ((verOffset = nAgt.indexOf("MSIE")) != -1) {
    browserName = "Microsoft Internet Explorer";
    fullVersion = nAgt.substring(verOffset + 5);
  }
  // In Chrome, the true version is after "Chrome"
  else if ((verOffset = nAgt.indexOf("Chrome")) != -1) {
    browserName = "Chrome";
    fullVersion = nAgt.substring(verOffset + 7);
  }
  // In Safari, the true version is after "Safari" or after "Version"
  else if ((verOffset = nAgt.indexOf("Safari")) != -1) {
    browserName = "Safari";
    fullVersion = nAgt.substring(verOffset + 7);
    if ((verOffset = nAgt.indexOf("Version")) != -1)
      fullVersion = nAgt.substring(verOffset + 8);
  }
  // In Firefox, the true version is after "Firefox"
  else if ((verOffset = nAgt.indexOf("Firefox")) != -1) {
    browserName = "Firefox";
    fullVersion = nAgt.substring(verOffset + 8);
  }
  // In most other browsers, "name/version" is at the end of userAgent
  else if (
    (nameOffset = nAgt.lastIndexOf(" ") + 1) <
    (verOffset = nAgt.lastIndexOf("/"))
  ) {
    browserName = nAgt.substring(nameOffset, verOffset);
    fullVersion = nAgt.substring(verOffset + 1);
    if (browserName.toLowerCase() == browserName.toUpperCase()) {
      browserName = navigator.appName;
    }
  }
  // trim the fullVersion string at semicolon/space if present
  if ((ix = fullVersion.indexOf(";")) != -1)
    fullVersion = fullVersion.substring(0, ix);
  if ((ix = fullVersion.indexOf(" ")) != -1)
    fullVersion = fullVersion.substring(0, ix);

  document.getElementById("browser").textContent = browserName;
  document.getElementById("platform").textContent = nAgtData;
  document.getElementById("vBrowser").textContent = fullVersion;
  document.getElementById("javaScript").textContent = navigator.userAgent;
  // document.write(
  //   "" +
  //     "Browser name  = " +
  //     browserName +
  //     "<br>" +
  //     "Full version  = " +
  //     fullVersion +
  //     "<br>" +
  //     "navigator.userAgent = " +
  //     navigator.userAgent +
  //     "<br>"
  // );
});
