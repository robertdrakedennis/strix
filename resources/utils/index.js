export const page = path => async () => await import(`~/views/theme/${theme}/pages/${path}`).then(m => m.default || m);

export const theme = process.env.APP_THEME;
