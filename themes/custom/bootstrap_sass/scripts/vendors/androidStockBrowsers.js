import $ from 'jquery';
export default () => {
    //https://getbootstrap.com/docs/4.1/getting-started/browsers-devices/#android-stock-browser
    const nua = navigator.userAgent
    const isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1);

    if (isAndroid) {
        $('select.form-control').removeClass('form-control').css('width', '100%');
    }
}