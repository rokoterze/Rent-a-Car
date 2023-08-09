(() => {
    const getCookie = (name) => {
      const value = " " + document.cookie;
      console.log("value", `==${value}==`);
      const parts = value.split(" " + name + "=");
      return parts.length < 2 ? undefined : parts.pop().split(";").shift();
    };
  
    const setCookie = function (name, value, expiryDays, domain, path, secure) {
      const exdate = new Date();
      exdate.setHours(
        exdate.getHours() +
          (typeof expiryDays !== "number" ? 365 : expiryDays) * 24
      );
      document.cookie =
        name +
        "=" +
        value +
        ";expires=" +
        exdate.toUTCString() +
        ";path=" +
        (path || "/") +
        (domain ? ";domain=" + domain : "") +
        (secure ? ";secure" : "");
    };
  
    const $cookiesBanner = document.querySelector(".cookies-eu-banner");
    //const $cookiesBannerButton = $cookiesBanner.querySelector("button");
    const $cookiesBannerButtonAccept = document.getElementById("accept");
    const $cookiesBannerButtonReject = document.getElementById("reject");
    const cookieName = "Terms Of Use";
    const hasCookie = getCookie(cookieName);
  
    if (!hasCookie) {
      $cookiesBanner.classList.remove("hidden");
    }
  
    $cookiesBannerButtonAccept.addEventListener("click", () => {
      setCookie(cookieName, "closed");
      $cookiesBanner.remove();
    }
    );

    $cookiesBannerButtonReject.addEventListener("click", () => {
      $cookiesBanner.remove();
    }
    
    );
  })();