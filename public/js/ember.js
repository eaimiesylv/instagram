function generateEmbedCode(elementId) {
  const element = document.getElementById(elementId);
  const html = element.innerHTML;
  const encodedHtml = encodeURIComponent(html);
  const embedCode = `<iframe srcdoc="${encodedHtml}" frameborder="0" width="100%" height="300"></iframe>`;
  return embedCode;
}