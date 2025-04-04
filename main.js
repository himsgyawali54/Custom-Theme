window.$crisp = [];
window.CRISP_WEBSITE_ID = "b4eef2b2-4508-44eb-8a19-0a3c974eb2cf";
(function () {
  d = document;
  s = d.createElement("script");
  s.src = "https://client.crisp.chat/l.js";
  s.async = 1;
  d.getElementsByTagName("head")[0].appendChild(s);
})();
$crisp.push(["do", "chat:open"]);
function show() {
  var t = document.getElementById("showWhatsapp");
  "hidden" == t.style.visibility
    ? (t.style.cssText = `
        visibility:visible;
        opacity: 1;
       
    `)
    : (t.style.cssText = `
        visibility:hidden;
        opacity: 0;
        transition:opacity 600ms, visibility 600ms;
        
    `);
}

function closeWhatsapp() {
  document.getElementById("showWhatsapp").style.cssText = `
  visibility:hidden;
  opacity: 0;
  transition:opacity 600ms, visibility 600ms;
`;
}

function scrollFunction() {
  document.body.scrollTop > 20 || document.documentElement.scrollTop > 20
    ? (document.getElementById("goTop").style.cssText = `
    visibility:visible;
    opacity: 1;
    `)
    : (document.getElementById("goTop").style.cssText = `
    visibility:hidden;
    opacity: 0;
    `);
}

function topFunction() {
  (document.body.scrollTop = 0), (document.documentElement.scrollTop = 0);
}
window.onscroll = function () {
  scrollFunction();
};
var currentLink;

const changeColor = (element) => {
  if (currentLink) {
    currentLink.classList.remove("clicked");
  }
  element.classList.add("clicked");
  currentLink = element;
};
