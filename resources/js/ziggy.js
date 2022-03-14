const Ziggy = {"url":"https:\/\/ach-nb-0031.acg.corpnet.asus","port":null,"defaults":{},"routes":{"api\/redirect":{"uri":"api\/redirect","methods":["GET","HEAD"]},"home":{"uri":"home","methods":["GET","HEAD"]},"about":{"uri":"about","methods":["GET","HEAD"]},"portfolio":{"uri":"portfolio","methods":["GET","HEAD"]},"experience":{"uri":"experience","methods":["GET","HEAD"]},"contact":{"uri":"contact","methods":["GET","HEAD"]},"recaptcha":{"uri":"recaptcha","methods":["POST"]},"privacy-policy":{"uri":"privacy-policy","methods":["GET","HEAD"]},"terms-of-service":{"uri":"terms-of-service","methods":["GET","HEAD"]},"projects":{"uri":"projects","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
