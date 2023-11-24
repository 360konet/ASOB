<!DOCTYPE html>
<html lang="en">

<head>
<title>GAF ASOB</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
  <link rel="stylesheet" href="assets/css/style.css">

	<!-- ekko-lightbox css -->
	<style>
		.ekko-lightbox{display:-ms-flexbox!important;display:flex!important;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;padding-right:0!important}.ekko-lightbox-container{position:relative}.ekko-lightbox-container>div.ekko-lightbox-item{position:absolute;top:0;left:0;bottom:0;right:0;width:100%}.ekko-lightbox iframe{width:100%;height:100%}.ekko-lightbox-nav-overlay{z-index:1;position:absolute;top:0;left:0;width:100%;height:100%;display:-ms-flexbox;display:flex}.ekko-lightbox-nav-overlay a{-ms-flex:1;flex:1;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;opacity:0;transition:opacity .5s;color:#fff;font-size:30px;z-index:1}.ekko-lightbox-nav-overlay a>*{-ms-flex-positive:1;flex-grow:1}.ekko-lightbox-nav-overlay a>:focus{outline:none}.ekko-lightbox-nav-overlay a span{padding:0 30px}.ekko-lightbox-nav-overlay a:last-child span{text-align:right}.ekko-lightbox-nav-overlay a:hover{text-decoration:none}.ekko-lightbox-nav-overlay a:focus{outline:none}.ekko-lightbox-nav-overlay a.disabled{cursor:default;visibility:hidden}.ekko-lightbox a:hover{opacity:1;text-decoration:none}.ekko-lightbox .modal-dialog{display:none}.ekko-lightbox .modal-footer{text-align:left}.ekko-lightbox-loader{position:absolute;top:0;left:0;bottom:0;right:0;width:100%;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center}.ekko-lightbox-loader>div{width:40px;height:40px;position:relative;text-align:center}.ekko-lightbox-loader>div>div{width:100%;height:100%;border-radius:50%;background-color:#fff;opacity:.6;position:absolute;top:0;left:0;animation:a 2s infinite ease-in-out}.ekko-lightbox-loader>div>div:last-child{animation-delay:-1s}.modal-dialog .ekko-lightbox-loader>div>div{background-color:#333}@keyframes a{0%,to{transform:scale(0);-webkit-transform:scale(0)}50%{transform:scale(1);-webkit-transform:scale(1)}}
/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImVra28tbGlnaHRib3guY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBLGVBQ0UsOEJBQXlCLEFBQXpCLHVCQUF5QixBQUN6QixzQkFBb0IsQUFBcEIsbUJBQW9CLEFBQ3BCLHFCQUF3QixBQUF4Qix1QkFBd0IsQUFDeEIseUJBQTZCLENBQzlCLEFBQ0QseUJBQ0UsaUJBQW1CLENBQ3BCLEFBQ0QsZ0RBQ0Usa0JBQW1CLEFBQ25CLE1BQU8sQUFDUCxPQUFRLEFBQ1IsU0FBVSxBQUNWLFFBQVMsQUFDVCxVQUFZLENBQ2IsQUFDRCxzQkFDRSxXQUFZLEFBQ1osV0FBYSxDQUNkLEFBQ0QsMkJBQ0UsVUFBYSxBQUNiLGtCQUFtQixBQUNuQixNQUFPLEFBQ1AsT0FBUSxBQUNSLFdBQVksQUFDWixZQUFhLEFBQ2Isb0JBQWMsQUFBZCxZQUFjLENBQ2YsQUFDRCw2QkFDRSxXQUFRLEFBQVIsT0FBUSxBQUNSLG9CQUFjLEFBQWQsYUFBYyxBQUNkLHNCQUFvQixBQUFwQixtQkFBb0IsQUFDcEIsVUFBVyxBQUNYLHVCQUF5QixBQUN6QixXQUFZLEFBQ1osZUFBZ0IsQUFDaEIsU0FBYSxDQUNkLEFBQ0QsK0JBQ0Usb0JBQWEsQUFBYixXQUFhLENBQ2QsQUFDRCxvQ0FDRSxZQUFjLENBQ2YsQUFDRCxrQ0FDRSxjQUFnQixDQUNqQixBQUNELDZDQUNFLGdCQUFrQixDQUNuQixBQUNELG1DQUNFLG9CQUFzQixDQUN2QixBQUNELG1DQUNFLFlBQWMsQ0FDZixBQUNELHNDQUNFLGVBQWdCLEFBQ2hCLGlCQUFtQixDQUNwQixBQUNELHVCQUNFLFVBQVcsQUFDWCxvQkFBc0IsQ0FDdkIsQUFDRCw2QkFDRSxZQUFjLENBQ2YsQUFDRCw2QkFDRSxlQUFpQixDQUNsQixBQUNELHNCQUNFLGtCQUFtQixBQUNuQixNQUFPLEFBQ1AsT0FBUSxBQUNSLFNBQVUsQUFDVixRQUFTLEFBQ1QsV0FBWSxBQUNaLG9CQUFjLEFBQWQsYUFBYyxBQUVkLDBCQUF1QixBQUF2QixzQkFBdUIsQUFFdkIscUJBQXdCLEFBQXhCLHVCQUF3QixBQUV4QixzQkFBb0IsQUFBcEIsa0JBQW9CLENBQ3JCLEFBQ0QsMEJBQ0UsV0FBWSxBQUNaLFlBQWEsQUFDYixrQkFBbUIsQUFDbkIsaUJBQW1CLENBQ3BCLEFBQ0QsOEJBQ0UsV0FBWSxBQUNaLFlBQWEsQUFDYixrQkFBbUIsQUFDbkIsc0JBQXVCLEFBQ3ZCLFdBQWEsQUFDYixrQkFBbUIsQUFDbkIsTUFBTyxBQUNQLE9BQVEsQUFDUixtQ0FBNkMsQ0FDOUMsQUFDRCx5Q0FDRSxtQkFBcUIsQ0FDdEIsQUFDRCw0Q0FDRSxxQkFBdUIsQ0FDeEIsQUFVRCxhQUNFLE1BRUUsbUJBQW9CLEFBQ3BCLDBCQUE0QixDQUM3QixBQUNELElBQ0UsbUJBQW9CLEFBQ3BCLDBCQUE0QixDQUM3QixDQUNGIiwiZmlsZSI6ImVra28tbGlnaHRib3guY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLmVra28tbGlnaHRib3gge1xuICBkaXNwbGF5OiBmbGV4ICFpbXBvcnRhbnQ7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICBwYWRkaW5nLXJpZ2h0OiAwcHghaW1wb3J0YW50O1xufVxuLmVra28tbGlnaHRib3gtY29udGFpbmVyIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xufVxuLmVra28tbGlnaHRib3gtY29udGFpbmVyID4gZGl2LmVra28tbGlnaHRib3gtaXRlbSB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAwO1xuICBsZWZ0OiAwO1xuICBib3R0b206IDA7XG4gIHJpZ2h0OiAwO1xuICB3aWR0aDogMTAwJTtcbn1cbi5la2tvLWxpZ2h0Ym94IGlmcmFtZSB7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IDEwMCU7XG59XG4uZWtrby1saWdodGJveC1uYXYtb3ZlcmxheSB7XG4gIHotaW5kZXg6IDEwMDtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB0b3A6IDA7XG4gIGxlZnQ6IDA7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IDEwMCU7XG4gIGRpc3BsYXk6IGZsZXg7XG59XG4uZWtrby1saWdodGJveC1uYXYtb3ZlcmxheSBhIHtcbiAgZmxleDogMTtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgb3BhY2l0eTogMDtcbiAgdHJhbnNpdGlvbjogb3BhY2l0eSAwLjVzO1xuICBjb2xvcjogI2ZmZjtcbiAgZm9udC1zaXplOiAzMHB4O1xuICB6LWluZGV4OiAxMDA7XG59XG4uZWtrby1saWdodGJveC1uYXYtb3ZlcmxheSBhID4gKiB7XG4gIGZsZXgtZ3JvdzogMTtcbn1cbi5la2tvLWxpZ2h0Ym94LW5hdi1vdmVybGF5IGEgPiAqOmZvY3VzIHtcbiAgb3V0bGluZTogbm9uZTtcbn1cbi5la2tvLWxpZ2h0Ym94LW5hdi1vdmVybGF5IGEgc3BhbiB7XG4gIHBhZGRpbmc6IDAgMzBweDtcbn1cbi5la2tvLWxpZ2h0Ym94LW5hdi1vdmVybGF5IGE6bGFzdC1jaGlsZCBzcGFuIHtcbiAgdGV4dC1hbGlnbjogcmlnaHQ7XG59XG4uZWtrby1saWdodGJveC1uYXYtb3ZlcmxheSBhOmhvdmVyIHtcbiAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xufVxuLmVra28tbGlnaHRib3gtbmF2LW92ZXJsYXkgYTpmb2N1cyB7XG4gIG91dGxpbmU6IG5vbmU7XG59XG4uZWtrby1saWdodGJveC1uYXYtb3ZlcmxheSBhLmRpc2FibGVkIHtcbiAgY3Vyc29yOiBkZWZhdWx0O1xuICB2aXNpYmlsaXR5OiBoaWRkZW47XG59XG4uZWtrby1saWdodGJveCBhOmhvdmVyIHtcbiAgb3BhY2l0eTogMTtcbiAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xufVxuLmVra28tbGlnaHRib3ggLm1vZGFsLWRpYWxvZyB7XG4gIGRpc3BsYXk6IG5vbmU7XG59XG4uZWtrby1saWdodGJveCAubW9kYWwtZm9vdGVyIHtcbiAgdGV4dC1hbGlnbjogbGVmdDtcbn1cbi5la2tvLWxpZ2h0Ym94LWxvYWRlciB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAwO1xuICBsZWZ0OiAwO1xuICBib3R0b206IDA7XG4gIHJpZ2h0OiAwO1xuICB3aWR0aDogMTAwJTtcbiAgZGlzcGxheTogZmxleDtcbiAgLyogZXN0YWJsaXNoIGZsZXggY29udGFpbmVyICovXG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIC8qIG1ha2UgbWFpbiBheGlzIHZlcnRpY2FsICovXG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICAvKiBjZW50ZXIgaXRlbXMgdmVydGljYWxseSwgaW4gdGhpcyBjYXNlICovXG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG59XG4uZWtrby1saWdodGJveC1sb2FkZXIgPiBkaXYge1xuICB3aWR0aDogNDBweDtcbiAgaGVpZ2h0OiA0MHB4O1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbn1cbi5la2tvLWxpZ2h0Ym94LWxvYWRlciA+IGRpdiA+IGRpdiB7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IDEwMCU7XG4gIGJvcmRlci1yYWRpdXM6IDUwJTtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcbiAgb3BhY2l0eTogMC42O1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHRvcDogMDtcbiAgbGVmdDogMDtcbiAgYW5pbWF0aW9uOiBzay1ib3VuY2UgMnMgaW5maW5pdGUgZWFzZS1pbi1vdXQ7XG59XG4uZWtrby1saWdodGJveC1sb2FkZXIgPiBkaXYgPiBkaXY6bGFzdC1jaGlsZCB7XG4gIGFuaW1hdGlvbi1kZWxheTogLTFzO1xufVxuLm1vZGFsLWRpYWxvZyAuZWtrby1saWdodGJveC1sb2FkZXIgPiBkaXYgPiBkaXYge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjMzMzO1xufVxuQC13ZWJraXQta2V5ZnJhbWVzIHNrLWJvdW5jZSB7XG4gIDAlLFxuICAxMDAlIHtcbiAgICAtd2Via2l0LXRyYW5zZm9ybTogc2NhbGUoMCk7XG4gIH1cbiAgNTAlIHtcbiAgICAtd2Via2l0LXRyYW5zZm9ybTogc2NhbGUoMSk7XG4gIH1cbn1cbkBrZXlmcmFtZXMgc2stYm91bmNlIHtcbiAgMCUsXG4gIDEwMCUge1xuICAgIHRyYW5zZm9ybTogc2NhbGUoMCk7XG4gICAgLXdlYmtpdC10cmFuc2Zvcm06IHNjYWxlKDApO1xuICB9XG4gIDUwJSB7XG4gICAgdHJhbnNmb3JtOiBzY2FsZSgxKTtcbiAgICAtd2Via2l0LXRyYW5zZm9ybTogc2NhbGUoMSk7XG4gIH1cbn1cbiJdfQ== */
	</style>

	<style>
		.lb-loader,.lightbox{text-align:center;line-height:0;position:absolute;left:0}body.lb-disable-scrolling{overflow:hidden}.lightboxOverlay{position:absolute;top:0;left:0;z-index:9999;background-color:#000;filter:alpha(Opacity=80);opacity:.8;display:none}.lightbox{width:100%;z-index:10000;font-weight:400;outline:0}.lightbox .lb-image{display:block;height:auto;max-width:inherit;max-height:none;border-radius:3px;border:4px solid #fff}.lightbox a img{border:none}.lb-outerContainer{position:relative;width:250px;height:250px;margin:0 auto;border-radius:4px;background-color:#fff}.lb-outerContainer:after{content:"";display:table;clear:both}.lb-loader{top:43%;height:25%;width:100%}.lb-cancel{display:block;width:32px;height:32px;margin:0 auto;background:url(../images/loading.gif) no-repeat}.lb-nav{position:absolute;top:0;left:0;height:100%;width:100%;z-index:10}.lb-container>.nav{left:0}.lb-nav a{outline:0;background-image:url(data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==)}.lb-next,.lb-prev{height:100%;cursor:pointer;display:block}.lb-nav a.lb-prev{width:34%;left:0;float:left;background:url(../images/prev.png) left 48% no-repeat;filter:alpha(Opacity=0);opacity:0;-webkit-transition:opacity .6s;-moz-transition:opacity .6s;-o-transition:opacity .6s;transition:opacity .6s}.lb-nav a.lb-prev:hover{filter:alpha(Opacity=100);opacity:1}.lb-nav a.lb-next{width:64%;right:0;float:right;background:url(../images/next.png) right 48% no-repeat;filter:alpha(Opacity=0);opacity:0;-webkit-transition:opacity .6s;-moz-transition:opacity .6s;-o-transition:opacity .6s;transition:opacity .6s}.lb-nav a.lb-next:hover{filter:alpha(Opacity=100);opacity:1}.lb-dataContainer{margin:0 auto;padding-top:5px;width:100%;border-bottom-left-radius:4px;border-bottom-right-radius:4px}.lb-dataContainer:after{content:"";display:table;clear:both}.lb-data{padding:0 4px;color:#ccc}.lb-data .lb-details{width:85%;float:left;text-align:left;line-height:1.1em}.lb-data .lb-caption{font-size:13px;font-weight:700;line-height:1em}.lb-data .lb-caption a{color:#4ae}.lb-data .lb-number{display:block;clear:left;padding-bottom:1em;font-size:12px;color:#999}.lb-data .lb-close{display:block;float:right;width:30px;height:30px;background:url(../images/close.png) top right no-repeat;text-align:right;outline:0;filter:alpha(Opacity=70);opacity:.7;-webkit-transition:opacity .2s;-moz-transition:opacity .2s;-o-transition:opacity .2s;transition:opacity .2s}.lb-data .lb-close:hover{cursor:pointer;filter:alpha(Opacity=100);opacity:1}
	</style>
	<!-- vendor css -->
	<style>
        /**======================================================================
=========================================================================
Template Name: Able pro Bootstrap Admin Template
Author: Phoenixcoded
Support: support@phoenixcoded.net
File: style.css
=========================================================================
=================================================================================== */
/* cyrillic-ext */
@import url(plugins/animate.min.css);

@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(../fonts/opensans/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format("woff2");
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(../fonts/opensans/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format("woff2");
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(../fonts/opensans/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format("woff2");
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(../fonts/opensans/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format("woff2");
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(../fonts/opensans/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format("woff2");
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(../fonts/opensans/mem8YaGs126MiZpBA-UFW50bbck.woff2) format("woff2");
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFVZ0b.woff2) format("woff2");
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(../fonts/opensans/mem5YaGs126MiZpBA-UNirkOX-hpOqc.woff2) format("woff2");
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(../fonts/opensans/mem5YaGs126MiZpBA-UNirkOVuhpOqc.woff2) format("woff2");
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(../fonts/opensans/mem5YaGs126MiZpBA-UNirkOXuhpOqc.woff2) format("woff2");
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(../fonts/opensans/mem5YaGs126MiZpBA-UNirkOUehpOqc.woff2) format("woff2");
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(../fonts/opensans/mem5YaGs126MiZpBA-UNirkOXehpOqc.woff2) format("woff2");
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(../fonts/opensans/mem5YaGs126MiZpBA-UNirkOXOhpOqc.woff2) format("woff2");
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format("woff2");
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
 * Container style
 */
.ps {
    overflow: hidden !important;
    overflow-anchor: none;
    -ms-overflow-style: none;
    touch-action: auto;
    -ms-touch-action: auto;
}

/*
 * Scrollbar rail styles
 */
.ps__rail-x {
    display: none;
    opacity: 0;
    transition: background-color .2s linear, opacity .2s linear;
    -webkit-transition: background-color .2s linear, opacity .2s linear;
    height: 15px;
  /* there must be 'bottom' or 'top' for ps__rail-x */
    bottom: 0px;
  /* please don't change 'position' */
  position: absolute; }

.ps__rail-y {
  display: none;
  opacity: 0;
  transition: background-color .2s linear, opacity .2s linear;
  -webkit-transition: background-color .2s linear, opacity .2s linear;
  width: 15px;
  /* there must be 'right' or 'left' for ps__rail-y */
  right: 0;
  /* please don't change 'position' */
    position: absolute;
}

.ps--active-x > .ps__rail-x,
.ps--active-y > .ps__rail-y {
    display: block;
    background-color: transparent;
}

.ps:hover > .ps__rail-x,
.ps:hover > .ps__rail-y,
.ps--focus > .ps__rail-x,
.ps--focus > .ps__rail-y,
.ps--scrolling-x > .ps__rail-x,
.ps--scrolling-y > .ps__rail-y {
    opacity: 0.6;
}

.ps .ps__rail-x:hover,
.ps .ps__rail-y:hover,
.ps .ps__rail-x:focus,
.ps .ps__rail-y:focus,
.ps .ps__rail-x.ps--clicking,
.ps .ps__rail-y.ps--clicking {
    background-color: #eee;
    opacity: 0.9;
}

/*
 * Scrollbar thumb styles
 */
.ps__thumb-x {
    background-color: #aaa;
    border-radius: 6px;
    transition: background-color .2s linear, height .2s ease-in-out;
    -webkit-transition: background-color .2s linear, height .2s ease-in-out;
    height: 6px;
  /* there must be 'bottom' for ps__thumb-x */
    bottom: 2px;
  /* please don't change 'position' */
  position: absolute; }

.ps__thumb-y {
  background-color: #aaa;
  border-radius: 6px;
  transition: background-color .2s linear, width .2s ease-in-out;
  -webkit-transition: background-color .2s linear, width .2s ease-in-out;
  width: 6px;
  /* there must be 'right' for ps__thumb-y */
  right: 2px;
  /* please don't change 'position' */
    position: absolute;
}

.ps__rail-x:hover > .ps__thumb-x,
.ps__rail-x:focus > .ps__thumb-x,
.ps__rail-x.ps--clicking .ps__thumb-x {
    background-color: #999;
    height: 11px;
}

.ps__rail-y:hover > .ps__thumb-y,
.ps__rail-y:focus > .ps__thumb-y,
.ps__rail-y.ps--clicking .ps__thumb-y {
    background-color: #999;
    width: 11px;
}

/* MS supports */
@supports (-ms-overflow-style: none) {
    .ps {
        overflow: auto !important;
    }
}

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
    .ps {
        overflow: auto !important;
    }
}

/*
    description Of variables for build for theme layouts
        1) menu-caption-color
            List of color for sidebar menu caption

        2) brand-background
            List of color for logo background

        3) header-dark-background
            List of color for Dark Header

        4) header-light-background
            List of color for light Header

        5) menu-dark-background
            List of color for Dark sidebar menu

        6) menu-light-background
            List of color for light sidebar menu

        7) menu-active-color
            List of color for Active item highliter

        8) menu-icon-color
            List of color for sidebar menu items icon colors
*/
/*!
 * Bootstrap v4.5.0 (https://getbootstrap.com/)
 * Copyright 2011-2020 The Bootstrap Authors
 * Copyright 2011-2020 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
    --blue: #4680ff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #ff5252;
    --orange: #fd7e14;
    --yellow: #ffba57;
    --green: #9ccc65;
    --teal: #20c997;
    --cyan: #00acc1;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #4680ff;
    --secondary: #6c757d;
    --success: #9ccc65;
    --info: #00acc1;
    --warning: #ffba57;
    --danger: #ff5252;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: "Open Sans", sans-serif;
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}

body {
    margin: 0;
    font-family: "Open Sans", sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #373a3c;
    text-align: left;
    background-color: #ecf0f5;
}

[tabindex="-1"]:focus:not(:focus-visible) {
    outline: 0 !important;
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0;
    -webkit-text-decoration-skip-ink: none;
    text-decoration-skip-ink: none;
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit;
}

ol,
ul,
dl {
    margin-top: 0;
    margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
    margin-bottom: 0;
}

dt {
    font-weight: 700;
}

dd {
    margin-bottom: .5rem;
    margin-left: 0;
}

blockquote {
    margin: 0 0 1rem;
}

b,
strong {
    font-weight: bolder;
}

small {
    font-size: 80%;
}

sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
}

sub {
    bottom: -.25em;
}

sup {
    top: -.5em;
}

a {
    color: #4680ff;
    text-decoration: none;
    background-color: transparent;
}

a:hover {
    color: #4680ff;
    text-decoration: underline;
}

a:not([href]) {
    color: inherit;
    text-decoration: none;
}

a:not([href]):hover {
    color: inherit;
    text-decoration: none;
}

pre,
code,
kbd,
samp {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    font-size: 1em;
}

pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
    -ms-overflow-style: scrollbar;
}

figure {
    margin: 0 0 1rem;
}

img {
    vertical-align: middle;
    border-style: none;
}

svg {
    overflow: hidden;
    vertical-align: middle;
}

table {
    border-collapse: collapse;
}

caption {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    color: #868e96;
    text-align: left;
    caption-side: bottom;
}

th {
    text-align: inherit;
}

label {
    display: inline-block;
    margin-bottom: 0.5rem;
}

button {
    border-radius: 0;
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

button,
input {
    overflow: visible;
}

button,
select {
    text-transform: none;
}

[role="button"] {
    cursor: pointer;
}

select {
    word-wrap: normal;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
    -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
    cursor: pointer;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
    padding: 0;
    border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
    box-sizing: border-box;
    padding: 0;
}

textarea {
    overflow: auto;
    resize: vertical;
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: .5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal;
}

progress {
    vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
    height: auto;
}

[type="search"] {
    outline-offset: -2px;
    -webkit-appearance: none;
}

[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button;
}

output {
    display: inline-block;
}

summary {
    display: list-item;
    cursor: pointer;
}

template {
    display: none;
}

[hidden] {
    display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}

h1, .h1 {
    font-size: 2.5rem;
}

h2, .h2 {
    font-size: 2.25rem;
}

h3, .h3 {
    font-size: 1.5rem;
}

h4, .h4 {
    font-size: 1.25rem;
}

h5, .h5 {
    font-size: 1rem;
}

h6, .h6 {
    font-size: 0.875rem;
}

.lead {
    font-size: 1.25rem;
    font-weight: 300;
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2;
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2;
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2;
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
    font-size: 80%;
    font-weight: 400;
}

mark,
.mark {
    padding: 0.2em;
    background-color: #fcf8e3;
}

.list-unstyled {
    padding-left: 0;
    list-style: none;
}

.list-inline {
    padding-left: 0;
    list-style: none;
}

.list-inline-item {
    display: inline-block;
}

.list-inline-item:not(:last-child) {
    margin-right: 0.5rem;
}

.initialism {
    font-size: 90%;
    text-transform: uppercase;
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem;
}

.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #6c757d;
}

.blockquote-footer::before {
    content: "\2014\00A0";
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

.img-thumbnail {
    padding: 0.25rem;
    background-color: #ecf0f5;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    max-width: 100%;
    height: auto;
}

.figure {
    display: inline-block;
}

.figure-img {
    margin-bottom: 0.5rem;
    line-height: 1;
}

.figure-caption {
    font-size: 90%;
    color: #6c757d;
}

code {
    font-size: 87.5%;
    color: #e83e8c;
    word-wrap: break-word;
}

a > code {
    color: inherit;
}

kbd {
    padding: 0.2rem 0.4rem;
    font-size: 87.5%;
    color: #fff;
    background-color: #212529;
    border-radius: 0.25rem;
}

kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700;
}

pre {
    display: block;
    font-size: 87.5%;
    color: #212529;
}

pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal;
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll;
}

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}

.container-fluid, .container-sm, .container-md, .container-lg, .container-xl {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px) {
    .container, .container-sm {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container, .container-sm, .container-md {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container, .container-sm, .container-md, .container-lg {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .container, .container-sm, .container-md, .container-lg, .container-xl {
        max-width: 1140px;
    }
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.no-gutters {
    margin-right: 0;
    margin-left: 0;
}

.no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

.col {
    flex-basis: 0;
    flex-grow: 1;
    min-width: 0;
    max-width: 100%;
}

.row-cols-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
}

.row-cols-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
}

.row-cols-3 > * {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
}

.row-cols-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
}

.row-cols-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
}

.row-cols-6 > * {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
}

.col-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
}

.col-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
}

.col-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
}

.col-3 {
    flex: 0 0 25%;
    max-width: 25%;
}

.col-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
}

.col-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
}

.col-6 {
    flex: 0 0 50%;
    max-width: 50%;
}

.col-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
}

.col-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
}

.col-9 {
    flex: 0 0 75%;
    max-width: 75%;
}

.col-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
}

.col-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
}

.col-12 {
    flex: 0 0 100%;
    max-width: 100%;
}

.order-first {
    order: -1;
}

.order-last {
    order: 13;
}

.order-0 {
    order: 0;
}

.order-1 {
    order: 1;
}

.order-2 {
    order: 2;
}

.order-3 {
    order: 3;
}

.order-4 {
    order: 4;
}

.order-5 {
    order: 5;
}

.order-6 {
    order: 6;
}

.order-7 {
    order: 7;
}

.order-8 {
    order: 8;
}

.order-9 {
    order: 9;
}

.order-10 {
    order: 10;
}

.order-11 {
    order: 11;
}

.order-12 {
    order: 12;
}

.offset-1 {
    margin-left: 8.33333%;
}

.offset-2 {
    margin-left: 16.66667%;
}

.offset-3 {
    margin-left: 25%;
}

.offset-4 {
    margin-left: 33.33333%;
}

.offset-5 {
    margin-left: 41.66667%;
}

.offset-6 {
    margin-left: 50%;
}

.offset-7 {
    margin-left: 58.33333%;
}

.offset-8 {
    margin-left: 66.66667%;
}

.offset-9 {
    margin-left: 75%;
}

.offset-10 {
    margin-left: 83.33333%;
}

.offset-11 {
    margin-left: 91.66667%;
}

@media (min-width: 576px) {
    .col-sm {
        flex-basis: 0;
        flex-grow: 1;
        min-width: 0;
        max-width: 100%;
    }

    .row-cols-sm-1 > * {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .row-cols-sm-2 > * {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .row-cols-sm-3 > * {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .row-cols-sm-4 > * {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .row-cols-sm-5 > * {
        flex: 0 0 20%;
        max-width: 20%;
    }

    .row-cols-sm-6 > * {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-sm-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-sm-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-sm-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-sm-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-sm-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-sm-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-sm-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-sm-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-sm-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-sm-first {
        order: -1;
    }

    .order-sm-last {
        order: 13;
    }

    .order-sm-0 {
        order: 0;
    }

    .order-sm-1 {
        order: 1;
    }

    .order-sm-2 {
        order: 2;
    }

    .order-sm-3 {
        order: 3;
    }

    .order-sm-4 {
        order: 4;
    }

    .order-sm-5 {
        order: 5;
    }

    .order-sm-6 {
        order: 6;
    }

    .order-sm-7 {
        order: 7;
    }

    .order-sm-8 {
        order: 8;
    }

    .order-sm-9 {
        order: 9;
    }

    .order-sm-10 {
        order: 10;
    }

    .order-sm-11 {
        order: 11;
    }

    .order-sm-12 {
        order: 12;
    }

    .offset-sm-0 {
        margin-left: 0;
    }

    .offset-sm-1 {
        margin-left: 8.33333%;
    }

    .offset-sm-2 {
        margin-left: 16.66667%;
    }

    .offset-sm-3 {
        margin-left: 25%;
    }

    .offset-sm-4 {
        margin-left: 33.33333%;
    }

    .offset-sm-5 {
        margin-left: 41.66667%;
    }

    .offset-sm-6 {
        margin-left: 50%;
    }

    .offset-sm-7 {
        margin-left: 58.33333%;
    }

    .offset-sm-8 {
        margin-left: 66.66667%;
    }

    .offset-sm-9 {
        margin-left: 75%;
    }

    .offset-sm-10 {
        margin-left: 83.33333%;
    }

    .offset-sm-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 768px) {
    .col-md {
        flex-basis: 0;
        flex-grow: 1;
        min-width: 0;
        max-width: 100%;
    }

    .row-cols-md-1 > * {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .row-cols-md-2 > * {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .row-cols-md-3 > * {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .row-cols-md-4 > * {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .row-cols-md-5 > * {
        flex: 0 0 20%;
        max-width: 20%;
    }

    .row-cols-md-6 > * {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-md-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-md-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-md-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-md-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-md-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-md-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-md-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-md-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-md-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-md-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-md-first {
        order: -1;
    }

    .order-md-last {
        order: 13;
    }

    .order-md-0 {
        order: 0;
    }

    .order-md-1 {
        order: 1;
    }

    .order-md-2 {
        order: 2;
    }

    .order-md-3 {
        order: 3;
    }

    .order-md-4 {
        order: 4;
    }

    .order-md-5 {
        order: 5;
    }

    .order-md-6 {
        order: 6;
    }

    .order-md-7 {
        order: 7;
    }

    .order-md-8 {
        order: 8;
    }

    .order-md-9 {
        order: 9;
    }

    .order-md-10 {
        order: 10;
    }

    .order-md-11 {
        order: 11;
    }

    .order-md-12 {
        order: 12;
    }

    .offset-md-0 {
        margin-left: 0;
    }

    .offset-md-1 {
        margin-left: 8.33333%;
    }

    .offset-md-2 {
        margin-left: 16.66667%;
    }

    .offset-md-3 {
        margin-left: 25%;
    }

    .offset-md-4 {
        margin-left: 33.33333%;
    }

    .offset-md-5 {
        margin-left: 41.66667%;
    }

    .offset-md-6 {
        margin-left: 50%;
    }

    .offset-md-7 {
        margin-left: 58.33333%;
    }

    .offset-md-8 {
        margin-left: 66.66667%;
    }

    .offset-md-9 {
        margin-left: 75%;
    }

    .offset-md-10 {
        margin-left: 83.33333%;
    }

    .offset-md-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 992px) {
    .col-lg {
        flex-basis: 0;
        flex-grow: 1;
        min-width: 0;
        max-width: 100%;
    }

    .row-cols-lg-1 > * {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .row-cols-lg-2 > * {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .row-cols-lg-3 > * {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .row-cols-lg-4 > * {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .row-cols-lg-5 > * {
        flex: 0 0 20%;
        max-width: 20%;
    }

    .row-cols-lg-6 > * {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-lg-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-lg-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-lg-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-lg-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-lg-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-lg-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-lg-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-lg-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-lg-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-lg-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-lg-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-lg-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-lg-first {
        order: -1;
    }

    .order-lg-last {
        order: 13;
    }

    .order-lg-0 {
        order: 0;
    }

    .order-lg-1 {
        order: 1;
    }

    .order-lg-2 {
        order: 2;
    }

    .order-lg-3 {
        order: 3;
    }

    .order-lg-4 {
        order: 4;
    }

    .order-lg-5 {
        order: 5;
    }

    .order-lg-6 {
        order: 6;
    }

    .order-lg-7 {
        order: 7;
    }

    .order-lg-8 {
        order: 8;
    }

    .order-lg-9 {
        order: 9;
    }

    .order-lg-10 {
        order: 10;
    }

    .order-lg-11 {
        order: 11;
    }

    .order-lg-12 {
        order: 12;
    }

    .offset-lg-0 {
        margin-left: 0;
    }

    .offset-lg-1 {
        margin-left: 8.33333%;
    }

    .offset-lg-2 {
        margin-left: 16.66667%;
    }

    .offset-lg-3 {
        margin-left: 25%;
    }

    .offset-lg-4 {
        margin-left: 33.33333%;
    }

    .offset-lg-5 {
        margin-left: 41.66667%;
    }

    .offset-lg-6 {
        margin-left: 50%;
    }

    .offset-lg-7 {
        margin-left: 58.33333%;
    }

    .offset-lg-8 {
        margin-left: 66.66667%;
    }

    .offset-lg-9 {
        margin-left: 75%;
    }

    .offset-lg-10 {
        margin-left: 83.33333%;
    }

    .offset-lg-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 1200px) {
    .col-xl {
        flex-basis: 0;
        flex-grow: 1;
        min-width: 0;
        max-width: 100%;
    }

    .row-cols-xl-1 > * {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .row-cols-xl-2 > * {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .row-cols-xl-3 > * {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .row-cols-xl-4 > * {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .row-cols-xl-5 > * {
        flex: 0 0 20%;
        max-width: 20%;
    }

    .row-cols-xl-6 > * {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-xl-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-xl-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-xl-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-xl-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-xl-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-xl-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-xl-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-xl-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-xl-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-xl-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-xl-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-xl-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-xl-first {
        order: -1;
    }

    .order-xl-last {
        order: 13;
    }

    .order-xl-0 {
        order: 0;
    }

    .order-xl-1 {
        order: 1;
    }

    .order-xl-2 {
        order: 2;
    }

    .order-xl-3 {
        order: 3;
    }

    .order-xl-4 {
        order: 4;
    }

    .order-xl-5 {
        order: 5;
    }

    .order-xl-6 {
        order: 6;
    }

    .order-xl-7 {
        order: 7;
    }

    .order-xl-8 {
        order: 8;
    }

    .order-xl-9 {
        order: 9;
    }

    .order-xl-10 {
        order: 10;
    }

    .order-xl-11 {
        order: 11;
    }

    .order-xl-12 {
        order: 12;
    }

    .offset-xl-0 {
        margin-left: 0;
    }

    .offset-xl-1 {
        margin-left: 8.33333%;
    }

    .offset-xl-2 {
        margin-left: 16.66667%;
    }

    .offset-xl-3 {
        margin-left: 25%;
    }

    .offset-xl-4 {
        margin-left: 33.33333%;
    }

    .offset-xl-5 {
        margin-left: 41.66667%;
    }

    .offset-xl-6 {
        margin-left: 50%;
    }

    .offset-xl-7 {
        margin-left: 58.33333%;
    }

    .offset-xl-8 {
        margin-left: 66.66667%;
    }

    .offset-xl-9 {
        margin-left: 75%;
    }

    .offset-xl-10 {
        margin-left: 83.33333%;
    }

    .offset-xl-11 {
        margin-left: 91.66667%;
    }
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #373a3c;
}

.table th,
  .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #e3eaef;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #e3eaef;
}

.table tbody + tbody {
    border-top: 2px solid #e3eaef;
}

.table-sm th,
.table-sm td {
    padding: 0.3rem;
}

.table-bordered {
    border: 1px solid #e3eaef;
}

.table-bordered th,
  .table-bordered td {
    border: 1px solid #e3eaef;
}

.table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
    border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
    color: #373a3c;
    background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
    background-color: #cbdbff;
}

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
    border-color: #9fbdff;
}

.table-hover .table-primary:hover {
    background-color: #b2c9ff;
}

.table-hover .table-primary:hover > td,
  .table-hover .table-primary:hover > th {
    background-color: #b2c9ff;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
    background-color: #d6d8db;
}

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
    border-color: #b3b7bb;
}

.table-hover .table-secondary:hover {
    background-color: #c8cbcf;
}

.table-hover .table-secondary:hover > td,
  .table-hover .table-secondary:hover > th {
    background-color: #c8cbcf;
}

.table-success,
.table-success > th,
.table-success > td {
    background-color: #e3f1d4;
}

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
    border-color: #cce4af;
}

.table-hover .table-success:hover {
    background-color: #d6ebc1;
}

.table-hover .table-success:hover > td,
  .table-hover .table-success:hover > th {
    background-color: #d6ebc1;
}

.table-info,
.table-info > th,
.table-info > td {
    background-color: #b8e8ee;
}

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
    border-color: #7ad4df;
}

.table-hover .table-info:hover {
    background-color: #a3e1e9;
}

.table-hover .table-info:hover > td,
  .table-hover .table-info:hover > th {
    background-color: #a3e1e9;
}

.table-warning,
.table-warning > th,
.table-warning > td {
    background-color: #ffecd0;
}

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
    border-color: #ffdba8;
}

.table-hover .table-warning:hover {
    background-color: #ffe2b7;
}

.table-hover .table-warning:hover > td,
  .table-hover .table-warning:hover > th {
    background-color: #ffe2b7;
}

.table-danger,
.table-danger > th,
.table-danger > td {
    background-color: #ffcfcf;
}

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
    border-color: #ffa5a5;
}

.table-hover .table-danger:hover {
    background-color: #ffb6b6;
}

.table-hover .table-danger:hover > td,
  .table-hover .table-danger:hover > th {
    background-color: #ffb6b6;
}

.table-light,
.table-light > th,
.table-light > td {
    background-color: #fdfdfe;
}

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
    border-color: #fbfcfc;
}

.table-hover .table-light:hover {
    background-color: #ececf6;
}

.table-hover .table-light:hover > td,
  .table-hover .table-light:hover > th {
    background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
    background-color: #c6c8ca;
}

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
    border-color: #95999c;
}

.table-hover .table-dark:hover {
    background-color: #b9bbbe;
}

.table-hover .table-dark:hover > td,
  .table-hover .table-dark:hover > th {
    background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
    background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
  .table-hover .table-active:hover > th {
    background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
    color: #fff;
    background-color: #343a40;
    border-color: #454d55;
}

.table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #e3eaef;
}

.table-dark {
    color: #fff;
    background-color: #343a40;
}

.table-dark th,
  .table-dark td,
  .table-dark thead th {
    border-color: #454d55;
}

.table-dark.table-bordered {
    border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-sm > .table-bordered {
        border: 0;
    }
}

@media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-md > .table-bordered {
        border: 0;
    }
}

@media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-lg > .table-bordered {
        border: 0;
    }
}

@media (max-width: 1199.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-xl > .table-bordered {
        border: 0;
    }
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.table-responsive > .table-bordered {
    border: 0;
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 1.25rem + 2px);
    padding: 0.625rem 1.1875rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .form-control {
        transition: none;
    }
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0;
}

.form-control:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #495057;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #c6d8ff;
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(70, 128, 255, 0.25);
}

.form-control::-webkit-input-placeholder {
    color: #adb5bd;
    opacity: 1;
}

.form-control::-moz-placeholder {
    color: #adb5bd;
    opacity: 1;
}

.form-control:-ms-input-placeholder {
    color: #adb5bd;
    opacity: 1;
}

.form-control::-ms-input-placeholder {
    color: #adb5bd;
    opacity: 1;
}

.form-control::placeholder {
    color: #adb5bd;
    opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1;
}

input[type="date"].form-control,
input[type="time"].form-control,
input[type="datetime-local"].form-control,
input[type="month"].form-control {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

select.form-control:focus::-ms-value {
    color: #495057;
    background-color: #fff;
}

.form-control-file,
.form-control-range {
    display: block;
    width: 100%;
}

.col-form-label {
    padding-top: calc(0.625rem + 1px);
    padding-bottom: calc(0.625rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}

.col-form-label-lg {
    padding-top: calc(0.7rem + 1px);
    padding-bottom: calc(0.7rem + 1px);
    font-size: 1.25rem;
    line-height: 1.5;
}

.col-form-label-sm {
    padding-top: calc(0.25rem + 1px);
    padding-bottom: calc(0.25rem + 1px);
    font-size: 0.875rem;
    line-height: 1.5;
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding: 0.625rem 0;
    margin-bottom: 0;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #373a3c;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0;
}

.form-control-sm {
    height: calc(1.5em + 0.5rem + 2px);
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0;
}

.form-control-lg {
    height: calc(1.5em + 1.4rem + 2px);
    padding: 0.7rem 2rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0;
}

select.form-control[size], select.form-control[multiple] {
    height: auto;
}

textarea.form-control {
    height: auto;
}

.form-group {
    margin-bottom: 1rem;
}

.form-text {
    display: block;
    margin-top: 0.25rem;
}

.form-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}

.form-row > .col,
  .form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px;
}

.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem;
}

.form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: -1.25rem;
}

.form-check-input[disabled] ~ .form-check-label,
  .form-check-input:disabled ~ .form-check-label {
    color: #868e96;
}

.form-check-label {
    margin-bottom: 0;
}

.form-check-inline {
    display: inline-flex;
    align-items: center;
    padding-left: 0;
    margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0;
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #9ccc65;
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: .1rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(156, 204, 101, 0.9);
    border-radius: 0.25rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
    display: block;
}

.was-validated .form-control:valid, .form-control.is-valid {
    border-color: #9ccc65;
    padding-right: calc(1.5em + 1.25rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%239ccc65' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.3125rem) center;
    background-size: calc(0.75em + 0.625rem) calc(0.75em + 0.625rem);
}

.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
    border-color: #9ccc65;
    box-shadow: 0 0 0 0rem rgba(156, 204, 101, 0.25);
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
    padding-right: calc(1.5em + 1.25rem);
    background-position: top calc(0.375em + 0.3125rem) right calc(0.375em + 0.3125rem);
}

.was-validated .custom-select:valid, .custom-select.is-valid {
    border-color: #9ccc65;
    padding-right: calc((1em + 1.25rem) * 3 / 4 + 2.1875rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 1.1875rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%239ccc65' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 2.1875rem/calc(0.75em + 0.625rem) calc(0.75em + 0.625rem);
}

.was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
    border-color: #9ccc65;
    box-shadow: 0 0 0 0rem rgba(156, 204, 101, 0.25);
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
    color: #9ccc65;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
    display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
    color: #9ccc65;
}

.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
    border-color: #9ccc65;
}

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
    border-color: #b5d98b;
    background-color: #b5d98b;
}

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 0rem rgba(156, 204, 101, 0.25);
}

.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #9ccc65;
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
    border-color: #9ccc65;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
    border-color: #9ccc65;
    box-shadow: 0 0 0 0rem rgba(156, 204, 101, 0.25);
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #ff5252;
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: .1rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(255, 82, 82, 0.9);
    border-radius: 0.25rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
    display: block;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
    border-color: #ff5252;
    padding-right: calc(1.5em + 1.25rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23ff5252' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23ff5252' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.3125rem) center;
    background-size: calc(0.75em + 0.625rem) calc(0.75em + 0.625rem);
}

.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
    border-color: #ff5252;
    box-shadow: 0 0 0 0rem rgba(255, 82, 82, 0.25);
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
    padding-right: calc(1.5em + 1.25rem);
    background-position: top calc(0.375em + 0.3125rem) right calc(0.375em + 0.3125rem);
}

.was-validated .custom-select:invalid, .custom-select.is-invalid {
    border-color: #ff5252;
    padding-right: calc((1em + 1.25rem) * 3 / 4 + 2.1875rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 1.1875rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23ff5252' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23ff5252' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #fff no-repeat center right 2.1875rem/calc(0.75em + 0.625rem) calc(0.75em + 0.625rem);
}

.was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
    border-color: #ff5252;
    box-shadow: 0 0 0 0rem rgba(255, 82, 82, 0.25);
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
    color: #ff5252;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
    display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
    color: #ff5252;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
    border-color: #ff5252;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
    border-color: #ff8585;
    background-color: #ff8585;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 0rem rgba(255, 82, 82, 0.25);
}

.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #ff5252;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
    border-color: #ff5252;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
    border-color: #ff5252;
    box-shadow: 0 0 0 0rem rgba(255, 82, 82, 0.25);
}

.form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}

.form-inline .form-check {
    width: 100%;
}

@media (min-width: 576px) {
    .form-inline label {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0;
    }

    .form-inline .form-group {
        display: flex;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
        margin-bottom: 0;
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
    }

    .form-inline .form-control-plaintext {
        display: inline-block;
    }

    .form-inline .input-group,
    .form-inline .custom-select {
        width: auto;
    }

    .form-inline .form-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 0;
    }

    .form-inline .form-check-input {
        position: relative;
        flex-shrink: 0;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0;
    }

    .form-inline .custom-control {
        align-items: center;
        justify-content: center;
    }

    .form-inline .custom-control-label {
        margin-bottom: 0;
    }
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #373a3c;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.625rem 1.1875rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 2px;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .btn {
        transition: none;
    }
}

.btn:hover {
    color: #373a3c;
    text-decoration: none;
}

.btn:focus, .btn.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(70, 128, 255, 0.25);
}

.btn.disabled, .btn:disabled {
    opacity: 0.65;
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}

a.btn.disabled,
fieldset:disabled a.btn {
    pointer-events: none;
}

.btn-primary {
    color: #fff;
    background-color: #4680ff;
    border-color: #4680ff;
}

.btn-primary:hover {
    color: #fff;
    background-color: #2066ff;
    border-color: #135dff;
}

.btn-primary:focus, .btn-primary.focus {
    color: #fff;
    background-color: #2066ff;
    border-color: #135dff;
    box-shadow: 0 0 0 0rem rgba(98, 147, 255, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
    color: #fff;
    background-color: #4680ff;
    border-color: #4680ff;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #135dff;
    border-color: #0654ff;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(98, 147, 255, 0.5);
}

.btn-secondary {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-secondary:hover {
    color: #fff;
    background-color: #5a6268;
    border-color: #545b62;
}

.btn-secondary:focus, .btn-secondary.focus {
    color: #fff;
    background-color: #5a6268;
    border-color: #545b62;
    box-shadow: 0 0 0 0rem rgba(130, 138, 145, 0.5);
}

.btn-secondary.disabled, .btn-secondary:disabled {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #545b62;
    border-color: #4e555b;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(130, 138, 145, 0.5);
}

.btn-success {
    color: #fff;
    background-color: #9ccc65;
    border-color: #9ccc65;
}

.btn-success:hover {
    color: #fff;
    background-color: #8ac248;
    border-color: #83bf3f;
}

.btn-success:focus, .btn-success.focus {
    color: #fff;
    background-color: #8ac248;
    border-color: #83bf3f;
    box-shadow: 0 0 0 0rem rgba(171, 212, 124, 0.5);
}

.btn-success.disabled, .btn-success:disabled {
    color: #fff;
    background-color: #9ccc65;
    border-color: #9ccc65;
}

.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #83bf3f;
    border-color: #7db53c;
}

.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(171, 212, 124, 0.5);
}

.btn-info {
    color: #fff;
    background-color: #00acc1;
    border-color: #00acc1;
}

.btn-info:hover {
    color: #fff;
    background-color: #008a9b;
    border-color: #007f8e;
}

.btn-info:focus, .btn-info.focus {
    color: #fff;
    background-color: #008a9b;
    border-color: #007f8e;
    box-shadow: 0 0 0 0rem rgba(38, 184, 202, 0.5);
}

.btn-info.disabled, .btn-info:disabled {
    color: #fff;
    background-color: #00acc1;
    border-color: #00acc1;
}

.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #007f8e;
    border-color: #007381;
}

.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(38, 184, 202, 0.5);
}

.btn-warning {
    color: #fff;
    background-color: #ffba57;
    border-color: #ffba57;
}

.btn-warning:hover {
    color: #fff;
    background-color: #ffaa31;
    border-color: #ffa524;
}

.btn-warning:focus, .btn-warning.focus {
    color: #fff;
    background-color: #ffaa31;
    border-color: #ffa524;
    box-shadow: 0 0 0 0rem rgba(255, 196, 112, 0.5);
}

.btn-warning.disabled, .btn-warning:disabled {
    color: #fff;
    background-color: #ffba57;
    border-color: #ffba57;
}

.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    color: #fff;
    background-color: #ffa524;
    border-color: #ffa017;
}

.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(255, 196, 112, 0.5);
}

.btn-danger {
    color: #fff;
    background-color: #ff5252;
    border-color: #ff5252;
}

.btn-danger:hover {
    color: #fff;
    background-color: #ff2c2c;
    border-color: #ff1f1f;
}

.btn-danger:focus, .btn-danger.focus {
    color: #fff;
    background-color: #ff2c2c;
    border-color: #ff1f1f;
    box-shadow: 0 0 0 0rem rgba(255, 108, 108, 0.5);
}

.btn-danger.disabled, .btn-danger:disabled {
    color: #fff;
    background-color: #ff5252;
    border-color: #ff5252;
}

.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #ff1f1f;
    border-color: #ff1212;
}

.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(255, 108, 108, 0.5);
}

.btn-light {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5;
}

.btn-light:focus, .btn-light.focus {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5;
    box-shadow: 0 0 0 0rem rgba(216, 217, 219, 0.5);
}

.btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df;
}

.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(216, 217, 219, 0.5);
}

.btn-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124;
}

.btn-dark:focus, .btn-dark.focus {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124;
    box-shadow: 0 0 0 0rem rgba(82, 88, 93, 0.5);
}

.btn-dark.disabled, .btn-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d;
}

.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(82, 88, 93, 0.5);
}

.btn-outline-primary {
    color: #4680ff;
    border-color: #4680ff;
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #4680ff;
    border-color: #4680ff;
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
    box-shadow: 0 0 0 0rem rgba(70, 128, 255, 0.5);
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #4680ff;
    background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #4680ff;
    border-color: #4680ff;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(70, 128, 255, 0.5);
}

.btn-outline-secondary {
    color: #6c757d;
    border-color: #6c757d;
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-outline-secondary:focus, .btn-outline-secondary.focus {
    box-shadow: 0 0 0 0rem rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #6c757d;
    background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(108, 117, 125, 0.5);
}

.btn-outline-success {
    color: #9ccc65;
    border-color: #9ccc65;
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #9ccc65;
    border-color: #9ccc65;
}

.btn-outline-success:focus, .btn-outline-success.focus {
    box-shadow: 0 0 0 0rem rgba(156, 204, 101, 0.5);
}

.btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #9ccc65;
    background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #9ccc65;
    border-color: #9ccc65;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(156, 204, 101, 0.5);
}

.btn-outline-info {
    color: #00acc1;
    border-color: #00acc1;
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #00acc1;
    border-color: #00acc1;
}

.btn-outline-info:focus, .btn-outline-info.focus {
    box-shadow: 0 0 0 0rem rgba(0, 172, 193, 0.5);
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #00acc1;
    background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #00acc1;
    border-color: #00acc1;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(0, 172, 193, 0.5);
}

.btn-outline-warning {
    color: #ffba57;
    border-color: #ffba57;
}

.btn-outline-warning:hover {
    color: #fff;
    background-color: #ffba57;
    border-color: #ffba57;
}

.btn-outline-warning:focus, .btn-outline-warning.focus {
    box-shadow: 0 0 0 0rem rgba(255, 186, 87, 0.5);
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #ffba57;
    background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #fff;
    background-color: #ffba57;
    border-color: #ffba57;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(255, 186, 87, 0.5);
}

.btn-outline-danger {
    color: #ff5252;
    border-color: #ff5252;
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #ff5252;
    border-color: #ff5252;
}

.btn-outline-danger:focus, .btn-outline-danger.focus {
    box-shadow: 0 0 0 0rem rgba(255, 82, 82, 0.5);
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #ff5252;
    background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #ff5252;
    border-color: #ff5252;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(255, 82, 82, 0.5);
}

.btn-outline-light {
    color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-outline-light:focus, .btn-outline-light.focus {
    box-shadow: 0 0 0 0rem rgba(248, 249, 250, 0.5);
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(248, 249, 250, 0.5);
}

.btn-outline-dark {
    color: #343a40;
    border-color: #343a40;
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-outline-dark:focus, .btn-outline-dark.focus {
    box-shadow: 0 0 0 0rem rgba(52, 58, 64, 0.5);
}

.btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(52, 58, 64, 0.5);
}

.btn-link {
    font-weight: 400;
    color: #4680ff;
    text-decoration: none;
}

.btn-link:hover {
    color: #4680ff;
    text-decoration: underline;
}

.btn-link:focus, .btn-link.focus {
    text-decoration: underline;
}

.btn-link:disabled, .btn-link.disabled {
    color: #6c757d;
    pointer-events: none;
}

.btn-lg, .btn-group-lg > .btn {
    padding: 0.7rem 2rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 2px;
}

.btn-sm, .btn-group-sm > .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 2px;
}

.btn-block {
    display: block;
    width: 100%;
}

.btn-block + .btn-block {
    margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
    width: 100%;
}

.fade {
    transition: opacity 0.15s linear;
}

@media (prefers-reduced-motion: reduce) {
    .fade {
        transition: none;
    }
}

.fade:not(.show) {
    opacity: 0;
}

.collapse:not(.show) {
    display: none;
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height 0.35s ease;
}

@media (prefers-reduced-motion: reduce) {
    .collapsing {
        transition: none;
    }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
    position: relative;
}

.dropdown-toggle {
    white-space: nowrap;
}

.dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #373a3c;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
}

.dropdown-menu-left {
    right: auto;
    left: 0;
}

.dropdown-menu-right {
    right: 0;
    left: auto;
}

@media (min-width: 576px) {
    .dropdown-menu-sm-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-sm-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 768px) {
    .dropdown-menu-md-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-md-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 992px) {
    .dropdown-menu-lg-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-lg-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 1200px) {
    .dropdown-menu-xl-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-xl-right {
        right: 0;
        left: auto;
    }
}

.dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0;
    border-right: 0.3em solid transparent;
    border-bottom: 0.3em solid;
    border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0;
    border-bottom: 0.3em solid transparent;
    border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropright .dropdown-toggle::after {
    vertical-align: 0;
}

.dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
}

.dropleft .dropdown-toggle::after {
    display: none;
}

.dropleft .dropdown-toggle::before {
    display: inline-block;
    margin-right: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0.3em solid;
    border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropleft .dropdown-toggle::before {
    vertical-align: 0;
}

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
    right: auto;
    bottom: auto;
}

.dropdown-divider {
    height: 0;
    margin: 0.5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa;
}

.dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #4680ff;
}

.dropdown-item.disabled, .dropdown-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: transparent;
}

.dropdown-menu.show {
    display: block;
}

.dropdown-header {
    display: block;
    padding: 0.5rem 1.5rem;
    margin-bottom: 0;
    font-size: 0.875rem;
    color: #6c757d;
    white-space: nowrap;
}

.dropdown-item-text {
    display: block;
    padding: 0.25rem 1.5rem;
    color: #212529;
}

.btn-group,
.btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle;
}

.btn-group > .btn,
  .btn-group-vertical > .btn {
    position: relative;
    flex: 1 1 auto;
}

.btn-group > .btn:hover,
    .btn-group-vertical > .btn:hover {
    z-index: 1;
}

.btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
    z-index: 1;
}

.btn-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}

.btn-toolbar .input-group {
    width: auto;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
    margin-left: -1px;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
    padding-right: 0.89063rem;
    padding-left: 0.89063rem;
}

.dropdown-toggle-split::after,
  .dropup .dropdown-toggle-split::after,
  .dropright .dropdown-toggle-split::after {
    margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
    margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
    padding-right: 0.375rem;
    padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
}

.btn-group-vertical {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}

.btn-group-vertical > .btn,
  .btn-group-vertical > .btn-group {
    width: 100%;
}

.btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) {
    margin-top: -1px;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
  .btn-group-vertical > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
    margin-bottom: 0;
}

.btn-group-toggle > .btn input[type="radio"],
  .btn-group-toggle > .btn input[type="checkbox"],
  .btn-group-toggle > .btn-group > .btn input[type="radio"],
  .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}

.input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%;
}

.input-group > .form-control,
  .input-group > .form-control-plaintext,
  .input-group > .custom-select,
  .input-group > .custom-file {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0;
    margin-bottom: 0;
}

.input-group > .form-control + .form-control,
    .input-group > .form-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .form-control-plaintext + .form-control,
    .input-group > .form-control-plaintext + .custom-select,
    .input-group > .form-control-plaintext + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
    margin-left: -1px;
}

.input-group > .form-control:focus,
  .input-group > .custom-select:focus,
  .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
    z-index: 3;
}

.input-group > .custom-file .custom-file-input:focus {
    z-index: 4;
}

.input-group > .form-control:not(:last-child),
  .input-group > .custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group > .form-control:not(:first-child),
  .input-group > .custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group > .custom-file {
    display: flex;
    align-items: center;
}

.input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::after {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group > .custom-file:not(:first-child) .custom-file-label {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
    display: flex;
}

.input-group-prepend .btn,
  .input-group-append .btn {
    position: relative;
    z-index: 2;
}

.input-group-prepend .btn:focus,
    .input-group-append .btn:focus {
    z-index: 3;
}

.input-group-prepend .btn + .btn,
  .input-group-prepend .btn + .input-group-text,
  .input-group-prepend .input-group-text + .input-group-text,
  .input-group-prepend .input-group-text + .btn,
  .input-group-append .btn + .btn,
  .input-group-append .btn + .input-group-text,
  .input-group-append .input-group-text + .input-group-text,
  .input-group-append .input-group-text + .btn {
    margin-left: -1px;
}

.input-group-prepend {
    margin-right: -1px;
}

.input-group-append {
    margin-left: -1px;
}

.input-group-text {
    display: flex;
    align-items: center;
    padding: 0.625rem 1.1875rem;
    margin-bottom: 0;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: 0;
}

.input-group-text input[type="radio"],
  .input-group-text input[type="checkbox"] {
    margin-top: 0;
}

.input-group-lg > .form-control:not(textarea),
.input-group-lg > .custom-select {
    height: calc(1.5em + 1.4rem + 2px);
}

.input-group-lg > .form-control,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
    padding: 0.7rem 2rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0;
}

.input-group-sm > .form-control:not(textarea),
.input-group-sm > .custom-select {
    height: calc(1.5em + 0.5rem + 2px);
}

.input-group-sm > .form-control,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0;
}

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
    padding-right: 2.1875rem;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5rem;
}

.custom-control-inline {
    display: inline-flex;
    margin-right: 1rem;
}

.custom-control-input {
    position: absolute;
    left: 0;
    z-index: -1;
    width: 1rem;
    height: 1.25rem;
    opacity: 0;
}

.custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    border-color: #4680ff;
    background-color: #4680ff;
}

.custom-control-input:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 0rem rgba(70, 128, 255, 0.25);
}

.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #c6d8ff;
}

.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
    color: #fff;
    background-color: #f9fbff;
    border-color: #f9fbff;
}

.custom-control-input[disabled] ~ .custom-control-label, .custom-control-input:disabled ~ .custom-control-label {
    color: #6c757d;
}

.custom-control-input[disabled] ~ .custom-control-label::before, .custom-control-input:disabled ~ .custom-control-label::before {
    background-color: #e9ecef;
}

.custom-control-label {
    position: relative;
    margin-bottom: 0;
    vertical-align: top;
}

.custom-control-label::before {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    background-color: #fff;
    border: #adb5bd solid 1px;
}

.custom-control-label::after {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background: no-repeat 50% / 50% 50%;
}

.custom-checkbox .custom-control-label::before {
    border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
    border-color: #4680ff;
    background-color: #4680ff;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(70, 128, 255, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
    background-color: rgba(70, 128, 255, 0.5);
}

.custom-radio .custom-control-label::before {
    border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(70, 128, 255, 0.5);
}

.custom-switch {
    padding-left: 2.25rem;
}

.custom-switch .custom-control-label::before {
    left: -2.25rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: 0.5rem;
}

.custom-switch .custom-control-label::after {
    top: calc(0.25rem + 2px);
    left: calc(-2.25rem + 2px);
    width: calc(1rem - 4px);
    height: calc(1rem - 4px);
    background-color: #adb5bd;
    border-radius: 0.5rem;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .custom-switch .custom-control-label::after {
        transition: none;
    }
}

.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
    background-color: #fff;
    transform: translateX(0.75rem);
}

.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(70, 128, 255, 0.5);
}

.custom-select {
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 1.25rem + 2px);
    padding: 0.625rem 2.1875rem 0.625rem 1.1875rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 1.1875rem center/8px 10px;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.custom-select:focus {
    border-color: #c6d8ff;
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(70, 128, 255, 0.25);
}

.custom-select:focus::-ms-value {
    color: #495057;
    background-color: #fff;
}

.custom-select[multiple], .custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 1.1875rem;
    background-image: none;
}

.custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef;
}

.custom-select::-ms-expand {
    display: none;
}

.custom-select:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #495057;
}

.custom-select-sm {
    height: calc(1.5em + 0.5rem + 2px);
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    padding-left: 0.5rem;
    font-size: 0.875rem;
}

.custom-select-lg {
    height: calc(1.5em + 1.4rem + 2px);
    padding-top: 0.7rem;
    padding-bottom: 0.7rem;
    padding-left: 2rem;
    font-size: 1.25rem;
}

.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 1.25rem + 2px);
    margin-bottom: 0;
}

.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(1.5em + 1.25rem + 2px);
    margin: 0;
    opacity: 0;
}

.custom-file-input:focus ~ .custom-file-label {
    border-color: #c6d8ff;
    box-shadow: 0 0 0 0rem rgba(70, 128, 255, 0.25);
}

.custom-file-input[disabled] ~ .custom-file-label,
  .custom-file-input:disabled ~ .custom-file-label {
    background-color: #e9ecef;
}

.custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse";
}

.custom-file-input ~ .custom-file-label[data-browse]::after {
    content: attr(data-browse);
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(1.5em + 1.25rem + 2px);
    padding: 0.625rem 1.1875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0;
}

.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + 1.25rem);
    padding: 0.625rem 1.1875rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 0 0 0;
}

.custom-range {
    width: 100%;
    height: 1rem;
    padding: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.custom-range:focus {
    outline: none;
}

.custom-range:focus::-webkit-slider-thumb {
    box-shadow: 0 0 0 1px #ecf0f5, 0 0 0 0rem rgba(70, 128, 255, 0.25);
}

.custom-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 1px #ecf0f5, 0 0 0 0rem rgba(70, 128, 255, 0.25);
}

.custom-range:focus::-ms-thumb {
    box-shadow: 0 0 0 1px #ecf0f5, 0 0 0 0rem rgba(70, 128, 255, 0.25);
}

.custom-range::-moz-focus-outer {
    border: 0;
}

.custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #4680ff;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    appearance: none;
}

@media (prefers-reduced-motion: reduce) {
    .custom-range::-webkit-slider-thumb {
        -webkit-transition: none;
        transition: none;
    }
}

.custom-range::-webkit-slider-thumb:active {
    background-color: #f9fbff;
}

.custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem;
}

.custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #4680ff;
    border: 0;
    border-radius: 1rem;
    -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -moz-appearance: none;
    appearance: none;
}

@media (prefers-reduced-motion: reduce) {
    .custom-range::-moz-range-thumb {
        -moz-transition: none;
        transition: none;
    }
}

.custom-range::-moz-range-thumb:active {
    background-color: #f9fbff;
}

.custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem;
}

.custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0rem;
    margin-left: 0rem;
    background-color: #4680ff;
    border: 0;
    border-radius: 1rem;
    -ms-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none;
}

@media (prefers-reduced-motion: reduce) {
    .custom-range::-ms-thumb {
        -ms-transition: none;
        transition: none;
    }
}

.custom-range::-ms-thumb:active {
    background-color: #f9fbff;
}

.custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem;
}

.custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem;
}

.custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem;
}

.custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd;
}

.custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default;
}

.custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd;
}

.custom-range:disabled::-moz-range-track {
    cursor: default;
}

.custom-range:disabled::-ms-thumb {
    background-color: #adb5bd;
}

.custom-control-label::before,
.custom-file-label,
.custom-select {
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        transition: none;
    }
}

.nav {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.nav-link {
    display: block;
    padding: 0.5rem 1rem;
}

.nav-link:hover, .nav-link:focus {
    text-decoration: none;
}

.nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default;
}

.nav-tabs {
    border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-item {
    margin-bottom: -1px;
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
    border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent;
}

.nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.nav-pills .nav-link {
    border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
    color: #fff;
    background-color: #4680ff;
}

.nav-fill .nav-item {
    flex: 1 1 auto;
    text-align: center;
}

.nav-justified .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center;
}

.tab-content > .tab-pane {
    display: none;
}

.tab-content > .active {
    display: block;
}

.navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
}

.navbar .container,
  .navbar .container-fluid, .navbar .container-sm, .navbar .container-md, .navbar .container-lg, .navbar .container-xl {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

.navbar-brand {
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}

.navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none;
}

.navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none;
}

.navbar-text {
    display: inline-block;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
}

.navbar-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 2px;
}

.navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none;
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%;
}

@media (max-width: 575.98px) {
    .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 576px) {
    .navbar-expand-sm {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }

    .navbar-expand-sm .navbar-nav {
        flex-direction: row;
    }

    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
        flex-wrap: nowrap;
    }

    .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }

    .navbar-expand-sm .navbar-toggler {
        display: none;
    }
}

@media (max-width: 767.98px) {
    .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 768px) {
    .navbar-expand-md {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }

    .navbar-expand-md .navbar-nav {
        flex-direction: row;
    }

    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
        flex-wrap: nowrap;
    }

    .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }

    .navbar-expand-md .navbar-toggler {
        display: none;
    }
}

@media (max-width: 991.98px) {
    .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 992px) {
    .navbar-expand-lg {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }

    .navbar-expand-lg .navbar-nav {
        flex-direction: row;
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
        flex-wrap: nowrap;
    }

    .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }

    .navbar-expand-lg .navbar-toggler {
        display: none;
    }
}

@media (max-width: 1199.98px) {
    .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 1200px) {
    .navbar-expand-xl {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }

    .navbar-expand-xl .navbar-nav {
        flex-direction: row;
    }

    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
        flex-wrap: nowrap;
    }

    .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }

    .navbar-expand-xl .navbar-toggler {
        display: none;
    }
}

.navbar-expand {
    flex-flow: row nowrap;
    justify-content: flex-start;
}

.navbar-expand > .container,
  .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
    padding-right: 0;
    padding-left: 0;
}

.navbar-expand .navbar-nav {
    flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
}

.navbar-expand > .container,
  .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
    flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
}

.navbar-expand .navbar-toggler {
    display: none;
}

.navbar-light .navbar-brand {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
    color: rgba(0, 0, 0, 0.5);
    border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-light .navbar-text {
    color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
    color: #fff;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
    color: #fff;
}

.navbar-dark .navbar-toggler {
    color: rgba(255, 255, 255, 0.5);
    border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-dark .navbar-text {
    color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
    color: #fff;
}

.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
    color: #fff;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}

.card > hr {
    margin-right: 0;
    margin-left: 0;
}

.card > .list-group {
    border-top: inherit;
    border-bottom: inherit;
}

.card > .list-group:first-child {
    border-top-width: 0;
    border-top-left-radius: calc(0.25rem - 0px);
    border-top-right-radius: calc(0.25rem - 0px);
}

.card > .list-group:last-child {
    border-bottom-width: 0;
    border-bottom-right-radius: calc(0.25rem - 0px);
    border-bottom-left-radius: calc(0.25rem - 0px);
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}

.card-title {
    margin-bottom: 1.25rem;
}

.card-subtitle {
    margin-top: -0.625rem;
    margin-bottom: 0;
}

.card-text:last-child {
    margin-bottom: 0;
}

.card-link:hover {
    text-decoration: none;
}

.card-link + .card-link {
    margin-left: 1.25rem;
}

.card-header {
    padding: 1.25rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0);
    border-bottom: 0px solid rgba(0, 0, 0, 0.125);
}

.card-header:first-child {
    border-radius: calc(0.25rem - 0px) calc(0.25rem - 0px) 0 0;
}

.card-header + .list-group .list-group-item:first-child {
    border-top: 0;
}

.card-footer {
    padding: 1.25rem 1.25rem;
    background-color: rgba(0, 0, 0, 0);
    border-top: 0px solid rgba(0, 0, 0, 0.125);
}

.card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 0px) calc(0.25rem - 0px);
}

.card-header-tabs {
    margin-right: -0.625rem;
    margin-bottom: -1.25rem;
    margin-left: -0.625rem;
    border-bottom: 0;
}

.card-header-pills {
    margin-right: -0.625rem;
    margin-left: -0.625rem;
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem;
}

.card-img,
.card-img-top,
.card-img-bottom {
    flex-shrink: 0;
    width: 100%;
}

.card-img,
.card-img-top {
    border-top-left-radius: calc(0.25rem - 0px);
    border-top-right-radius: calc(0.25rem - 0px);
}

.card-img,
.card-img-bottom {
    border-bottom-right-radius: calc(0.25rem - 0px);
    border-bottom-left-radius: calc(0.25rem - 0px);
}

.card-deck .card {
    margin-bottom: 15px;
}

@media (min-width: 576px) {
    .card-deck {
        display: flex;
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .card-deck .card {
        flex: 1 0 0%;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px;
    }
}

.card-group > .card {
    margin-bottom: 15px;
}

@media (min-width: 576px) {
    .card-group {
        display: flex;
        flex-flow: row wrap;
    }

    .card-group > .card {
        flex: 1 0 0%;
        margin-bottom: 0;
    }

    .card-group > .card + .card {
        margin-left: 0;
        border-left: 0;
    }

    .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .card-group > .card:not(:last-child) .card-img-top,
        .card-group > .card:not(:last-child) .card-header {
        border-top-right-radius: 0;
    }

    .card-group > .card:not(:last-child) .card-img-bottom,
        .card-group > .card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0;
    }

    .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .card-group > .card:not(:first-child) .card-img-top,
        .card-group > .card:not(:first-child) .card-header {
        border-top-left-radius: 0;
    }

    .card-group > .card:not(:first-child) .card-img-bottom,
        .card-group > .card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0;
    }
}

.card-columns .card {
    margin-bottom: 1.25rem;
}

@media (min-width: 576px) {
    .card-columns {
        -moz-column-count: 3;
        column-count: 3;
        -moz-column-gap: 1.25rem;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1;
    }

    .card-columns .card {
        display: inline-block;
        width: 100%;
    }
}

.accordion > .card {
    overflow: hidden;
}

.accordion > .card:not(:last-of-type) {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.accordion > .card:not(:first-of-type) {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.accordion > .card > .card-header {
    border-radius: 0;
    margin-bottom: 0px;
}

.breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #ecf0f5;
    border-radius: 0.25rem;
}

.breadcrumb-item {
    display: flex;
}

.breadcrumb-item + .breadcrumb-item {
    padding-left: 0.5rem;
}

.breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #6c757d;
    content: "/";
}

.breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: underline;
}

.breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: none;
}

.breadcrumb-item.active {
    color: #6c757d;
}

.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}

.page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: 0;
    line-height: 1.25;
    color: #4680ff;
    background-color: #fff;
    border: 0 solid #dee2e6;
}

.page-link:hover {
    z-index: 2;
    color: #4680ff;
    text-decoration: none;
    background-color: #ecf0f5;
    border-color: #dee2e6;
}

.page-link:focus {
    z-index: 3;
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(70, 128, 255, 0.25);
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
}

.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #4680ff;
    border-color: #4680ff;
}

.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6;
}

.pagination-lg .page-link {
    padding: 0.75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
}

.pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
}

.badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .badge {
        transition: none;
    }
}

a.badge:hover, a.badge:focus {
    text-decoration: none;
}

.badge:empty {
    display: none;
}

.btn .badge {
    position: relative;
    top: -1px;
}

.badge-pill {
    padding-right: 0.6em;
    padding-left: 0.6em;
    border-radius: 10rem;
}

.badge-primary {
    color: #fff;
    background-color: #4680ff;
}

a.badge-primary:hover, a.badge-primary:focus {
    color: #fff;
    background-color: #135dff;
}

a.badge-primary:focus, a.badge-primary.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(70, 128, 255, 0.5);
}

.badge-secondary {
    color: #fff;
    background-color: #6c757d;
}

a.badge-secondary:hover, a.badge-secondary:focus {
    color: #fff;
    background-color: #545b62;
}

a.badge-secondary:focus, a.badge-secondary.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(108, 117, 125, 0.5);
}

.badge-success {
    color: #fff;
    background-color: #9ccc65;
}

a.badge-success:hover, a.badge-success:focus {
    color: #fff;
    background-color: #83bf3f;
}

a.badge-success:focus, a.badge-success.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(156, 204, 101, 0.5);
}

.badge-info {
    color: #fff;
    background-color: #00acc1;
}

a.badge-info:hover, a.badge-info:focus {
    color: #fff;
    background-color: #007f8e;
}

a.badge-info:focus, a.badge-info.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(0, 172, 193, 0.5);
}

.badge-warning {
    color: #fff;
    background-color: #ffba57;
}

a.badge-warning:hover, a.badge-warning:focus {
    color: #fff;
    background-color: #ffa524;
}

a.badge-warning:focus, a.badge-warning.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(255, 186, 87, 0.5);
}

.badge-danger {
    color: #fff;
    background-color: #ff5252;
}

a.badge-danger:hover, a.badge-danger:focus {
    color: #fff;
    background-color: #ff1f1f;
}

a.badge-danger:focus, a.badge-danger.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(255, 82, 82, 0.5);
}

.badge-light {
    color: #212529;
    background-color: #f8f9fa;
}

a.badge-light:hover, a.badge-light:focus {
    color: #212529;
    background-color: #dae0e5;
}

a.badge-light:focus, a.badge-light.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(248, 249, 250, 0.5);
}

.badge-dark {
    color: #fff;
    background-color: #343a40;
}

a.badge-dark:hover, a.badge-dark:focus {
    color: #fff;
    background-color: #1d2124;
}

a.badge-dark:focus, a.badge-dark.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(52, 58, 64, 0.5);
}

.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}

@media (min-width: 576px) {
    .jumbotron {
        padding: 4rem 2rem;
    }
}

.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0;
}

.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}

.alert-heading {
    color: inherit;
}

.alert-link {
    font-weight: 700;
}

.alert-dismissible {
    padding-right: 4rem;
}

.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit;
}

.alert-primary {
    color: #244385;
    background-color: #dae6ff;
    border-color: #cbdbff;
}

.alert-primary hr {
    border-top-color: #b2c9ff;
}

.alert-primary .alert-link {
    color: #192f5d;
}

.alert-secondary {
    color: #383d41;
    background-color: #e2e3e5;
    border-color: #d6d8db;
}

.alert-secondary hr {
    border-top-color: #c8cbcf;
}

.alert-secondary .alert-link {
    color: #202326;
}

.alert-success {
    color: #516a35;
    background-color: #ebf5e0;
    border-color: #e3f1d4;
}

.alert-success hr {
    border-top-color: #d6ebc1;
}

.alert-success .alert-link {
    color: #374824;
}

.alert-info {
    color: #005964;
    background-color: #cceef3;
    border-color: #b8e8ee;
}

.alert-info hr {
    border-top-color: #a3e1e9;
}

.alert-info .alert-link {
    color: #002c31;
}

.alert-warning {
    color: #85612d;
    background-color: #fff1dd;
    border-color: #ffecd0;
}

.alert-warning hr {
    border-top-color: #ffe2b7;
}

.alert-warning .alert-link {
    color: #5f4520;
}

.alert-danger {
    color: #852b2b;
    background-color: #ffdcdc;
    border-color: #ffcfcf;
}

.alert-danger hr {
    border-top-color: #ffb6b6;
}

.alert-danger .alert-link {
    color: #5e1f1f;
}

.alert-light {
    color: #818182;
    background-color: #fefefe;
    border-color: #fdfdfe;
}

.alert-light hr {
    border-top-color: #ececf6;
}

.alert-light .alert-link {
    color: #686868;
}

.alert-dark {
    color: #1b1e21;
    background-color: #d6d8d9;
    border-color: #c6c8ca;
}

.alert-dark hr {
    border-top-color: #b9bbbe;
}

.alert-dark .alert-link {
    color: #040505;
}

@keyframes progress-bar-stripes {
    from {
        background-position: 0.6rem 0;
    }

    to {
        background-position: 0 0;
    }
}

.progress {
    display: flex;
    height: 0.6rem;
    overflow: hidden;
    line-height: 0;
    font-size: 0.5rem;
    background-color: #ecf0f5;
    border-radius: 0.25rem;
}

.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #4680ff;
    transition: width 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none;
    }
}

.progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: 0.6rem 0.6rem;
}

.progress-bar-animated {
    -webkit-animation: progress-bar-stripes 1s linear infinite;
    animation: progress-bar-stripes 1s linear infinite;
}

@media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
        -webkit-animation: none;
        animation: none;
    }
}

.media {
    display: flex;
    align-items: flex-start;
}

.media-body {
    flex: 1;
}

.list-group {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    border-radius: 0.25rem;
}

.list-group-item-action {
    width: 100%;
    color: #495057;
    text-align: inherit;
}

.list-group-item-action:hover, .list-group-item-action:focus {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa;
}

.list-group-item-action:active {
    color: #373a3c;
    background-color: #e9ecef;
}

.list-group-item {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
    border-top-left-radius: inherit;
    border-top-right-radius: inherit;
}

.list-group-item:last-child {
    border-bottom-right-radius: inherit;
    border-bottom-left-radius: inherit;
}

.list-group-item.disabled, .list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #4680ff;
    border-color: #4680ff;
}

.list-group-item + .list-group-item {
    border-top-width: 0;
}

.list-group-item + .list-group-item.active {
    margin-top: -1px;
    border-top-width: 1px;
}

.list-group-horizontal {
    flex-direction: row;
}

.list-group-horizontal > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
}

.list-group-horizontal > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
}

.list-group-horizontal > .list-group-item.active {
    margin-top: 0;
}

.list-group-horizontal > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
}

.list-group-horizontal > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
}

@media (min-width: 576px) {
    .list-group-horizontal-sm {
        flex-direction: row;
    }

    .list-group-horizontal-sm > .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }

    .list-group-horizontal-sm > .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }

    .list-group-horizontal-sm > .list-group-item.active {
        margin-top: 0;
    }

    .list-group-horizontal-sm > .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }

    .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}

@media (min-width: 768px) {
    .list-group-horizontal-md {
        flex-direction: row;
    }

    .list-group-horizontal-md > .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }

    .list-group-horizontal-md > .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }

    .list-group-horizontal-md > .list-group-item.active {
        margin-top: 0;
    }

    .list-group-horizontal-md > .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }

    .list-group-horizontal-md > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}

@media (min-width: 992px) {
    .list-group-horizontal-lg {
        flex-direction: row;
    }

    .list-group-horizontal-lg > .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }

    .list-group-horizontal-lg > .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }

    .list-group-horizontal-lg > .list-group-item.active {
        margin-top: 0;
    }

    .list-group-horizontal-lg > .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }

    .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}

@media (min-width: 1200px) {
    .list-group-horizontal-xl {
        flex-direction: row;
    }

    .list-group-horizontal-xl > .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }

    .list-group-horizontal-xl > .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }

    .list-group-horizontal-xl > .list-group-item.active {
        margin-top: 0;
    }

    .list-group-horizontal-xl > .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }

    .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}

.list-group-flush {
    border-radius: 0;
}

.list-group-flush > .list-group-item {
    border-width: 0 0 1px;
}

.list-group-flush > .list-group-item:last-child {
    border-bottom-width: 0;
}

.list-group-item-primary {
    color: #244385;
    background-color: #cbdbff;
}

.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #244385;
    background-color: #b2c9ff;
}

.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #244385;
    border-color: #244385;
}

.list-group-item-secondary {
    color: #383d41;
    background-color: #d6d8db;
}

.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #383d41;
    background-color: #c8cbcf;
}

.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #383d41;
    border-color: #383d41;
}

.list-group-item-success {
    color: #516a35;
    background-color: #e3f1d4;
}

.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #516a35;
    background-color: #d6ebc1;
}

.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #516a35;
    border-color: #516a35;
}

.list-group-item-info {
    color: #005964;
    background-color: #b8e8ee;
}

.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #005964;
    background-color: #a3e1e9;
}

.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #005964;
    border-color: #005964;
}

.list-group-item-warning {
    color: #85612d;
    background-color: #ffecd0;
}

.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #85612d;
    background-color: #ffe2b7;
}

.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #85612d;
    border-color: #85612d;
}

.list-group-item-danger {
    color: #852b2b;
    background-color: #ffcfcf;
}

.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #852b2b;
    background-color: #ffb6b6;
}

.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #852b2b;
    border-color: #852b2b;
}

.list-group-item-light {
    color: #818182;
    background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182;
}

.list-group-item-dark {
    color: #1b1e21;
    background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #1b1e21;
    background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21;
}

.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
}

.close:hover {
    color: #000;
    text-decoration: none;
}

.close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
    opacity: .75;
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
}

a.close.disabled {
    pointer-events: none;
}

.toast {
    max-width: 350px;
    overflow: hidden;
    font-size: 0.875rem;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    opacity: 0;
    border-radius: 0.25rem;
}

.toast:not(:last-child) {
    margin-bottom: 0.75rem;
}

.toast.showing {
    opacity: 1;
}

.toast.show {
    display: block;
    opacity: 1;
}

.toast.hide {
    display: none;
}

.toast-header {
    display: flex;
    align-items: center;
    padding: 0.25rem 0.75rem;
    color: #6c757d;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.toast-body {
    padding: 0.75rem;
}

.modal-open {
    overflow: hidden;
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0;
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none;
}

.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: scale(0.7);
}

@media (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        transition: none;
    }
}

.modal.show .modal-dialog {
    transform: none;
}

.modal.modal-static .modal-dialog {
    transform: scale(1.02);
}

.modal-dialog-scrollable {
    display: flex;
    max-height: calc(100% - 1rem);
}

.modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden;
}

.modal-dialog-scrollable .modal-header,
  .modal-dialog-scrollable .modal-footer {
    flex-shrink: 0;
}

.modal-dialog-scrollable .modal-body {
    overflow-y: auto;
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem);
}

.modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    height: -webkit-min-content;
    height: -moz-min-content;
    height: min-content;
    content: "";
}

.modal-dialog-centered.modal-dialog-scrollable {
    flex-direction: column;
    justify-content: center;
    height: 100%;
}

.modal-dialog-centered.modal-dialog-scrollable .modal-content {
    max-height: none;
}

.modal-dialog-centered.modal-dialog-scrollable::before {
    content: none;
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.25rem;
    outline: 0;
}

.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000;
}

.modal-backdrop.fade {
    opacity: 0;
}

.modal-backdrop.show {
    opacity: 0.5;
}

.modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 20px 20px;
    border-bottom: 1px solid #e3eaef;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px);
}

.modal-header .close {
    padding: 20px 20px;
    margin: -20px -20px -20px auto;
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5;
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 20px 20px;
}

.modal-footer {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
    padding: 20px 20px-0.25rem;
    border-top: 1px solid #e3eaef;
    border-bottom-right-radius: calc(0.3rem - 1px);
    border-bottom-left-radius: calc(0.3rem - 1px);
}

.modal-footer > * {
    margin: 0.25rem;
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll;
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
    }

    .modal-dialog-scrollable {
        max-height: calc(100% - 3.5rem);
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 3.5rem);
    }

    .modal-dialog-centered {
        min-height: calc(100% - 3.5rem);
    }

    .modal-dialog-centered::before {
        height: calc(100vh - 3.5rem);
        height: -webkit-min-content;
        height: -moz-min-content;
        height: min-content;
    }

    .modal-sm {
        max-width: 300px;
    }
}

@media (min-width: 992px) {
    .modal-lg,
  .modal-xl {
        max-width: 800px;
    }
}

@media (min-width: 1200px) {
    .modal-xl {
        max-width: 1140px;
    }
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: "Open Sans", sans-serif;
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    opacity: 0;
}

.tooltip.show {
    opacity: 0.9;
}

.tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem;
}

.tooltip .arrow::before {
    position: absolute;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
    padding: 0.4rem 0;
}

.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0;
}

.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
    top: 0;
    border-width: 0.4rem 0.4rem 0;
    border-top-color: #000;
}

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
    padding: 0 0.4rem;
}

.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem;
}

.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
    right: 0;
    border-width: 0.4rem 0.4rem 0.4rem 0;
    border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
    padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0;
}

.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    bottom: 0;
    border-width: 0 0.4rem 0.4rem;
    border-bottom-color: #000;
}

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
    padding: 0 0.4rem;
}

.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem;
}

.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
    left: 0;
    border-width: 0.4rem 0 0.4rem 0.4rem;
    border-left-color: #000;
}

.tooltip-inner {
    max-width: 200px;
    padding: 0.25rem 0.5rem;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: 0.25rem;
}

.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 276px;
    font-family: "Open Sans", sans-serif;
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.25rem;
}

.popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.25rem;
}

.popover .arrow::before, .popover .arrow::after {
    position: absolute;
    display: block;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
    margin-bottom: 0.5rem;
}

.bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
    bottom: calc(-0.5rem - 1px);
}

.bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
    bottom: 0;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
    bottom: 1px;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: #fff;
}

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
    margin-left: 0.5rem;
}

.bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
    left: calc(-0.5rem - 1px);
    width: 0.5rem;
    height: 1rem;
    margin: 0.25rem 0;
}

.bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
    left: 0;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
    left: 1px;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: #fff;
}

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
    margin-top: 0.5rem;
}

.bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
    top: calc(-0.5rem - 1px);
}

.bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
    top: 0;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
    top: 1px;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
    margin-right: 0.5rem;
}

.bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
    right: calc(-0.5rem - 1px);
    width: 0.5rem;
    height: 1rem;
    margin: 0.25rem 0;
}

.bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
    right: 0;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
    right: 1px;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: #fff;
}

.popover-header {
    padding: 0.5rem 0.75rem;
    margin-bottom: 0;
    font-size: 1rem;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px);
}

.popover-header:empty {
    display: none;
}

.popover-body {
    padding: 0.5rem 0.75rem;
    color: #373a3c;
}

.carousel {
    position: relative;
}

.carousel.pointer-event {
    touch-action: pan-y;
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.carousel-inner::after {
    display: block;
    clear: both;
    content: "";
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: transform 0.6s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-item {
        transition: none;
    }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
    display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
    transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
    transform: translateX(-100%);
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
    z-index: 1;
    opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
    z-index: 0;
    opacity: 0;
    transition: opacity 0s 0.6s;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        transition: none;
    }
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: 0.5;
    transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
        transition: none;
    }
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9;
}

.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: no-repeat 50% / 100% 100%;
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 15;
    display: flex;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}

.carousel-indicators li {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    transition: opacity 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-indicators li {
        transition: none;
    }
}

.carousel-indicators .active {
    opacity: 1;
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
}

@-webkit-keyframes spinner-border {
    to {
        transform: rotate(360deg);
    }
}

@keyframes spinner-border {
    to {
        transform: rotate(360deg);
    }
}

.spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    border: 0.25em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: spinner-border .75s linear infinite;
    animation: spinner-border .75s linear infinite;
}

.spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: 0.2em;
}

@-webkit-keyframes spinner-grow {
    0% {
        transform: scale(0);
    }

    50% {
        opacity: 1;
        transform: none;
    }
}

@keyframes spinner-grow {
    0% {
        transform: scale(0);
    }

    50% {
        opacity: 1;
        transform: none;
    }
}

.spinner-grow {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    background-color: currentColor;
    border-radius: 50%;
    opacity: 0;
    -webkit-animation: spinner-grow .75s linear infinite;
    animation: spinner-grow .75s linear infinite;
}

.spinner-grow-sm {
    width: 1rem;
    height: 1rem;
}

.align-baseline {
    vertical-align: baseline !important;
}

.align-top {
    vertical-align: top !important;
}

.align-middle {
    vertical-align: middle !important;
}

.align-bottom {
    vertical-align: bottom !important;
}

.align-text-bottom {
    vertical-align: text-bottom !important;
}

.align-text-top {
    vertical-align: text-top !important;
}

.bg-primary {
    background-color: #4680ff !important;
}

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
    background-color: #135dff !important;
}

.bg-secondary {
    background-color: #6c757d !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
    background-color: #545b62 !important;
}

.bg-success {
    background-color: #9ccc65 !important;
}

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
    background-color: #83bf3f !important;
}

.bg-info {
    background-color: #00acc1 !important;
}

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
    background-color: #007f8e !important;
}

.bg-warning {
    background-color: #ffba57 !important;
}

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
    background-color: #ffa524 !important;
}

.bg-danger {
    background-color: #ff5252 !important;
}

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
    background-color: #ff1f1f !important;
}

.bg-light {
    background-color: #f8f9fa !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
    background-color: #dae0e5 !important;
}

.bg-dark {
    background-color: #343a40 !important;
}

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
    background-color: #1d2124 !important;
}

.bg-white {
    background-color: #fff !important;
}

.bg-transparent {
    background-color: transparent !important;
}

.border {
    border: 1px solid #e3eaef !important;
}

.border-top {
    border-top: 1px solid #e3eaef !important;
}

.border-right {
    border-right: 1px solid #e3eaef !important;
}

.border-bottom {
    border-bottom: 1px solid #e3eaef !important;
}

.border-left {
    border-left: 1px solid #e3eaef !important;
}

.border-0 {
    border: 0 !important;
}

.border-top-0 {
    border-top: 0 !important;
}

.border-right-0 {
    border-right: 0 !important;
}

.border-bottom-0 {
    border-bottom: 0 !important;
}

.border-left-0 {
    border-left: 0 !important;
}

.border-primary {
    border-color: #4680ff !important;
}

.border-secondary {
    border-color: #6c757d !important;
}

.border-success {
    border-color: #9ccc65 !important;
}

.border-info {
    border-color: #00acc1 !important;
}

.border-warning {
    border-color: #ffba57 !important;
}

.border-danger {
    border-color: #ff5252 !important;
}

.border-light {
    border-color: #f8f9fa !important;
}

.border-dark {
    border-color: #343a40 !important;
}

.border-white {
    border-color: #fff !important;
}

.rounded-sm {
    border-radius: 0.25rem !important;
}

.rounded {
    border-radius: 0.25rem !important;
}

.rounded-top {
    border-top-left-radius: 0.25rem !important;
    border-top-right-radius: 0.25rem !important;
}

.rounded-right {
    border-top-right-radius: 0.25rem !important;
    border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
    border-bottom-right-radius: 0.25rem !important;
    border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
    border-top-left-radius: 0.25rem !important;
    border-bottom-left-radius: 0.25rem !important;
}

.rounded-lg {
    border-radius: 0.25rem !important;
}

.rounded-circle {
    border-radius: 50% !important;
}

.rounded-pill {
    border-radius: 50rem !important;
}

.rounded-0 {
    border-radius: 0 !important;
}

.clearfix::after {
    display: block;
    clear: both;
    content: "";
}

.d-none {
    display: none !important;
}

.d-inline {
    display: inline !important;
}

.d-inline-block {
    display: inline-block !important;
}

.d-block {
    display: block !important;
}

.d-table {
    display: table !important;
}

.d-table-row {
    display: table-row !important;
}

.d-table-cell {
    display: table-cell !important;
}

.d-flex {
    display: flex !important;
}

.d-inline-flex {
    display: inline-flex !important;
}

@media (min-width: 576px) {
    .d-sm-none {
        display: none !important;
    }

    .d-sm-inline {
        display: inline !important;
    }

    .d-sm-inline-block {
        display: inline-block !important;
    }

    .d-sm-block {
        display: block !important;
    }

    .d-sm-table {
        display: table !important;
    }

    .d-sm-table-row {
        display: table-row !important;
    }

    .d-sm-table-cell {
        display: table-cell !important;
    }

    .d-sm-flex {
        display: flex !important;
    }

    .d-sm-inline-flex {
        display: inline-flex !important;
    }
}

@media (min-width: 768px) {
    .d-md-none {
        display: none !important;
    }

    .d-md-inline {
        display: inline !important;
    }

    .d-md-inline-block {
        display: inline-block !important;
    }

    .d-md-block {
        display: block !important;
    }

    .d-md-table {
        display: table !important;
    }

    .d-md-table-row {
        display: table-row !important;
    }

    .d-md-table-cell {
        display: table-cell !important;
    }

    .d-md-flex {
        display: flex !important;
    }

    .d-md-inline-flex {
        display: inline-flex !important;
    }
}

@media (min-width: 992px) {
    .d-lg-none {
        display: none !important;
    }

    .d-lg-inline {
        display: inline !important;
    }

    .d-lg-inline-block {
        display: inline-block !important;
    }

    .d-lg-block {
        display: block !important;
    }

    .d-lg-table {
        display: table !important;
    }

    .d-lg-table-row {
        display: table-row !important;
    }

    .d-lg-table-cell {
        display: table-cell !important;
    }

    .d-lg-flex {
        display: flex !important;
    }

    .d-lg-inline-flex {
        display: inline-flex !important;
    }
}

@media (min-width: 1200px) {
    .d-xl-none {
        display: none !important;
    }

    .d-xl-inline {
        display: inline !important;
    }

    .d-xl-inline-block {
        display: inline-block !important;
    }

    .d-xl-block {
        display: block !important;
    }

    .d-xl-table {
        display: table !important;
    }

    .d-xl-table-row {
        display: table-row !important;
    }

    .d-xl-table-cell {
        display: table-cell !important;
    }

    .d-xl-flex {
        display: flex !important;
    }

    .d-xl-inline-flex {
        display: inline-flex !important;
    }
}

@media print {
    .d-print-none {
        display: none !important;
    }

    .d-print-inline {
        display: inline !important;
    }

    .d-print-inline-block {
        display: inline-block !important;
    }

    .d-print-block {
        display: block !important;
    }

    .d-print-table {
        display: table !important;
    }

    .d-print-table-row {
        display: table-row !important;
    }

    .d-print-table-cell {
        display: table-cell !important;
    }

    .d-print-flex {
        display: flex !important;
    }

    .d-print-inline-flex {
        display: inline-flex !important;
    }
}

.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
}

.embed-responsive::before {
    display: block;
    content: "";
}

.embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

.embed-responsive-21by9::before {
    padding-top: 42.85714%;
}

.embed-responsive-16by9::before {
    padding-top: 56.25%;
}

.embed-responsive-4by3::before {
    padding-top: 75%;
}

.embed-responsive-1by1::before {
    padding-top: 100%;
}

.embed-responsive-21by9::before {
    padding-top: 42.85714%;
}

.embed-responsive-16by9::before {
    padding-top: 56.25%;
}

.embed-responsive-4by3::before {
    padding-top: 75%;
}

.embed-responsive-1by1::before {
    padding-top: 100%;
}

.flex-row {
    flex-direction: row !important;
}

.flex-column {
    flex-direction: column !important;
}

.flex-row-reverse {
    flex-direction: row-reverse !important;
}

.flex-column-reverse {
    flex-direction: column-reverse !important;
}

.flex-wrap {
    flex-wrap: wrap !important;
}

.flex-nowrap {
    flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
    flex-wrap: wrap-reverse !important;
}

.flex-fill {
    flex: 1 1 auto !important;
}

.flex-grow-0 {
    flex-grow: 0 !important;
}

.flex-grow-1 {
    flex-grow: 1 !important;
}

.flex-shrink-0 {
    flex-shrink: 0 !important;
}

.flex-shrink-1 {
    flex-shrink: 1 !important;
}

.justify-content-start {
    justify-content: flex-start !important;
}

.justify-content-end {
    justify-content: flex-end !important;
}

.justify-content-center {
    justify-content: center !important;
}

.justify-content-between {
    justify-content: space-between !important;
}

.justify-content-around {
    justify-content: space-around !important;
}

.align-items-start {
    align-items: flex-start !important;
}

.align-items-end {
    align-items: flex-end !important;
}

.align-items-center {
    align-items: center !important;
}

.align-items-baseline {
    align-items: baseline !important;
}

.align-items-stretch {
    align-items: stretch !important;
}

.align-content-start {
    align-content: flex-start !important;
}

.align-content-end {
    align-content: flex-end !important;
}

.align-content-center {
    align-content: center !important;
}

.align-content-between {
    align-content: space-between !important;
}

.align-content-around {
    align-content: space-around !important;
}

.align-content-stretch {
    align-content: stretch !important;
}

.align-self-auto {
    align-self: auto !important;
}

.align-self-start {
    align-self: flex-start !important;
}

.align-self-end {
    align-self: flex-end !important;
}

.align-self-center {
    align-self: center !important;
}

.align-self-baseline {
    align-self: baseline !important;
}

.align-self-stretch {
    align-self: stretch !important;
}

@media (min-width: 576px) {
    .flex-sm-row {
        flex-direction: row !important;
    }

    .flex-sm-column {
        flex-direction: column !important;
    }

    .flex-sm-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-sm-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-sm-wrap {
        flex-wrap: wrap !important;
    }

    .flex-sm-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-sm-fill {
        flex: 1 1 auto !important;
    }

    .flex-sm-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-sm-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-sm-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-sm-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-sm-start {
        justify-content: flex-start !important;
    }

    .justify-content-sm-end {
        justify-content: flex-end !important;
    }

    .justify-content-sm-center {
        justify-content: center !important;
    }

    .justify-content-sm-between {
        justify-content: space-between !important;
    }

    .justify-content-sm-around {
        justify-content: space-around !important;
    }

    .align-items-sm-start {
        align-items: flex-start !important;
    }

    .align-items-sm-end {
        align-items: flex-end !important;
    }

    .align-items-sm-center {
        align-items: center !important;
    }

    .align-items-sm-baseline {
        align-items: baseline !important;
    }

    .align-items-sm-stretch {
        align-items: stretch !important;
    }

    .align-content-sm-start {
        align-content: flex-start !important;
    }

    .align-content-sm-end {
        align-content: flex-end !important;
    }

    .align-content-sm-center {
        align-content: center !important;
    }

    .align-content-sm-between {
        align-content: space-between !important;
    }

    .align-content-sm-around {
        align-content: space-around !important;
    }

    .align-content-sm-stretch {
        align-content: stretch !important;
    }

    .align-self-sm-auto {
        align-self: auto !important;
    }

    .align-self-sm-start {
        align-self: flex-start !important;
    }

    .align-self-sm-end {
        align-self: flex-end !important;
    }

    .align-self-sm-center {
        align-self: center !important;
    }

    .align-self-sm-baseline {
        align-self: baseline !important;
    }

    .align-self-sm-stretch {
        align-self: stretch !important;
    }
}

@media (min-width: 768px) {
    .flex-md-row {
        flex-direction: row !important;
    }

    .flex-md-column {
        flex-direction: column !important;
    }

    .flex-md-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-md-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-md-wrap {
        flex-wrap: wrap !important;
    }

    .flex-md-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-md-fill {
        flex: 1 1 auto !important;
    }

    .flex-md-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-md-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-md-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-md-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-md-start {
        justify-content: flex-start !important;
    }

    .justify-content-md-end {
        justify-content: flex-end !important;
    }

    .justify-content-md-center {
        justify-content: center !important;
    }

    .justify-content-md-between {
        justify-content: space-between !important;
    }

    .justify-content-md-around {
        justify-content: space-around !important;
    }

    .align-items-md-start {
        align-items: flex-start !important;
    }

    .align-items-md-end {
        align-items: flex-end !important;
    }

    .align-items-md-center {
        align-items: center !important;
    }

    .align-items-md-baseline {
        align-items: baseline !important;
    }

    .align-items-md-stretch {
        align-items: stretch !important;
    }

    .align-content-md-start {
        align-content: flex-start !important;
    }

    .align-content-md-end {
        align-content: flex-end !important;
    }

    .align-content-md-center {
        align-content: center !important;
    }

    .align-content-md-between {
        align-content: space-between !important;
    }

    .align-content-md-around {
        align-content: space-around !important;
    }

    .align-content-md-stretch {
        align-content: stretch !important;
    }

    .align-self-md-auto {
        align-self: auto !important;
    }

    .align-self-md-start {
        align-self: flex-start !important;
    }

    .align-self-md-end {
        align-self: flex-end !important;
    }

    .align-self-md-center {
        align-self: center !important;
    }

    .align-self-md-baseline {
        align-self: baseline !important;
    }

    .align-self-md-stretch {
        align-self: stretch !important;
    }
}

@media (min-width: 992px) {
    .flex-lg-row {
        flex-direction: row !important;
    }

    .flex-lg-column {
        flex-direction: column !important;
    }

    .flex-lg-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-lg-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-lg-wrap {
        flex-wrap: wrap !important;
    }

    .flex-lg-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-lg-fill {
        flex: 1 1 auto !important;
    }

    .flex-lg-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-lg-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-lg-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-lg-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-lg-start {
        justify-content: flex-start !important;
    }

    .justify-content-lg-end {
        justify-content: flex-end !important;
    }

    .justify-content-lg-center {
        justify-content: center !important;
    }

    .justify-content-lg-between {
        justify-content: space-between !important;
    }

    .justify-content-lg-around {
        justify-content: space-around !important;
    }

    .align-items-lg-start {
        align-items: flex-start !important;
    }

    .align-items-lg-end {
        align-items: flex-end !important;
    }

    .align-items-lg-center {
        align-items: center !important;
    }

    .align-items-lg-baseline {
        align-items: baseline !important;
    }

    .align-items-lg-stretch {
        align-items: stretch !important;
    }

    .align-content-lg-start {
        align-content: flex-start !important;
    }

    .align-content-lg-end {
        align-content: flex-end !important;
    }

    .align-content-lg-center {
        align-content: center !important;
    }

    .align-content-lg-between {
        align-content: space-between !important;
    }

    .align-content-lg-around {
        align-content: space-around !important;
    }

    .align-content-lg-stretch {
        align-content: stretch !important;
    }

    .align-self-lg-auto {
        align-self: auto !important;
    }

    .align-self-lg-start {
        align-self: flex-start !important;
    }

    .align-self-lg-end {
        align-self: flex-end !important;
    }

    .align-self-lg-center {
        align-self: center !important;
    }

    .align-self-lg-baseline {
        align-self: baseline !important;
    }

    .align-self-lg-stretch {
        align-self: stretch !important;
    }
}

@media (min-width: 1200px) {
    .flex-xl-row {
        flex-direction: row !important;
    }

    .flex-xl-column {
        flex-direction: column !important;
    }

    .flex-xl-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-xl-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-xl-wrap {
        flex-wrap: wrap !important;
    }

    .flex-xl-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-xl-fill {
        flex: 1 1 auto !important;
    }

    .flex-xl-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-xl-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-xl-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-xl-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-xl-start {
        justify-content: flex-start !important;
    }

    .justify-content-xl-end {
        justify-content: flex-end !important;
    }

    .justify-content-xl-center {
        justify-content: center !important;
    }

    .justify-content-xl-between {
        justify-content: space-between !important;
    }

    .justify-content-xl-around {
        justify-content: space-around !important;
    }

    .align-items-xl-start {
        align-items: flex-start !important;
    }

    .align-items-xl-end {
        align-items: flex-end !important;
    }

    .align-items-xl-center {
        align-items: center !important;
    }

    .align-items-xl-baseline {
        align-items: baseline !important;
    }

    .align-items-xl-stretch {
        align-items: stretch !important;
    }

    .align-content-xl-start {
        align-content: flex-start !important;
    }

    .align-content-xl-end {
        align-content: flex-end !important;
    }

    .align-content-xl-center {
        align-content: center !important;
    }

    .align-content-xl-between {
        align-content: space-between !important;
    }

    .align-content-xl-around {
        align-content: space-around !important;
    }

    .align-content-xl-stretch {
        align-content: stretch !important;
    }

    .align-self-xl-auto {
        align-self: auto !important;
    }

    .align-self-xl-start {
        align-self: flex-start !important;
    }

    .align-self-xl-end {
        align-self: flex-end !important;
    }

    .align-self-xl-center {
        align-self: center !important;
    }

    .align-self-xl-baseline {
        align-self: baseline !important;
    }

    .align-self-xl-stretch {
        align-self: stretch !important;
    }
}

.float-left {
    float: left !important;
}

.float-right {
    float: right !important;
}

.float-none {
    float: none !important;
}

@media (min-width: 576px) {
    .float-sm-left {
        float: left !important;
    }

    .float-sm-right {
        float: right !important;
    }

    .float-sm-none {
        float: none !important;
    }
}

@media (min-width: 768px) {
    .float-md-left {
        float: left !important;
    }

    .float-md-right {
        float: right !important;
    }

    .float-md-none {
        float: none !important;
    }
}

@media (min-width: 992px) {
    .float-lg-left {
        float: left !important;
    }

    .float-lg-right {
        float: right !important;
    }

    .float-lg-none {
        float: none !important;
    }
}

@media (min-width: 1200px) {
    .float-xl-left {
        float: left !important;
    }

    .float-xl-right {
        float: right !important;
    }

    .float-xl-none {
        float: none !important;
    }
}

.user-select-all {
    -webkit-user-select: all !important;
    -moz-user-select: all !important;
    -ms-user-select: all !important;
    user-select: all !important;
}

.user-select-auto {
    -webkit-user-select: auto !important;
    -moz-user-select: auto !important;
    -ms-user-select: auto !important;
    user-select: auto !important;
}

.user-select-none {
    -webkit-user-select: none !important;
    -moz-user-select: none !important;
    -ms-user-select: none !important;
    user-select: none !important;
}

.overflow-auto {
    overflow: auto !important;
}

.overflow-hidden {
    overflow: hidden !important;
}

.position-static {
    position: static !important;
}

.position-relative {
    position: relative !important;
}

.position-absolute {
    position: absolute !important;
}

.position-fixed {
    position: fixed !important;
}

.position-sticky {
    position: -webkit-sticky !important;
    position: sticky !important;
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030;
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
    }
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal;
}

.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
    box-shadow: none !important;
}

.w-25 {
    width: 25% !important;
}

.w-50 {
    width: 50% !important;
}

.w-75 {
    width: 75% !important;
}

.w-100 {
    width: 100% !important;
}

.w-auto {
    width: auto !important;
}

.h-25 {
    height: 25% !important;
}

.h-50 {
    height: 50% !important;
}

.h-75 {
    height: 75% !important;
}

.h-100 {
    height: 100% !important;
}

.h-auto {
    height: auto !important;
}

.mw-100 {
    max-width: 100% !important;
}

.mh-100 {
    max-height: 100% !important;
}

.min-vw-100 {
    min-width: 100vw !important;
}

.min-vh-100 {
    min-height: 100vh !important;
}

.vw-100 {
    width: 100vw !important;
}

.vh-100 {
    height: 100vh !important;
}

.m-0 {
    margin: 0 !important;
}

.mt-0,
.my-0 {
    margin-top: 0 !important;
}

.mr-0,
.mx-0 {
    margin-right: 0 !important;
}

.mb-0,
.my-0 {
    margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
    margin-left: 0 !important;
}

.m-1 {
    margin: 0.25rem !important;
}

.mt-1,
.my-1 {
    margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
    margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
    margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
    margin-left: 0.25rem !important;
}

.m-2 {
    margin: 0.5rem !important;
}

.mt-2,
.my-2 {
    margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
    margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
    margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
    margin-left: 0.5rem !important;
}

.m-3 {
    margin: 1rem !important;
}

.mt-3,
.my-3 {
    margin-top: 1rem !important;
}

.mr-3,
.mx-3 {
    margin-right: 1rem !important;
}

.mb-3,
.my-3 {
    margin-bottom: 1rem !important;
}

.ml-3,
.mx-3 {
    margin-left: 1rem !important;
}

.m-4 {
    margin: 1.5rem !important;
}

.mt-4,
.my-4 {
    margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
    margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
    margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
    margin-left: 1.5rem !important;
}

.m-5 {
    margin: 3rem !important;
}

.mt-5,
.my-5 {
    margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
    margin-right: 3rem !important;
}

.mb-5,
.my-5 {
    margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
    margin-left: 3rem !important;
}

.p-0 {
    padding: 0 !important;
}

.pt-0,
.py-0 {
    padding-top: 0 !important;
}

.pr-0,
.px-0 {
    padding-right: 0 !important;
}

.pb-0,
.py-0 {
    padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
    padding-left: 0 !important;
}

.p-1 {
    padding: 0.25rem !important;
}

.pt-1,
.py-1 {
    padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
    padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
    padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
    padding-left: 0.25rem !important;
}

.p-2 {
    padding: 0.5rem !important;
}

.pt-2,
.py-2 {
    padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
    padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
    padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
    padding-left: 0.5rem !important;
}

.p-3 {
    padding: 1rem !important;
}

.pt-3,
.py-3 {
    padding-top: 1rem !important;
}

.pr-3,
.px-3 {
    padding-right: 1rem !important;
}

.pb-3,
.py-3 {
    padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
    padding-left: 1rem !important;
}

.p-4 {
    padding: 1.5rem !important;
}

.pt-4,
.py-4 {
    padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
    padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
    padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
    padding-left: 1.5rem !important;
}

.p-5 {
    padding: 3rem !important;
}

.pt-5,
.py-5 {
    padding-top: 3rem !important;
}

.pr-5,
.px-5 {
    padding-right: 3rem !important;
}

.pb-5,
.py-5 {
    padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
    padding-left: 3rem !important;
}

.m-n1 {
    margin: -0.25rem !important;
}

.mt-n1,
.my-n1 {
    margin-top: -0.25rem !important;
}

.mr-n1,
.mx-n1 {
    margin-right: -0.25rem !important;
}

.mb-n1,
.my-n1 {
    margin-bottom: -0.25rem !important;
}

.ml-n1,
.mx-n1 {
    margin-left: -0.25rem !important;
}

.m-n2 {
    margin: -0.5rem !important;
}

.mt-n2,
.my-n2 {
    margin-top: -0.5rem !important;
}

.mr-n2,
.mx-n2 {
    margin-right: -0.5rem !important;
}

.mb-n2,
.my-n2 {
    margin-bottom: -0.5rem !important;
}

.ml-n2,
.mx-n2 {
    margin-left: -0.5rem !important;
}

.m-n3 {
    margin: -1rem !important;
}

.mt-n3,
.my-n3 {
    margin-top: -1rem !important;
}

.mr-n3,
.mx-n3 {
    margin-right: -1rem !important;
}

.mb-n3,
.my-n3 {
    margin-bottom: -1rem !important;
}

.ml-n3,
.mx-n3 {
    margin-left: -1rem !important;
}

.m-n4 {
    margin: -1.5rem !important;
}

.mt-n4,
.my-n4 {
    margin-top: -1.5rem !important;
}

.mr-n4,
.mx-n4 {
    margin-right: -1.5rem !important;
}

.mb-n4,
.my-n4 {
    margin-bottom: -1.5rem !important;
}

.ml-n4,
.mx-n4 {
    margin-left: -1.5rem !important;
}

.m-n5 {
    margin: -3rem !important;
}

.mt-n5,
.my-n5 {
    margin-top: -3rem !important;
}

.mr-n5,
.mx-n5 {
    margin-right: -3rem !important;
}

.mb-n5,
.my-n5 {
    margin-bottom: -3rem !important;
}

.ml-n5,
.mx-n5 {
    margin-left: -3rem !important;
}

.m-auto {
    margin: auto !important;
}

.mt-auto,
.my-auto {
    margin-top: auto !important;
}

.mr-auto,
.mx-auto {
    margin-right: auto !important;
}

.mb-auto,
.my-auto {
    margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
    margin-left: auto !important;
}

@media (min-width: 576px) {
    .m-sm-0 {
        margin: 0 !important;
    }

    .mt-sm-0,
  .my-sm-0 {
        margin-top: 0 !important;
    }

    .mr-sm-0,
  .mx-sm-0 {
        margin-right: 0 !important;
    }

    .mb-sm-0,
  .my-sm-0 {
        margin-bottom: 0 !important;
    }

    .ml-sm-0,
  .mx-sm-0 {
        margin-left: 0 !important;
    }

    .m-sm-1 {
        margin: 0.25rem !important;
    }

    .mt-sm-1,
  .my-sm-1 {
        margin-top: 0.25rem !important;
    }

    .mr-sm-1,
  .mx-sm-1 {
        margin-right: 0.25rem !important;
    }

    .mb-sm-1,
  .my-sm-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-sm-1,
  .mx-sm-1 {
        margin-left: 0.25rem !important;
    }

    .m-sm-2 {
        margin: 0.5rem !important;
    }

    .mt-sm-2,
  .my-sm-2 {
        margin-top: 0.5rem !important;
    }

    .mr-sm-2,
  .mx-sm-2 {
        margin-right: 0.5rem !important;
    }

    .mb-sm-2,
  .my-sm-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-sm-2,
  .mx-sm-2 {
        margin-left: 0.5rem !important;
    }

    .m-sm-3 {
        margin: 1rem !important;
    }

    .mt-sm-3,
  .my-sm-3 {
        margin-top: 1rem !important;
    }

    .mr-sm-3,
  .mx-sm-3 {
        margin-right: 1rem !important;
    }

    .mb-sm-3,
  .my-sm-3 {
        margin-bottom: 1rem !important;
    }

    .ml-sm-3,
  .mx-sm-3 {
        margin-left: 1rem !important;
    }

    .m-sm-4 {
        margin: 1.5rem !important;
    }

    .mt-sm-4,
  .my-sm-4 {
        margin-top: 1.5rem !important;
    }

    .mr-sm-4,
  .mx-sm-4 {
        margin-right: 1.5rem !important;
    }

    .mb-sm-4,
  .my-sm-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-sm-4,
  .mx-sm-4 {
        margin-left: 1.5rem !important;
    }

    .m-sm-5 {
        margin: 3rem !important;
    }

    .mt-sm-5,
  .my-sm-5 {
        margin-top: 3rem !important;
    }

    .mr-sm-5,
  .mx-sm-5 {
        margin-right: 3rem !important;
    }

    .mb-sm-5,
  .my-sm-5 {
        margin-bottom: 3rem !important;
    }

    .ml-sm-5,
  .mx-sm-5 {
        margin-left: 3rem !important;
    }

    .p-sm-0 {
        padding: 0 !important;
    }

    .pt-sm-0,
  .py-sm-0 {
        padding-top: 0 !important;
    }

    .pr-sm-0,
  .px-sm-0 {
        padding-right: 0 !important;
    }

    .pb-sm-0,
  .py-sm-0 {
        padding-bottom: 0 !important;
    }

    .pl-sm-0,
  .px-sm-0 {
        padding-left: 0 !important;
    }

    .p-sm-1 {
        padding: 0.25rem !important;
    }

    .pt-sm-1,
  .py-sm-1 {
        padding-top: 0.25rem !important;
    }

    .pr-sm-1,
  .px-sm-1 {
        padding-right: 0.25rem !important;
    }

    .pb-sm-1,
  .py-sm-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-sm-1,
  .px-sm-1 {
        padding-left: 0.25rem !important;
    }

    .p-sm-2 {
        padding: 0.5rem !important;
    }

    .pt-sm-2,
  .py-sm-2 {
        padding-top: 0.5rem !important;
    }

    .pr-sm-2,
  .px-sm-2 {
        padding-right: 0.5rem !important;
    }

    .pb-sm-2,
  .py-sm-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-sm-2,
  .px-sm-2 {
        padding-left: 0.5rem !important;
    }

    .p-sm-3 {
        padding: 1rem !important;
    }

    .pt-sm-3,
  .py-sm-3 {
        padding-top: 1rem !important;
    }

    .pr-sm-3,
  .px-sm-3 {
        padding-right: 1rem !important;
    }

    .pb-sm-3,
  .py-sm-3 {
        padding-bottom: 1rem !important;
    }

    .pl-sm-3,
  .px-sm-3 {
        padding-left: 1rem !important;
    }

    .p-sm-4 {
        padding: 1.5rem !important;
    }

    .pt-sm-4,
  .py-sm-4 {
        padding-top: 1.5rem !important;
    }

    .pr-sm-4,
  .px-sm-4 {
        padding-right: 1.5rem !important;
    }

    .pb-sm-4,
  .py-sm-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-sm-4,
  .px-sm-4 {
        padding-left: 1.5rem !important;
    }

    .p-sm-5 {
        padding: 3rem !important;
    }

    .pt-sm-5,
  .py-sm-5 {
        padding-top: 3rem !important;
    }

    .pr-sm-5,
  .px-sm-5 {
        padding-right: 3rem !important;
    }

    .pb-sm-5,
  .py-sm-5 {
        padding-bottom: 3rem !important;
    }

    .pl-sm-5,
  .px-sm-5 {
        padding-left: 3rem !important;
    }

    .m-sm-n1 {
        margin: -0.25rem !important;
    }

    .mt-sm-n1,
  .my-sm-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-sm-n1,
  .mx-sm-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-sm-n1,
  .my-sm-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-sm-n1,
  .mx-sm-n1 {
        margin-left: -0.25rem !important;
    }

    .m-sm-n2 {
        margin: -0.5rem !important;
    }

    .mt-sm-n2,
  .my-sm-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-sm-n2,
  .mx-sm-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-sm-n2,
  .my-sm-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-sm-n2,
  .mx-sm-n2 {
        margin-left: -0.5rem !important;
    }

    .m-sm-n3 {
        margin: -1rem !important;
    }

    .mt-sm-n3,
  .my-sm-n3 {
        margin-top: -1rem !important;
    }

    .mr-sm-n3,
  .mx-sm-n3 {
        margin-right: -1rem !important;
    }

    .mb-sm-n3,
  .my-sm-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-sm-n3,
  .mx-sm-n3 {
        margin-left: -1rem !important;
    }

    .m-sm-n4 {
        margin: -1.5rem !important;
    }

    .mt-sm-n4,
  .my-sm-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-sm-n4,
  .mx-sm-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-sm-n4,
  .my-sm-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-sm-n4,
  .mx-sm-n4 {
        margin-left: -1.5rem !important;
    }

    .m-sm-n5 {
        margin: -3rem !important;
    }

    .mt-sm-n5,
  .my-sm-n5 {
        margin-top: -3rem !important;
    }

    .mr-sm-n5,
  .mx-sm-n5 {
        margin-right: -3rem !important;
    }

    .mb-sm-n5,
  .my-sm-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-sm-n5,
  .mx-sm-n5 {
        margin-left: -3rem !important;
    }

    .m-sm-auto {
        margin: auto !important;
    }

    .mt-sm-auto,
  .my-sm-auto {
        margin-top: auto !important;
    }

    .mr-sm-auto,
  .mx-sm-auto {
        margin-right: auto !important;
    }

    .mb-sm-auto,
  .my-sm-auto {
        margin-bottom: auto !important;
    }

    .ml-sm-auto,
  .mx-sm-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 768px) {
    .m-md-0 {
        margin: 0 !important;
    }

    .mt-md-0,
  .my-md-0 {
        margin-top: 0 !important;
    }

    .mr-md-0,
  .mx-md-0 {
        margin-right: 0 !important;
    }

    .mb-md-0,
  .my-md-0 {
        margin-bottom: 0 !important;
    }

    .ml-md-0,
  .mx-md-0 {
        margin-left: 0 !important;
    }

    .m-md-1 {
        margin: 0.25rem !important;
    }

    .mt-md-1,
  .my-md-1 {
        margin-top: 0.25rem !important;
    }

    .mr-md-1,
  .mx-md-1 {
        margin-right: 0.25rem !important;
    }

    .mb-md-1,
  .my-md-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-md-1,
  .mx-md-1 {
        margin-left: 0.25rem !important;
    }

    .m-md-2 {
        margin: 0.5rem !important;
    }

    .mt-md-2,
  .my-md-2 {
        margin-top: 0.5rem !important;
    }

    .mr-md-2,
  .mx-md-2 {
        margin-right: 0.5rem !important;
    }

    .mb-md-2,
  .my-md-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-md-2,
  .mx-md-2 {
        margin-left: 0.5rem !important;
    }

    .m-md-3 {
        margin: 1rem !important;
    }

    .mt-md-3,
  .my-md-3 {
        margin-top: 1rem !important;
    }

    .mr-md-3,
  .mx-md-3 {
        margin-right: 1rem !important;
    }

    .mb-md-3,
  .my-md-3 {
        margin-bottom: 1rem !important;
    }

    .ml-md-3,
  .mx-md-3 {
        margin-left: 1rem !important;
    }

    .m-md-4 {
        margin: 1.5rem !important;
    }

    .mt-md-4,
  .my-md-4 {
        margin-top: 1.5rem !important;
    }

    .mr-md-4,
  .mx-md-4 {
        margin-right: 1.5rem !important;
    }

    .mb-md-4,
  .my-md-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-md-4,
  .mx-md-4 {
        margin-left: 1.5rem !important;
    }

    .m-md-5 {
        margin: 3rem !important;
    }

    .mt-md-5,
  .my-md-5 {
        margin-top: 3rem !important;
    }

    .mr-md-5,
  .mx-md-5 {
        margin-right: 3rem !important;
    }

    .mb-md-5,
  .my-md-5 {
        margin-bottom: 3rem !important;
    }

    .ml-md-5,
  .mx-md-5 {
        margin-left: 3rem !important;
    }

    .p-md-0 {
        padding: 0 !important;
    }

    .pt-md-0,
  .py-md-0 {
        padding-top: 0 !important;
    }

    .pr-md-0,
  .px-md-0 {
        padding-right: 0 !important;
    }

    .pb-md-0,
  .py-md-0 {
        padding-bottom: 0 !important;
    }

    .pl-md-0,
  .px-md-0 {
        padding-left: 0 !important;
    }

    .p-md-1 {
        padding: 0.25rem !important;
    }

    .pt-md-1,
  .py-md-1 {
        padding-top: 0.25rem !important;
    }

    .pr-md-1,
  .px-md-1 {
        padding-right: 0.25rem !important;
    }

    .pb-md-1,
  .py-md-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-md-1,
  .px-md-1 {
        padding-left: 0.25rem !important;
    }

    .p-md-2 {
        padding: 0.5rem !important;
    }

    .pt-md-2,
  .py-md-2 {
        padding-top: 0.5rem !important;
    }

    .pr-md-2,
  .px-md-2 {
        padding-right: 0.5rem !important;
    }

    .pb-md-2,
  .py-md-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-md-2,
  .px-md-2 {
        padding-left: 0.5rem !important;
    }

    .p-md-3 {
        padding: 1rem !important;
    }

    .pt-md-3,
  .py-md-3 {
        padding-top: 1rem !important;
    }

    .pr-md-3,
  .px-md-3 {
        padding-right: 1rem !important;
    }

    .pb-md-3,
  .py-md-3 {
        padding-bottom: 1rem !important;
    }

    .pl-md-3,
  .px-md-3 {
        padding-left: 1rem !important;
    }

    .p-md-4 {
        padding: 1.5rem !important;
    }

    .pt-md-4,
  .py-md-4 {
        padding-top: 1.5rem !important;
    }

    .pr-md-4,
  .px-md-4 {
        padding-right: 1.5rem !important;
    }

    .pb-md-4,
  .py-md-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-md-4,
  .px-md-4 {
        padding-left: 1.5rem !important;
    }

    .p-md-5 {
        padding: 3rem !important;
    }

    .pt-md-5,
  .py-md-5 {
        padding-top: 3rem !important;
    }

    .pr-md-5,
  .px-md-5 {
        padding-right: 3rem !important;
    }

    .pb-md-5,
  .py-md-5 {
        padding-bottom: 3rem !important;
    }

    .pl-md-5,
  .px-md-5 {
        padding-left: 3rem !important;
    }

    .m-md-n1 {
        margin: -0.25rem !important;
    }

    .mt-md-n1,
  .my-md-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-md-n1,
  .mx-md-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-md-n1,
  .my-md-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-md-n1,
  .mx-md-n1 {
        margin-left: -0.25rem !important;
    }

    .m-md-n2 {
        margin: -0.5rem !important;
    }

    .mt-md-n2,
  .my-md-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-md-n2,
  .mx-md-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-md-n2,
  .my-md-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-md-n2,
  .mx-md-n2 {
        margin-left: -0.5rem !important;
    }

    .m-md-n3 {
        margin: -1rem !important;
    }

    .mt-md-n3,
  .my-md-n3 {
        margin-top: -1rem !important;
    }

    .mr-md-n3,
  .mx-md-n3 {
        margin-right: -1rem !important;
    }

    .mb-md-n3,
  .my-md-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-md-n3,
  .mx-md-n3 {
        margin-left: -1rem !important;
    }

    .m-md-n4 {
        margin: -1.5rem !important;
    }

    .mt-md-n4,
  .my-md-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-md-n4,
  .mx-md-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-md-n4,
  .my-md-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-md-n4,
  .mx-md-n4 {
        margin-left: -1.5rem !important;
    }

    .m-md-n5 {
        margin: -3rem !important;
    }

    .mt-md-n5,
  .my-md-n5 {
        margin-top: -3rem !important;
    }

    .mr-md-n5,
  .mx-md-n5 {
        margin-right: -3rem !important;
    }

    .mb-md-n5,
  .my-md-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-md-n5,
  .mx-md-n5 {
        margin-left: -3rem !important;
    }

    .m-md-auto {
        margin: auto !important;
    }

    .mt-md-auto,
  .my-md-auto {
        margin-top: auto !important;
    }

    .mr-md-auto,
  .mx-md-auto {
        margin-right: auto !important;
    }

    .mb-md-auto,
  .my-md-auto {
        margin-bottom: auto !important;
    }

    .ml-md-auto,
  .mx-md-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 992px) {
    .m-lg-0 {
        margin: 0 !important;
    }

    .mt-lg-0,
  .my-lg-0 {
        margin-top: 0 !important;
    }

    .mr-lg-0,
  .mx-lg-0 {
        margin-right: 0 !important;
    }

    .mb-lg-0,
  .my-lg-0 {
        margin-bottom: 0 !important;
    }

    .ml-lg-0,
  .mx-lg-0 {
        margin-left: 0 !important;
    }

    .m-lg-1 {
        margin: 0.25rem !important;
    }

    .mt-lg-1,
  .my-lg-1 {
        margin-top: 0.25rem !important;
    }

    .mr-lg-1,
  .mx-lg-1 {
        margin-right: 0.25rem !important;
    }

    .mb-lg-1,
  .my-lg-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-lg-1,
  .mx-lg-1 {
        margin-left: 0.25rem !important;
    }

    .m-lg-2 {
        margin: 0.5rem !important;
    }

    .mt-lg-2,
  .my-lg-2 {
        margin-top: 0.5rem !important;
    }

    .mr-lg-2,
  .mx-lg-2 {
        margin-right: 0.5rem !important;
    }

    .mb-lg-2,
  .my-lg-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-lg-2,
  .mx-lg-2 {
        margin-left: 0.5rem !important;
    }

    .m-lg-3 {
        margin: 1rem !important;
    }

    .mt-lg-3,
  .my-lg-3 {
        margin-top: 1rem !important;
    }

    .mr-lg-3,
  .mx-lg-3 {
        margin-right: 1rem !important;
    }

    .mb-lg-3,
  .my-lg-3 {
        margin-bottom: 1rem !important;
    }

    .ml-lg-3,
  .mx-lg-3 {
        margin-left: 1rem !important;
    }

    .m-lg-4 {
        margin: 1.5rem !important;
    }

    .mt-lg-4,
  .my-lg-4 {
        margin-top: 1.5rem !important;
    }

    .mr-lg-4,
  .mx-lg-4 {
        margin-right: 1.5rem !important;
    }

    .mb-lg-4,
  .my-lg-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-lg-4,
  .mx-lg-4 {
        margin-left: 1.5rem !important;
    }

    .m-lg-5 {
        margin: 3rem !important;
    }

    .mt-lg-5,
  .my-lg-5 {
        margin-top: 3rem !important;
    }

    .mr-lg-5,
  .mx-lg-5 {
        margin-right: 3rem !important;
    }

    .mb-lg-5,
  .my-lg-5 {
        margin-bottom: 3rem !important;
    }

    .ml-lg-5,
  .mx-lg-5 {
        margin-left: 3rem !important;
    }

    .p-lg-0 {
        padding: 0 !important;
    }

    .pt-lg-0,
  .py-lg-0 {
        padding-top: 0 !important;
    }

    .pr-lg-0,
  .px-lg-0 {
        padding-right: 0 !important;
    }

    .pb-lg-0,
  .py-lg-0 {
        padding-bottom: 0 !important;
    }

    .pl-lg-0,
  .px-lg-0 {
        padding-left: 0 !important;
    }

    .p-lg-1 {
        padding: 0.25rem !important;
    }

    .pt-lg-1,
  .py-lg-1 {
        padding-top: 0.25rem !important;
    }

    .pr-lg-1,
  .px-lg-1 {
        padding-right: 0.25rem !important;
    }

    .pb-lg-1,
  .py-lg-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-lg-1,
  .px-lg-1 {
        padding-left: 0.25rem !important;
    }

    .p-lg-2 {
        padding: 0.5rem !important;
    }

    .pt-lg-2,
  .py-lg-2 {
        padding-top: 0.5rem !important;
    }

    .pr-lg-2,
  .px-lg-2 {
        padding-right: 0.5rem !important;
    }

    .pb-lg-2,
  .py-lg-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-lg-2,
  .px-lg-2 {
        padding-left: 0.5rem !important;
    }

    .p-lg-3 {
        padding: 1rem !important;
    }

    .pt-lg-3,
  .py-lg-3 {
        padding-top: 1rem !important;
    }

    .pr-lg-3,
  .px-lg-3 {
        padding-right: 1rem !important;
    }

    .pb-lg-3,
  .py-lg-3 {
        padding-bottom: 1rem !important;
    }

    .pl-lg-3,
  .px-lg-3 {
        padding-left: 1rem !important;
    }

    .p-lg-4 {
        padding: 1.5rem !important;
    }

    .pt-lg-4,
  .py-lg-4 {
        padding-top: 1.5rem !important;
    }

    .pr-lg-4,
  .px-lg-4 {
        padding-right: 1.5rem !important;
    }

    .pb-lg-4,
  .py-lg-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-lg-4,
  .px-lg-4 {
        padding-left: 1.5rem !important;
    }

    .p-lg-5 {
        padding: 3rem !important;
    }

    .pt-lg-5,
  .py-lg-5 {
        padding-top: 3rem !important;
    }

    .pr-lg-5,
  .px-lg-5 {
        padding-right: 3rem !important;
    }

    .pb-lg-5,
  .py-lg-5 {
        padding-bottom: 3rem !important;
    }

    .pl-lg-5,
  .px-lg-5 {
        padding-left: 3rem !important;
    }

    .m-lg-n1 {
        margin: -0.25rem !important;
    }

    .mt-lg-n1,
  .my-lg-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-lg-n1,
  .mx-lg-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-lg-n1,
  .my-lg-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-lg-n1,
  .mx-lg-n1 {
        margin-left: -0.25rem !important;
    }

    .m-lg-n2 {
        margin: -0.5rem !important;
    }

    .mt-lg-n2,
  .my-lg-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-lg-n2,
  .mx-lg-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-lg-n2,
  .my-lg-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-lg-n2,
  .mx-lg-n2 {
        margin-left: -0.5rem !important;
    }

    .m-lg-n3 {
        margin: -1rem !important;
    }

    .mt-lg-n3,
  .my-lg-n3 {
        margin-top: -1rem !important;
    }

    .mr-lg-n3,
  .mx-lg-n3 {
        margin-right: -1rem !important;
    }

    .mb-lg-n3,
  .my-lg-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-lg-n3,
  .mx-lg-n3 {
        margin-left: -1rem !important;
    }

    .m-lg-n4 {
        margin: -1.5rem !important;
    }

    .mt-lg-n4,
  .my-lg-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-lg-n4,
  .mx-lg-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-lg-n4,
  .my-lg-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-lg-n4,
  .mx-lg-n4 {
        margin-left: -1.5rem !important;
    }

    .m-lg-n5 {
        margin: -3rem !important;
    }

    .mt-lg-n5,
  .my-lg-n5 {
        margin-top: -3rem !important;
    }

    .mr-lg-n5,
  .mx-lg-n5 {
        margin-right: -3rem !important;
    }

    .mb-lg-n5,
  .my-lg-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-lg-n5,
  .mx-lg-n5 {
        margin-left: -3rem !important;
    }

    .m-lg-auto {
        margin: auto !important;
    }

    .mt-lg-auto,
  .my-lg-auto {
        margin-top: auto !important;
    }

    .mr-lg-auto,
  .mx-lg-auto {
        margin-right: auto !important;
    }

    .mb-lg-auto,
  .my-lg-auto {
        margin-bottom: auto !important;
    }

    .ml-lg-auto,
  .mx-lg-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 1200px) {
    .m-xl-0 {
        margin: 0 !important;
    }

    .mt-xl-0,
  .my-xl-0 {
        margin-top: 0 !important;
    }

    .mr-xl-0,
  .mx-xl-0 {
        margin-right: 0 !important;
    }

    .mb-xl-0,
  .my-xl-0 {
        margin-bottom: 0 !important;
    }

    .ml-xl-0,
  .mx-xl-0 {
        margin-left: 0 !important;
    }

    .m-xl-1 {
        margin: 0.25rem !important;
    }

    .mt-xl-1,
  .my-xl-1 {
        margin-top: 0.25rem !important;
    }

    .mr-xl-1,
  .mx-xl-1 {
        margin-right: 0.25rem !important;
    }

    .mb-xl-1,
  .my-xl-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-xl-1,
  .mx-xl-1 {
        margin-left: 0.25rem !important;
    }

    .m-xl-2 {
        margin: 0.5rem !important;
    }

    .mt-xl-2,
  .my-xl-2 {
        margin-top: 0.5rem !important;
    }

    .mr-xl-2,
  .mx-xl-2 {
        margin-right: 0.5rem !important;
    }

    .mb-xl-2,
  .my-xl-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-xl-2,
  .mx-xl-2 {
        margin-left: 0.5rem !important;
    }

    .m-xl-3 {
        margin: 1rem !important;
    }

    .mt-xl-3,
  .my-xl-3 {
        margin-top: 1rem !important;
    }

    .mr-xl-3,
  .mx-xl-3 {
        margin-right: 1rem !important;
    }

    .mb-xl-3,
  .my-xl-3 {
        margin-bottom: 1rem !important;
    }

    .ml-xl-3,
  .mx-xl-3 {
        margin-left: 1rem !important;
    }

    .m-xl-4 {
        margin: 1.5rem !important;
    }

    .mt-xl-4,
  .my-xl-4 {
        margin-top: 1.5rem !important;
    }

    .mr-xl-4,
  .mx-xl-4 {
        margin-right: 1.5rem !important;
    }

    .mb-xl-4,
  .my-xl-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-xl-4,
  .mx-xl-4 {
        margin-left: 1.5rem !important;
    }

    .m-xl-5 {
        margin: 3rem !important;
    }

    .mt-xl-5,
  .my-xl-5 {
        margin-top: 3rem !important;
    }

    .mr-xl-5,
  .mx-xl-5 {
        margin-right: 3rem !important;
    }

    .mb-xl-5,
  .my-xl-5 {
        margin-bottom: 3rem !important;
    }

    .ml-xl-5,
  .mx-xl-5 {
        margin-left: 3rem !important;
    }

    .p-xl-0 {
        padding: 0 !important;
    }

    .pt-xl-0,
  .py-xl-0 {
        padding-top: 0 !important;
    }

    .pr-xl-0,
  .px-xl-0 {
        padding-right: 0 !important;
    }

    .pb-xl-0,
  .py-xl-0 {
        padding-bottom: 0 !important;
    }

    .pl-xl-0,
  .px-xl-0 {
        padding-left: 0 !important;
    }

    .p-xl-1 {
        padding: 0.25rem !important;
    }

    .pt-xl-1,
  .py-xl-1 {
        padding-top: 0.25rem !important;
    }

    .pr-xl-1,
  .px-xl-1 {
        padding-right: 0.25rem !important;
    }

    .pb-xl-1,
  .py-xl-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-xl-1,
  .px-xl-1 {
        padding-left: 0.25rem !important;
    }

    .p-xl-2 {
        padding: 0.5rem !important;
    }

    .pt-xl-2,
  .py-xl-2 {
        padding-top: 0.5rem !important;
    }

    .pr-xl-2,
  .px-xl-2 {
        padding-right: 0.5rem !important;
    }

    .pb-xl-2,
  .py-xl-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-xl-2,
  .px-xl-2 {
        padding-left: 0.5rem !important;
    }

    .p-xl-3 {
        padding: 1rem !important;
    }

    .pt-xl-3,
  .py-xl-3 {
        padding-top: 1rem !important;
    }

    .pr-xl-3,
  .px-xl-3 {
        padding-right: 1rem !important;
    }

    .pb-xl-3,
  .py-xl-3 {
        padding-bottom: 1rem !important;
    }

    .pl-xl-3,
  .px-xl-3 {
        padding-left: 1rem !important;
    }

    .p-xl-4 {
        padding: 1.5rem !important;
    }

    .pt-xl-4,
  .py-xl-4 {
        padding-top: 1.5rem !important;
    }

    .pr-xl-4,
  .px-xl-4 {
        padding-right: 1.5rem !important;
    }

    .pb-xl-4,
  .py-xl-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-xl-4,
  .px-xl-4 {
        padding-left: 1.5rem !important;
    }

    .p-xl-5 {
        padding: 3rem !important;
    }

    .pt-xl-5,
  .py-xl-5 {
        padding-top: 3rem !important;
    }

    .pr-xl-5,
  .px-xl-5 {
        padding-right: 3rem !important;
    }

    .pb-xl-5,
  .py-xl-5 {
        padding-bottom: 3rem !important;
    }

    .pl-xl-5,
  .px-xl-5 {
        padding-left: 3rem !important;
    }

    .m-xl-n1 {
        margin: -0.25rem !important;
    }

    .mt-xl-n1,
  .my-xl-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-xl-n1,
  .mx-xl-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-xl-n1,
  .my-xl-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-xl-n1,
  .mx-xl-n1 {
        margin-left: -0.25rem !important;
    }

    .m-xl-n2 {
        margin: -0.5rem !important;
    }

    .mt-xl-n2,
  .my-xl-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-xl-n2,
  .mx-xl-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-xl-n2,
  .my-xl-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-xl-n2,
  .mx-xl-n2 {
        margin-left: -0.5rem !important;
    }

    .m-xl-n3 {
        margin: -1rem !important;
    }

    .mt-xl-n3,
  .my-xl-n3 {
        margin-top: -1rem !important;
    }

    .mr-xl-n3,
  .mx-xl-n3 {
        margin-right: -1rem !important;
    }

    .mb-xl-n3,
  .my-xl-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-xl-n3,
  .mx-xl-n3 {
        margin-left: -1rem !important;
    }

    .m-xl-n4 {
        margin: -1.5rem !important;
    }

    .mt-xl-n4,
  .my-xl-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-xl-n4,
  .mx-xl-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-xl-n4,
  .my-xl-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-xl-n4,
  .mx-xl-n4 {
        margin-left: -1.5rem !important;
    }

    .m-xl-n5 {
        margin: -3rem !important;
    }

    .mt-xl-n5,
  .my-xl-n5 {
        margin-top: -3rem !important;
    }

    .mr-xl-n5,
  .mx-xl-n5 {
        margin-right: -3rem !important;
    }

    .mb-xl-n5,
  .my-xl-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-xl-n5,
  .mx-xl-n5 {
        margin-left: -3rem !important;
    }

    .m-xl-auto {
        margin: auto !important;
    }

    .mt-xl-auto,
  .my-xl-auto {
        margin-top: auto !important;
    }

    .mr-xl-auto,
  .mx-xl-auto {
        margin-right: auto !important;
    }

    .mb-xl-auto,
  .my-xl-auto {
        margin-bottom: auto !important;
    }

    .ml-xl-auto,
  .mx-xl-auto {
        margin-left: auto !important;
    }
}

.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: rgba(0, 0, 0, 0);
}

.text-monospace {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

.text-justify {
    text-align: justify !important;
}

.text-wrap {
    white-space: normal !important;
}

.text-nowrap {
    white-space: nowrap !important;
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.text-left {
    text-align: left !important;
}

.text-right {
    text-align: right !important;
}

.text-center {
    text-align: center !important;
}

@media (min-width: 576px) {
    .text-sm-left {
        text-align: left !important;
    }

    .text-sm-right {
        text-align: right !important;
    }

    .text-sm-center {
        text-align: center !important;
    }
}

@media (min-width: 768px) {
    .text-md-left {
        text-align: left !important;
    }

    .text-md-right {
        text-align: right !important;
    }

    .text-md-center {
        text-align: center !important;
    }
}

@media (min-width: 992px) {
    .text-lg-left {
        text-align: left !important;
    }

    .text-lg-right {
        text-align: right !important;
    }

    .text-lg-center {
        text-align: center !important;
    }
}

@media (min-width: 1200px) {
    .text-xl-left {
        text-align: left !important;
    }

    .text-xl-right {
        text-align: right !important;
    }

    .text-xl-center {
        text-align: center !important;
    }
}

.text-lowercase {
    text-transform: lowercase !important;
}

.text-uppercase {
    text-transform: uppercase !important;
}

.text-capitalize {
    text-transform: capitalize !important;
}

.font-weight-light {
    font-weight: 300 !important;
}

.font-weight-lighter {
    font-weight: lighter !important;
}

.font-weight-normal {
    font-weight: 400 !important;
}

.font-weight-bold {
    font-weight: 700 !important;
}

.font-weight-bolder {
    font-weight: bolder !important;
}

.font-italic {
    font-style: italic !important;
}

.text-white {
    color: #fff !important;
}

.text-primary {
    color: #4680ff !important;
}

a.text-primary:hover, a.text-primary:focus {
    color: #004ef9 !important;
}

.text-secondary {
    color: #6c757d !important;
}

a.text-secondary:hover, a.text-secondary:focus {
    color: #494f54 !important;
}

.text-success {
    color: #9ccc65 !important;
}

a.text-success:hover, a.text-success:focus {
    color: #76ac39 !important;
}

.text-info {
    color: #00acc1 !important;
}

a.text-info:hover, a.text-info:focus {
    color: #006875 !important;
}

.text-warning {
    color: #ffba57 !important;
}

a.text-warning:hover, a.text-warning:focus {
    color: #ff9b0b !important;
}

.text-danger {
    color: #ff5252 !important;
}

a.text-danger:hover, a.text-danger:focus {
    color: #ff0606 !important;
}

.text-light {
    color: #f8f9fa !important;
}

a.text-light:hover, a.text-light:focus {
    color: #cbd3da !important;
}

.text-dark {
    color: #343a40 !important;
}

a.text-dark:hover, a.text-dark:focus {
    color: #121416 !important;
}

.text-body {
    color: #373a3c !important;
}

.text-muted {
    color: #868e96 !important;
}

.text-black-50 {
    color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}

.text-decoration-none {
    text-decoration: none !important;
}

.text-break {
    word-wrap: break-word !important;
}

.text-reset {
    color: inherit !important;
}

.visible {
    visibility: visible !important;
}

.invisible {
    visibility: hidden !important;
}

@media print {
    *,
  *::before,
  *::after {
        text-shadow: none !important;
        box-shadow: none !important;
    }

    a:not(.btn) {
        text-decoration: underline;
    }

    abbr[title]::after {
        content: " (" attr(title) ")";
    }

    pre {
        white-space: pre-wrap !important;
    }

    pre,
  blockquote {
        border: 1px solid #adb5bd;
        page-break-inside: avoid;
    }

    thead {
        display: table-header-group;
    }

    tr,
  img {
        page-break-inside: avoid;
    }

    p,
  h2,
  h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
  h3 {
        page-break-after: avoid;
    }
    @page {
        size: a3;
    }

    body {
        min-width: 992px !important;
    }

    .container {
        min-width: 992px !important;
    }

    .navbar {
        display: none;
    }

    .badge {
        border: 1px solid #000;
    }

    .table {
        border-collapse: collapse !important;
    }

    .table td,
    .table th {
        background-color: #fff !important;
    }

    .table-bordered th,
  .table-bordered td {
        border: 1px solid #dee2e6 !important;
    }

    .table-dark {
        color: inherit;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
        border-color: #e3eaef;
    }

    .table .thead-dark th {
        color: inherit;
        border-color: #e3eaef;
    }
}

@font-face {
    font-family: "pct";
  src: url("../fonts/pct.eot");
  src: url("../fonts/pct.eot?#iefix") format("embedded-opentype"), url("../fonts/pct.woff") format("woff"), url("../fonts/pct.ttf") format("truetype"), url("../fonts/pct.svg#pct") format("svg");
  font-weight: normal;
  font-style: normal;
}

[data-icon]:before {
    font-family: "pct" !important;
    content: attr(data-icon);
    font-style: normal !important;
    font-weight: normal !important;
    font-variant: normal !important;
    text-transform: none !important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

[class^="pct-"]:before, [class*=" pct-"]:before {
    font-family: "pct" !important;
    font-style: normal !important;
    font-weight: normal !important;
    font-variant: normal !important;
    text-transform: none !important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.pct-arrow1:before {
    content: "\61";
}

.pct-arrow2:before {
    content: "\62";
}

.pct-arrow3:before {
    content: "\63";
}

.pct-arrow4:before {
    content: "\64";
}

.pct-chat1:before {
    content: "\65";
}

.pct-chat2:before {
    content: "\66";
}

.pct-chat3:before {
    content: "\67";
}

.pct-chat4:before {
    content: "\68";
}

.pct-loader1:before {
    content: "\69";
}

.pct-arrow-sharp1:before {
    content: "\6a";
}

.pct-arrow-sharp2:before {
    content: "\6b";
}

.pct-arrow-sharp3:before {
    content: "\6c";
}

.pct-arrow-sharp4:before {
    content: "\6d";
}

@font-face {
    font-family: "feather";
  src: url("../fonts/feather.eot?t=1501841394106");
  /* IE9*/
  src: url("../fonts/feather.eot?t=1501841394106#iefix") format("embedded-opentype"), url("../fonts/feather.woff?t=1501841394106") format("woff"), url("../fonts/feather.ttf?t=1501841394106") format("truetype"), url("../fonts/feather.svg?t=1501841394106#feather") format("svg");
  /* iOS 4.1- */
}

.feather {
  /* use !important to prevent issues with browser extensions that change fonts */
    font-family: 'feather' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
  /* Better Font Rendering =========== */
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.icon-alert-octagon:before {
    content: "\e81b";
}

.icon-alert-circle:before {
    content: "\e81c";
}

.icon-activity:before {
    content: "\e81d";
}

.icon-alert-triangle:before {
    content: "\e81e";
}

.icon-align-center:before {
    content: "\e81f";
}

.icon-airplay:before {
    content: "\e820";
}

.icon-align-justify:before {
    content: "\e821";
}

.icon-align-left:before {
    content: "\e822";
}

.icon-align-right:before {
    content: "\e823";
}

.icon-arrow-down-left:before {
    content: "\e824";
}

.icon-arrow-down-right:before {
    content: "\e825";
}

.icon-anchor:before {
    content: "\e826";
}

.icon-aperture:before {
    content: "\e827";
}

.icon-arrow-left:before {
    content: "\e828";
}

.icon-arrow-right:before {
    content: "\e829";
}

.icon-arrow-down:before {
    content: "\e82a";
}

.icon-arrow-up-left:before {
    content: "\e82b";
}

.icon-arrow-up-right:before {
    content: "\e82c";
}

.icon-arrow-up:before {
    content: "\e82d";
}

.icon-award:before {
    content: "\e82e";
}

.icon-bar-chart:before {
    content: "\e82f";
}

.icon-at-sign:before {
    content: "\e830";
}

.icon-bar-chart-2:before {
    content: "\e831";
}

.icon-battery-charging:before {
    content: "\e832";
}

.icon-bell-off:before {
    content: "\e833";
}

.icon-battery:before {
    content: "\e834";
}

.icon-bluetooth:before {
    content: "\e835";
}

.icon-bell:before {
    content: "\e836";
}

.icon-book:before {
    content: "\e837";
}

.icon-briefcase:before {
    content: "\e838";
}

.icon-camera-off:before {
    content: "\e839";
}

.icon-calendar:before {
    content: "\e83a";
}

.icon-bookmark:before {
    content: "\e83b";
}

.icon-box:before {
    content: "\e83c";
}

.icon-camera:before {
    content: "\e83d";
}

.icon-check-circle:before {
    content: "\e83e";
}

.icon-check:before {
    content: "\e83f";
}

.icon-check-square:before {
    content: "\e840";
}

.icon-cast:before {
    content: "\e841";
}

.icon-chevron-down:before {
    content: "\e842";
}

.icon-chevron-left:before {
    content: "\e843";
}

.icon-chevron-right:before {
    content: "\e844";
}

.icon-chevron-up:before {
    content: "\e845";
}

.icon-chevrons-down:before {
    content: "\e846";
}

.icon-chevrons-right:before {
    content: "\e847";
}

.icon-chevrons-up:before {
    content: "\e848";
}

.icon-chevrons-left:before {
    content: "\e849";
}

.icon-circle:before {
    content: "\e84a";
}

.icon-clipboard:before {
    content: "\e84b";
}

.icon-chrome:before {
    content: "\e84c";
}

.icon-clock:before {
    content: "\e84d";
}

.icon-cloud-lightning:before {
    content: "\e84e";
}

.icon-cloud-drizzle:before {
    content: "\e84f";
}

.icon-cloud-rain:before {
    content: "\e850";
}

.icon-cloud-off:before {
    content: "\e851";
}

.icon-codepen:before {
    content: "\e852";
}

.icon-cloud-snow:before {
    content: "\e853";
}

.icon-compass:before {
    content: "\e854";
}

.icon-copy:before {
    content: "\e855";
}

.icon-corner-down-right:before {
    content: "\e856";
}

.icon-corner-down-left:before {
    content: "\e857";
}

.icon-corner-left-down:before {
    content: "\e858";
}

.icon-corner-left-up:before {
    content: "\e859";
}

.icon-corner-up-left:before {
    content: "\e85a";
}

.icon-corner-up-right:before {
    content: "\e85b";
}

.icon-corner-right-down:before {
    content: "\e85c";
}

.icon-corner-right-up:before {
    content: "\e85d";
}

.icon-cpu:before {
    content: "\e85e";
}

.icon-credit-card:before {
    content: "\e85f";
}

.icon-crosshair:before {
    content: "\e860";
}

.icon-disc:before {
    content: "\e861";
}

.icon-delete:before {
    content: "\e862";
}

.icon-download-cloud:before {
    content: "\e863";
}

.icon-download:before {
    content: "\e864";
}

.icon-droplet:before {
    content: "\e865";
}

.icon-edit-2:before {
    content: "\e866";
}

.icon-edit:before {
    content: "\e867";
}

.icon-edit-1:before {
    content: "\e868";
}

.icon-external-link:before {
    content: "\e869";
}

.icon-eye:before {
    content: "\e86a";
}

.icon-feather:before {
    content: "\e86b";
}

.icon-facebook:before {
    content: "\e86c";
}

.icon-file-minus:before {
    content: "\e86d";
}

.icon-eye-off:before {
    content: "\e86e";
}

.icon-fast-forward:before {
    content: "\e86f";
}

.icon-file-text:before {
    content: "\e870";
}

.icon-film:before {
    content: "\e871";
}

.icon-file:before {
    content: "\e872";
}

.icon-file-plus:before {
    content: "\e873";
}

.icon-folder:before {
    content: "\e874";
}

.icon-filter:before {
    content: "\e875";
}

.icon-flag:before {
    content: "\e876";
}

.icon-globe:before {
    content: "\e877";
}

.icon-grid:before {
    content: "\e878";
}

.icon-heart:before {
    content: "\e879";
}

.icon-home:before {
    content: "\e87a";
}

.icon-github:before {
    content: "\e87b";
}

.icon-image:before {
    content: "\e87c";
}

.icon-inbox:before {
    content: "\e87d";
}

.icon-layers:before {
    content: "\e87e";
}

.icon-info:before {
    content: "\e87f";
}

.icon-instagram:before {
    content: "\e880";
}

.icon-layout:before {
    content: "\e881";
}

.icon-link-2:before {
    content: "\e882";
}

.icon-life-buoy:before {
    content: "\e883";
}

.icon-link:before {
    content: "\e884";
}

.icon-log-in:before {
    content: "\e885";
}

.icon-list:before {
    content: "\e886";
}

.icon-lock:before {
    content: "\e887";
}

.icon-log-out:before {
    content: "\e888";
}

.icon-loader:before {
    content: "\e889";
}

.icon-mail:before {
    content: "\e88a";
}

.icon-maximize-2:before {
    content: "\e88b";
}

.icon-map:before {
    content: "\e88c";
}

.icon-map-pin:before {
    content: "\e88e";
}

.icon-menu:before {
    content: "\e88f";
}

.icon-message-circle:before {
    content: "\e890";
}

.icon-message-square:before {
    content: "\e891";
}

.icon-minimize-2:before {
    content: "\e892";
}

.icon-mic-off:before {
    content: "\e893";
}

.icon-minus-circle:before {
    content: "\e894";
}

.icon-mic:before {
    content: "\e895";
}

.icon-minus-square:before {
    content: "\e896";
}

.icon-minus:before {
    content: "\e897";
}

.icon-moon:before {
    content: "\e898";
}

.icon-monitor:before {
    content: "\e899";
}

.icon-more-vertical:before {
    content: "\e89a";
}

.icon-more-horizontal:before {
    content: "\e89b";
}

.icon-move:before {
    content: "\e89c";
}

.icon-music:before {
    content: "\e89d";
}

.icon-navigation-2:before {
    content: "\e89e";
}

.icon-navigation:before {
    content: "\e89f";
}

.icon-octagon:before {
    content: "\e8a0";
}

.icon-package:before {
    content: "\e8a1";
}

.icon-pause-circle:before {
    content: "\e8a2";
}

.icon-pause:before {
    content: "\e8a3";
}

.icon-percent:before {
    content: "\e8a4";
}

.icon-phone-call:before {
    content: "\e8a5";
}

.icon-phone-forwarded:before {
    content: "\e8a6";
}

.icon-phone-missed:before {
    content: "\e8a7";
}

.icon-phone-off:before {
    content: "\e8a8";
}

.icon-phone-incoming:before {
    content: "\e8a9";
}

.icon-phone:before {
    content: "\e8aa";
}

.icon-phone-outgoing:before {
    content: "\e8ab";
}

.icon-pie-chart:before {
    content: "\e8ac";
}

.icon-play-circle:before {
    content: "\e8ad";
}

.icon-play:before {
    content: "\e8ae";
}

.icon-plus-square:before {
    content: "\e8af";
}

.icon-plus-circle:before {
    content: "\e8b0";
}

.icon-plus:before {
    content: "\e8b1";
}

.icon-pocket:before {
    content: "\e8b2";
}

.icon-printer:before {
    content: "\e8b3";
}

.icon-power:before {
    content: "\e8b4";
}

.icon-radio:before {
    content: "\e8b5";
}

.icon-repeat:before {
    content: "\e8b6";
}

.icon-refresh-ccw:before {
    content: "\e8b7";
}

.icon-rewind:before {
    content: "\e8b8";
}

.icon-rotate-ccw:before {
    content: "\e8b9";
}

.icon-refresh-cw:before {
    content: "\e8ba";
}

.icon-rotate-cw:before {
    content: "\e8bb";
}

.icon-save:before {
    content: "\e8bc";
}

.icon-search:before {
    content: "\e8bd";
}

.icon-server:before {
    content: "\e8be";
}

.icon-scissors:before {
    content: "\e8bf";
}

.icon-share-2:before {
    content: "\e8c0";
}

.icon-share:before {
    content: "\e8c1";
}

.icon-shield:before {
    content: "\e8c2";
}

.icon-settings:before {
    content: "\e8c3";
}

.icon-skip-back:before {
    content: "\e8c4";
}

.icon-shuffle:before {
    content: "\e8c5";
}

.icon-sidebar:before {
    content: "\e8c6";
}

.icon-skip-forward:before {
    content: "\e8c7";
}

.icon-slack:before {
    content: "\e8c8";
}

.icon-slash:before {
    content: "\e8c9";
}

.icon-smartphone:before {
    content: "\e8ca";
}

.icon-square:before {
    content: "\e8cb";
}

.icon-speaker:before {
    content: "\e8cc";
}

.icon-star:before {
    content: "\e8cd";
}

.icon-stop-circle:before {
    content: "\e8ce";
}

.icon-sun:before {
    content: "\e8cf";
}

.icon-sunrise:before {
    content: "\e8d0";
}

.icon-tablet:before {
    content: "\e8d1";
}

.icon-tag:before {
    content: "\e8d2";
}

.icon-sunset:before {
    content: "\e8d3";
}

.icon-target:before {
    content: "\e8d4";
}

.icon-thermometer:before {
    content: "\e8d5";
}

.icon-thumbs-up:before {
    content: "\e8d6";
}

.icon-thumbs-down:before {
    content: "\e8d7";
}

.icon-toggle-left:before {
    content: "\e8d8";
}

.icon-toggle-right:before {
    content: "\e8d9";
}

.icon-trash-2:before {
    content: "\e8da";
}

.icon-trash:before {
    content: "\e8db";
}

.icon-trending-up:before {
    content: "\e8dc";
}

.icon-trending-down:before {
    content: "\e8dd";
}

.icon-triangle:before {
    content: "\e8de";
}

.icon-type:before {
    content: "\e8df";
}

.icon-twitter:before {
    content: "\e8e0";
}

.icon-upload:before {
    content: "\e8e1";
}

.icon-umbrella:before {
    content: "\e8e2";
}

.icon-upload-cloud:before {
    content: "\e8e3";
}

.icon-unlock:before {
    content: "\e8e4";
}

.icon-user-check:before {
    content: "\e8e5";
}

.icon-user-minus:before {
    content: "\e8e6";
}

.icon-user-plus:before {
    content: "\e8e7";
}

.icon-user-x:before {
    content: "\e8e8";
}

.icon-user:before {
    content: "\e8e9";
}

.icon-users:before {
    content: "\e8ea";
}

.icon-video-off:before {
    content: "\e8eb";
}

.icon-video:before {
    content: "\e8ec";
}

.icon-voicemail:before {
    content: "\e8ed";
}

.icon-volume-x:before {
    content: "\e8ee";
}

.icon-volume-2:before {
    content: "\e8ef";
}

.icon-volume-1:before {
    content: "\e8f0";
}

.icon-volume:before {
    content: "\e8f1";
}

.icon-watch:before {
    content: "\e8f2";
}

.icon-wifi:before {
    content: "\e8f3";
}

.icon-x-square:before {
    content: "\e8f4";
}

.icon-wind:before {
    content: "\e8f5";
}

.icon-x:before {
    content: "\e8f6";
}

.icon-x-circle:before {
    content: "\e8f7";
}

.icon-zap:before {
    content: "\e8f8";
}

.icon-zoom-in:before {
    content: "\e8f9";
}

.icon-zoom-out:before {
    content: "\e8fa";
}

.icon-command:before {
    content: "\e8fb";
}

.icon-cloud:before {
    content: "\e8fc";
}

.icon-hash:before {
    content: "\e8fd";
}

.icon-headphones:before {
    content: "\e8fe";
}

.icon-underline:before {
    content: "\e8ff";
}

.icon-italic:before {
    content: "\e900";
}

.icon-bold:before {
    content: "\e901";
}

.icon-crop:before {
    content: "\e902";
}

.icon-help-circle:before {
    content: "\e903";
}

.icon-paperclip:before {
    content: "\e904";
}

.icon-shopping-cart:before {
    content: "\e905";
}

.icon-tv:before {
    content: "\e906";
}

.icon-wifi-off:before {
    content: "\e907";
}

.icon-minimize:before {
    content: "\e88d";
}

.icon-maximize:before {
    content: "\e908";
}

.icon-gitlab:before {
    content: "\e909";
}

.icon-sliders:before {
    content: "\e90a";
}

.icon-star-on:before {
    content: "\e90b";
}

.icon-heart-on:before {
    content: "\e90c";
}

.fa, .fab, .fal, .far, .fas {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1;
}

.fa-lg {
    font-size: 1.33333em;
    line-height: .75em;
    vertical-align: -.0667em;
}

.fa-xs {
    font-size: .75em;
}

.fa-sm {
    font-size: .875em;
}

.fa-1x {
    font-size: 1em;
}

.fa-2x {
    font-size: 2em;
}

.fa-3x {
    font-size: 3em;
}

.fa-4x {
    font-size: 4em;
}

.fa-5x {
    font-size: 5em;
}

.fa-6x {
    font-size: 6em;
}

.fa-7x {
    font-size: 7em;
}

.fa-8x {
    font-size: 8em;
}

.fa-9x {
    font-size: 9em;
}

.fa-10x {
    font-size: 10em;
}

.fa-fw {
    text-align: center;
    width: 1.25em;
}

.fa-ul {
    list-style-type: none;
    margin-left: 2.5em;
    padding-left: 0;
}

.fa-ul > li {
    position: relative;
}

.fa-li {
    left: -2em;
    position: absolute;
    text-align: center;
    width: 2em;
    line-height: inherit;
}

.fa-border {
    border: .08em solid #eee;
    border-radius: .1em;
    padding: .2em .25em .15em;
}

.fa-pull-left {
    float: left;
}

.fa-pull-right {
    float: right;
}

.fa.fa-pull-left, .fab.fa-pull-left, .fal.fa-pull-left, .far.fa-pull-left, .fas.fa-pull-left {
    margin-right: .3em;
}

.fa.fa-pull-right, .fab.fa-pull-right, .fal.fa-pull-right, .far.fa-pull-right, .fas.fa-pull-right {
    margin-left: .3em;
}

.fa-spin {
    -webkit-animation: fa-spin 2s infinite linear;
    animation: fa-spin 2s infinite linear;
}

.fa-pulse {
    -webkit-animation: fa-spin 1s infinite steps(8);
    animation: fa-spin 1s infinite steps(8);
}

@-webkit-keyframes fa-spin {
    0% {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(1turn);
    }
}

@keyframes fa-spin {
    0% {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(1turn);
    }
}

.fa-rotate-90 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
    transform: rotate(90deg);
}

.fa-rotate-180 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
    transform: rotate(180deg);
}

.fa-rotate-270 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
    transform: rotate(270deg);
}

.fa-flip-horizontal {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
    transform: scaleX(-1);
}

.fa-flip-vertical {
    transform: scaleY(-1);
}

.fa-flip-horizontal.fa-flip-vertical, .fa-flip-vertical {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
}

.fa-flip-horizontal.fa-flip-vertical {
    transform: scale(-1);
}

:root .fa-flip-horizontal, :root .fa-flip-vertical, :root .fa-rotate-90, :root .fa-rotate-180, :root .fa-rotate-270 {
    -webkit-filter: none;
    filter: none;
}

.fa-stack {
    display: inline-block;
    height: 2em;
    line-height: 2em;
    position: relative;
    vertical-align: middle;
    width: 2.5em;
}

.fa-stack-1x, .fa-stack-2x {
    left: 0;
    position: absolute;
    text-align: center;
    width: 100%;
}

.fa-stack-1x {
    line-height: inherit;
}

.fa-stack-2x {
    font-size: 2em;
}

.fa-inverse {
    color: #fff;
}

.fa-500px:before {
    content: "\f26e";
}

.fa-accessible-icon:before {
    content: "\f368";
}

.fa-accusoft:before {
    content: "\f369";
}

.fa-acquisitions-incorporated:before {
    content: "\f6af";
}

.fa-ad:before {
    content: "\f641";
}

.fa-address-book:before {
    content: "\f2b9";
}

.fa-address-card:before {
    content: "\f2bb";
}

.fa-adjust:before {
    content: "\f042";
}

.fa-adn:before {
    content: "\f170";
}

.fa-adobe:before {
    content: "\f778";
}

.fa-adversal:before {
    content: "\f36a";
}

.fa-affiliatetheme:before {
    content: "\f36b";
}

.fa-air-freshener:before {
    content: "\f5d0";
}

.fa-airbnb:before {
    content: "\f834";
}

.fa-algolia:before {
    content: "\f36c";
}

.fa-align-center:before {
    content: "\f037";
}

.fa-align-justify:before {
    content: "\f039";
}

.fa-align-left:before {
    content: "\f036";
}

.fa-align-right:before {
    content: "\f038";
}

.fa-alipay:before {
    content: "\f642";
}

.fa-allergies:before {
    content: "\f461";
}

.fa-amazon:before {
    content: "\f270";
}

.fa-amazon-pay:before {
    content: "\f42c";
}

.fa-ambulance:before {
    content: "\f0f9";
}

.fa-american-sign-language-interpreting:before {
    content: "\f2a3";
}

.fa-amilia:before {
    content: "\f36d";
}

.fa-anchor:before {
    content: "\f13d";
}

.fa-android:before {
    content: "\f17b";
}

.fa-angellist:before {
    content: "\f209";
}

.fa-angle-double-down:before {
    content: "\f103";
}

.fa-angle-double-left:before {
    content: "\f100";
}

.fa-angle-double-right:before {
    content: "\f101";
}

.fa-angle-double-up:before {
    content: "\f102";
}

.fa-angle-down:before {
    content: "\f107";
}

.fa-angle-left:before {
    content: "\f104";
}

.fa-angle-right:before {
    content: "\f105";
}

.fa-angle-up:before {
    content: "\f106";
}

.fa-angry:before {
    content: "\f556";
}

.fa-angrycreative:before {
    content: "\f36e";
}

.fa-angular:before {
    content: "\f420";
}

.fa-ankh:before {
    content: "\f644";
}

.fa-app-store:before {
    content: "\f36f";
}

.fa-app-store-ios:before {
    content: "\f370";
}

.fa-apper:before {
    content: "\f371";
}

.fa-apple:before {
    content: "\f179";
}

.fa-apple-alt:before {
    content: "\f5d1";
}

.fa-apple-pay:before {
    content: "\f415";
}

.fa-archive:before {
    content: "\f187";
}

.fa-archway:before {
    content: "\f557";
}

.fa-arrow-alt-circle-down:before {
    content: "\f358";
}

.fa-arrow-alt-circle-left:before {
    content: "\f359";
}

.fa-arrow-alt-circle-right:before {
    content: "\f35a";
}

.fa-arrow-alt-circle-up:before {
    content: "\f35b";
}

.fa-arrow-circle-down:before {
    content: "\f0ab";
}

.fa-arrow-circle-left:before {
    content: "\f0a8";
}

.fa-arrow-circle-right:before {
    content: "\f0a9";
}

.fa-arrow-circle-up:before {
    content: "\f0aa";
}

.fa-arrow-down:before {
    content: "\f063";
}

.fa-arrow-left:before {
    content: "\f060";
}

.fa-arrow-right:before {
    content: "\f061";
}

.fa-arrow-up:before {
    content: "\f062";
}

.fa-arrows-alt:before {
    content: "\f0b2";
}

.fa-arrows-alt-h:before {
    content: "\f337";
}

.fa-arrows-alt-v:before {
    content: "\f338";
}

.fa-artstation:before {
    content: "\f77a";
}

.fa-assistive-listening-systems:before {
    content: "\f2a2";
}

.fa-asterisk:before {
    content: "\f069";
}

.fa-asymmetrik:before {
    content: "\f372";
}

.fa-at:before {
    content: "\f1fa";
}

.fa-atlas:before {
    content: "\f558";
}

.fa-atlassian:before {
    content: "\f77b";
}

.fa-atom:before {
    content: "\f5d2";
}

.fa-audible:before {
    content: "\f373";
}

.fa-audio-description:before {
    content: "\f29e";
}

.fa-autoprefixer:before {
    content: "\f41c";
}

.fa-avianex:before {
    content: "\f374";
}

.fa-aviato:before {
    content: "\f421";
}

.fa-award:before {
    content: "\f559";
}

.fa-aws:before {
    content: "\f375";
}

.fa-baby:before {
    content: "\f77c";
}

.fa-baby-carriage:before {
    content: "\f77d";
}

.fa-backspace:before {
    content: "\f55a";
}

.fa-backward:before {
    content: "\f04a";
}

.fa-bacon:before {
    content: "\f7e5";
}

.fa-balance-scale:before {
    content: "\f24e";
}

.fa-balance-scale-left:before {
    content: "\f515";
}

.fa-balance-scale-right:before {
    content: "\f516";
}

.fa-ban:before {
    content: "\f05e";
}

.fa-band-aid:before {
    content: "\f462";
}

.fa-bandcamp:before {
    content: "\f2d5";
}

.fa-barcode:before {
    content: "\f02a";
}

.fa-bars:before {
    content: "\f0c9";
}

.fa-baseball-ball:before {
    content: "\f433";
}

.fa-basketball-ball:before {
    content: "\f434";
}

.fa-bath:before {
    content: "\f2cd";
}

.fa-battery-empty:before {
    content: "\f244";
}

.fa-battery-full:before {
    content: "\f240";
}

.fa-battery-half:before {
    content: "\f242";
}

.fa-battery-quarter:before {
    content: "\f243";
}

.fa-battery-three-quarters:before {
    content: "\f241";
}

.fa-battle-net:before {
    content: "\f835";
}

.fa-bed:before {
    content: "\f236";
}

.fa-beer:before {
    content: "\f0fc";
}

.fa-behance:before {
    content: "\f1b4";
}

.fa-behance-square:before {
    content: "\f1b5";
}

.fa-bell:before {
    content: "\f0f3";
}

.fa-bell-slash:before {
    content: "\f1f6";
}

.fa-bezier-curve:before {
    content: "\f55b";
}

.fa-bible:before {
    content: "\f647";
}

.fa-bicycle:before {
    content: "\f206";
}

.fa-biking:before {
    content: "\f84a";
}

.fa-bimobject:before {
    content: "\f378";
}

.fa-binoculars:before {
    content: "\f1e5";
}

.fa-biohazard:before {
    content: "\f780";
}

.fa-birthday-cake:before {
    content: "\f1fd";
}

.fa-bitbucket:before {
    content: "\f171";
}

.fa-bitcoin:before {
    content: "\f379";
}

.fa-bity:before {
    content: "\f37a";
}

.fa-black-tie:before {
    content: "\f27e";
}

.fa-blackberry:before {
    content: "\f37b";
}

.fa-blender:before {
    content: "\f517";
}

.fa-blender-phone:before {
    content: "\f6b6";
}

.fa-blind:before {
    content: "\f29d";
}

.fa-blog:before {
    content: "\f781";
}

.fa-blogger:before {
    content: "\f37c";
}

.fa-blogger-b:before {
    content: "\f37d";
}

.fa-bluetooth:before {
    content: "\f293";
}

.fa-bluetooth-b:before {
    content: "\f294";
}

.fa-bold:before {
    content: "\f032";
}

.fa-bolt:before {
    content: "\f0e7";
}

.fa-bomb:before {
    content: "\f1e2";
}

.fa-bone:before {
    content: "\f5d7";
}

.fa-bong:before {
    content: "\f55c";
}

.fa-book:before {
    content: "\f02d";
}

.fa-book-dead:before {
    content: "\f6b7";
}

.fa-book-medical:before {
    content: "\f7e6";
}

.fa-book-open:before {
    content: "\f518";
}

.fa-book-reader:before {
    content: "\f5da";
}

.fa-bookmark:before {
    content: "\f02e";
}

.fa-bootstrap:before {
    content: "\f836";
}

.fa-border-all:before {
    content: "\f84c";
}

.fa-border-none:before {
    content: "\f850";
}

.fa-border-style:before {
    content: "\f853";
}

.fa-bowling-ball:before {
    content: "\f436";
}

.fa-box:before {
    content: "\f466";
}

.fa-box-open:before {
    content: "\f49e";
}

.fa-boxes:before {
    content: "\f468";
}

.fa-braille:before {
    content: "\f2a1";
}

.fa-brain:before {
    content: "\f5dc";
}

.fa-bread-slice:before {
    content: "\f7ec";
}

.fa-briefcase:before {
    content: "\f0b1";
}

.fa-briefcase-medical:before {
    content: "\f469";
}

.fa-broadcast-tower:before {
    content: "\f519";
}

.fa-broom:before {
    content: "\f51a";
}

.fa-brush:before {
    content: "\f55d";
}

.fa-btc:before {
    content: "\f15a";
}

.fa-buffer:before {
    content: "\f837";
}

.fa-bug:before {
    content: "\f188";
}

.fa-building:before {
    content: "\f1ad";
}

.fa-bullhorn:before {
    content: "\f0a1";
}

.fa-bullseye:before {
    content: "\f140";
}

.fa-burn:before {
    content: "\f46a";
}

.fa-buromobelexperte:before {
    content: "\f37f";
}

.fa-bus:before {
    content: "\f207";
}

.fa-bus-alt:before {
    content: "\f55e";
}

.fa-business-time:before {
    content: "\f64a";
}

.fa-buysellads:before {
    content: "\f20d";
}

.fa-calculator:before {
    content: "\f1ec";
}

.fa-calendar:before {
    content: "\f133";
}

.fa-calendar-alt:before {
    content: "\f073";
}

.fa-calendar-check:before {
    content: "\f274";
}

.fa-calendar-day:before {
    content: "\f783";
}

.fa-calendar-minus:before {
    content: "\f272";
}

.fa-calendar-plus:before {
    content: "\f271";
}

.fa-calendar-times:before {
    content: "\f273";
}

.fa-calendar-week:before {
    content: "\f784";
}

.fa-camera:before {
    content: "\f030";
}

.fa-camera-retro:before {
    content: "\f083";
}

.fa-campground:before {
    content: "\f6bb";
}

.fa-canadian-maple-leaf:before {
    content: "\f785";
}

.fa-candy-cane:before {
    content: "\f786";
}

.fa-cannabis:before {
    content: "\f55f";
}

.fa-capsules:before {
    content: "\f46b";
}

.fa-car:before {
    content: "\f1b9";
}

.fa-car-alt:before {
    content: "\f5de";
}

.fa-car-battery:before {
    content: "\f5df";
}

.fa-car-crash:before {
    content: "\f5e1";
}

.fa-car-side:before {
    content: "\f5e4";
}

.fa-caret-down:before {
    content: "\f0d7";
}

.fa-caret-left:before {
    content: "\f0d9";
}

.fa-caret-right:before {
    content: "\f0da";
}

.fa-caret-square-down:before {
    content: "\f150";
}

.fa-caret-square-left:before {
    content: "\f191";
}

.fa-caret-square-right:before {
    content: "\f152";
}

.fa-caret-square-up:before {
    content: "\f151";
}

.fa-caret-up:before {
    content: "\f0d8";
}

.fa-carrot:before {
    content: "\f787";
}

.fa-cart-arrow-down:before {
    content: "\f218";
}

.fa-cart-plus:before {
    content: "\f217";
}

.fa-cash-register:before {
    content: "\f788";
}

.fa-cat:before {
    content: "\f6be";
}

.fa-cc-amazon-pay:before {
    content: "\f42d";
}

.fa-cc-amex:before {
    content: "\f1f3";
}

.fa-cc-apple-pay:before {
    content: "\f416";
}

.fa-cc-diners-club:before {
    content: "\f24c";
}

.fa-cc-discover:before {
    content: "\f1f2";
}

.fa-cc-jcb:before {
    content: "\f24b";
}

.fa-cc-mastercard:before {
    content: "\f1f1";
}

.fa-cc-paypal:before {
    content: "\f1f4";
}

.fa-cc-stripe:before {
    content: "\f1f5";
}

.fa-cc-visa:before {
    content: "\f1f0";
}

.fa-centercode:before {
    content: "\f380";
}

.fa-centos:before {
    content: "\f789";
}

.fa-certificate:before {
    content: "\f0a3";
}

.fa-chair:before {
    content: "\f6c0";
}

.fa-chalkboard:before {
    content: "\f51b";
}

.fa-chalkboard-teacher:before {
    content: "\f51c";
}

.fa-charging-station:before {
    content: "\f5e7";
}

.fa-chart-area:before {
    content: "\f1fe";
}

.fa-chart-bar:before {
    content: "\f080";
}

.fa-chart-line:before {
    content: "\f201";
}

.fa-chart-pie:before {
    content: "\f200";
}

.fa-check:before {
    content: "\f00c";
}

.fa-check-circle:before {
    content: "\f058";
}

.fa-check-double:before {
    content: "\f560";
}

.fa-check-square:before {
    content: "\f14a";
}

.fa-cheese:before {
    content: "\f7ef";
}

.fa-chess:before {
    content: "\f439";
}

.fa-chess-bishop:before {
    content: "\f43a";
}

.fa-chess-board:before {
    content: "\f43c";
}

.fa-chess-king:before {
    content: "\f43f";
}

.fa-chess-knight:before {
    content: "\f441";
}

.fa-chess-pawn:before {
    content: "\f443";
}

.fa-chess-queen:before {
    content: "\f445";
}

.fa-chess-rook:before {
    content: "\f447";
}

.fa-chevron-circle-down:before {
    content: "\f13a";
}

.fa-chevron-circle-left:before {
    content: "\f137";
}

.fa-chevron-circle-right:before {
    content: "\f138";
}

.fa-chevron-circle-up:before {
    content: "\f139";
}

.fa-chevron-down:before {
    content: "\f078";
}

.fa-chevron-left:before {
    content: "\f053";
}

.fa-chevron-right:before {
    content: "\f054";
}

.fa-chevron-up:before {
    content: "\f077";
}

.fa-child:before {
    content: "\f1ae";
}

.fa-chrome:before {
    content: "\f268";
}

.fa-chromecast:before {
    content: "\f838";
}

.fa-church:before {
    content: "\f51d";
}

.fa-circle:before {
    content: "\f111";
}

.fa-circle-notch:before {
    content: "\f1ce";
}

.fa-city:before {
    content: "\f64f";
}

.fa-clinic-medical:before {
    content: "\f7f2";
}

.fa-clipboard:before {
    content: "\f328";
}

.fa-clipboard-check:before {
    content: "\f46c";
}

.fa-clipboard-list:before {
    content: "\f46d";
}

.fa-clock:before {
    content: "\f017";
}

.fa-clone:before {
    content: "\f24d";
}

.fa-closed-captioning:before {
    content: "\f20a";
}

.fa-cloud:before {
    content: "\f0c2";
}

.fa-cloud-download-alt:before {
    content: "\f381";
}

.fa-cloud-meatball:before {
    content: "\f73b";
}

.fa-cloud-moon:before {
    content: "\f6c3";
}

.fa-cloud-moon-rain:before {
    content: "\f73c";
}

.fa-cloud-rain:before {
    content: "\f73d";
}

.fa-cloud-showers-heavy:before {
    content: "\f740";
}

.fa-cloud-sun:before {
    content: "\f6c4";
}

.fa-cloud-sun-rain:before {
    content: "\f743";
}

.fa-cloud-upload-alt:before {
    content: "\f382";
}

.fa-cloudscale:before {
    content: "\f383";
}

.fa-cloudsmith:before {
    content: "\f384";
}

.fa-cloudversify:before {
    content: "\f385";
}

.fa-cocktail:before {
    content: "\f561";
}

.fa-code:before {
    content: "\f121";
}

.fa-code-branch:before {
    content: "\f126";
}

.fa-codepen:before {
    content: "\f1cb";
}

.fa-codiepie:before {
    content: "\f284";
}

.fa-coffee:before {
    content: "\f0f4";
}

.fa-cog:before {
    content: "\f013";
}

.fa-cogs:before {
    content: "\f085";
}

.fa-coins:before {
    content: "\f51e";
}

.fa-columns:before {
    content: "\f0db";
}

.fa-comment:before {
    content: "\f075";
}

.fa-comment-alt:before {
    content: "\f27a";
}

.fa-comment-dollar:before {
    content: "\f651";
}

.fa-comment-dots:before {
    content: "\f4ad";
}

.fa-comment-medical:before {
    content: "\f7f5";
}

.fa-comment-slash:before {
    content: "\f4b3";
}

.fa-comments:before {
    content: "\f086";
}

.fa-comments-dollar:before {
    content: "\f653";
}

.fa-compact-disc:before {
    content: "\f51f";
}

.fa-compass:before {
    content: "\f14e";
}

.fa-compress:before {
    content: "\f066";
}

.fa-compress-arrows-alt:before {
    content: "\f78c";
}

.fa-concierge-bell:before {
    content: "\f562";
}

.fa-confluence:before {
    content: "\f78d";
}

.fa-connectdevelop:before {
    content: "\f20e";
}

.fa-contao:before {
    content: "\f26d";
}

.fa-cookie:before {
    content: "\f563";
}

.fa-cookie-bite:before {
    content: "\f564";
}

.fa-copy:before {
    content: "\f0c5";
}

.fa-copyright:before {
    content: "\f1f9";
}

.fa-couch:before {
    content: "\f4b8";
}

.fa-cpanel:before {
    content: "\f388";
}

.fa-creative-commons:before {
    content: "\f25e";
}

.fa-creative-commons-by:before {
    content: "\f4e7";
}

.fa-creative-commons-nc:before {
    content: "\f4e8";
}

.fa-creative-commons-nc-eu:before {
    content: "\f4e9";
}

.fa-creative-commons-nc-jp:before {
    content: "\f4ea";
}

.fa-creative-commons-nd:before {
    content: "\f4eb";
}

.fa-creative-commons-pd:before {
    content: "\f4ec";
}

.fa-creative-commons-pd-alt:before {
    content: "\f4ed";
}

.fa-creative-commons-remix:before {
    content: "\f4ee";
}

.fa-creative-commons-sa:before {
    content: "\f4ef";
}

.fa-creative-commons-sampling:before {
    content: "\f4f0";
}

.fa-creative-commons-sampling-plus:before {
    content: "\f4f1";
}

.fa-creative-commons-share:before {
    content: "\f4f2";
}

.fa-creative-commons-zero:before {
    content: "\f4f3";
}

.fa-credit-card:before {
    content: "\f09d";
}

.fa-critical-role:before {
    content: "\f6c9";
}

.fa-crop:before {
    content: "\f125";
}

.fa-crop-alt:before {
    content: "\f565";
}

.fa-cross:before {
    content: "\f654";
}

.fa-crosshairs:before {
    content: "\f05b";
}

.fa-crow:before {
    content: "\f520";
}

.fa-crown:before {
    content: "\f521";
}

.fa-crutch:before {
    content: "\f7f7";
}

.fa-css3:before {
    content: "\f13c";
}

.fa-css3-alt:before {
    content: "\f38b";
}

.fa-cube:before {
    content: "\f1b2";
}

.fa-cubes:before {
    content: "\f1b3";
}

.fa-cut:before {
    content: "\f0c4";
}

.fa-cuttlefish:before {
    content: "\f38c";
}

.fa-d-and-d:before {
    content: "\f38d";
}

.fa-d-and-d-beyond:before {
    content: "\f6ca";
}

.fa-dashcube:before {
    content: "\f210";
}

.fa-database:before {
    content: "\f1c0";
}

.fa-deaf:before {
    content: "\f2a4";
}

.fa-delicious:before {
    content: "\f1a5";
}

.fa-democrat:before {
    content: "\f747";
}

.fa-deploydog:before {
    content: "\f38e";
}

.fa-deskpro:before {
    content: "\f38f";
}

.fa-desktop:before {
    content: "\f108";
}

.fa-dev:before {
    content: "\f6cc";
}

.fa-deviantart:before {
    content: "\f1bd";
}

.fa-dharmachakra:before {
    content: "\f655";
}

.fa-dhl:before {
    content: "\f790";
}

.fa-diagnoses:before {
    content: "\f470";
}

.fa-diaspora:before {
    content: "\f791";
}

.fa-dice:before {
    content: "\f522";
}

.fa-dice-d20:before {
    content: "\f6cf";
}

.fa-dice-d6:before {
    content: "\f6d1";
}

.fa-dice-five:before {
    content: "\f523";
}

.fa-dice-four:before {
    content: "\f524";
}

.fa-dice-one:before {
    content: "\f525";
}

.fa-dice-six:before {
    content: "\f526";
}

.fa-dice-three:before {
    content: "\f527";
}

.fa-dice-two:before {
    content: "\f528";
}

.fa-digg:before {
    content: "\f1a6";
}

.fa-digital-ocean:before {
    content: "\f391";
}

.fa-digital-tachograph:before {
    content: "\f566";
}

.fa-directions:before {
    content: "\f5eb";
}

.fa-discord:before {
    content: "\f392";
}

.fa-discourse:before {
    content: "\f393";
}

.fa-divide:before {
    content: "\f529";
}

.fa-dizzy:before {
    content: "\f567";
}

.fa-dna:before {
    content: "\f471";
}

.fa-dochub:before {
    content: "\f394";
}

.fa-docker:before {
    content: "\f395";
}

.fa-dog:before {
    content: "\f6d3";
}

.fa-dollar-sign:before {
    content: "\f155";
}

.fa-dolly:before {
    content: "\f472";
}

.fa-dolly-flatbed:before {
    content: "\f474";
}

.fa-donate:before {
    content: "\f4b9";
}

.fa-door-closed:before {
    content: "\f52a";
}

.fa-door-open:before {
    content: "\f52b";
}

.fa-dot-circle:before {
    content: "\f192";
}

.fa-dove:before {
    content: "\f4ba";
}

.fa-download:before {
    content: "\f019";
}

.fa-draft2digital:before {
    content: "\f396";
}

.fa-drafting-compass:before {
    content: "\f568";
}

.fa-dragon:before {
    content: "\f6d5";
}

.fa-draw-polygon:before {
    content: "\f5ee";
}

.fa-dribbble:before {
    content: "\f17d";
}

.fa-dribbble-square:before {
    content: "\f397";
}

.fa-dropbox:before {
    content: "\f16b";
}

.fa-drum:before {
    content: "\f569";
}

.fa-drum-steelpan:before {
    content: "\f56a";
}

.fa-drumstick-bite:before {
    content: "\f6d7";
}

.fa-drupal:before {
    content: "\f1a9";
}

.fa-dumbbell:before {
    content: "\f44b";
}

.fa-dumpster:before {
    content: "\f793";
}

.fa-dumpster-fire:before {
    content: "\f794";
}

.fa-dungeon:before {
    content: "\f6d9";
}

.fa-dyalog:before {
    content: "\f399";
}

.fa-earlybirds:before {
    content: "\f39a";
}

.fa-ebay:before {
    content: "\f4f4";
}

.fa-edge:before {
    content: "\f282";
}

.fa-edit:before {
    content: "\f044";
}

.fa-egg:before {
    content: "\f7fb";
}

.fa-eject:before {
    content: "\f052";
}

.fa-elementor:before {
    content: "\f430";
}

.fa-ellipsis-h:before {
    content: "\f141";
}

.fa-ellipsis-v:before {
    content: "\f142";
}

.fa-ello:before {
    content: "\f5f1";
}

.fa-ember:before {
    content: "\f423";
}

.fa-empire:before {
    content: "\f1d1";
}

.fa-envelope:before {
    content: "\f0e0";
}

.fa-envelope-open:before {
    content: "\f2b6";
}

.fa-envelope-open-text:before {
    content: "\f658";
}

.fa-envelope-square:before {
    content: "\f199";
}

.fa-envira:before {
    content: "\f299";
}

.fa-equals:before {
    content: "\f52c";
}

.fa-eraser:before {
    content: "\f12d";
}

.fa-erlang:before {
    content: "\f39d";
}

.fa-ethereum:before {
    content: "\f42e";
}

.fa-ethernet:before {
    content: "\f796";
}

.fa-etsy:before {
    content: "\f2d7";
}

.fa-euro-sign:before {
    content: "\f153";
}

.fa-evernote:before {
    content: "\f839";
}

.fa-exchange-alt:before {
    content: "\f362";
}

.fa-exclamation:before {
    content: "\f12a";
}

.fa-exclamation-circle:before {
    content: "\f06a";
}

.fa-exclamation-triangle:before {
    content: "\f071";
}

.fa-expand:before {
    content: "\f065";
}

.fa-expand-arrows-alt:before {
    content: "\f31e";
}

.fa-expeditedssl:before {
    content: "\f23e";
}

.fa-external-link-alt:before {
    content: "\f35d";
}

.fa-external-link-square-alt:before {
    content: "\f360";
}

.fa-eye:before {
    content: "\f06e";
}

.fa-eye-dropper:before {
    content: "\f1fb";
}

.fa-eye-slash:before {
    content: "\f070";
}

.fa-facebook:before {
    content: "\f09a";
}

.fa-facebook-f:before {
    content: "\f39e";
}

.fa-facebook-messenger:before {
    content: "\f39f";
}

.fa-facebook-square:before {
    content: "\f082";
}

.fa-fan:before {
    content: "\f863";
}

.fa-fantasy-flight-games:before {
    content: "\f6dc";
}

.fa-fast-backward:before {
    content: "\f049";
}

.fa-fast-forward:before {
    content: "\f050";
}

.fa-fax:before {
    content: "\f1ac";
}

.fa-feather:before {
    content: "\f52d";
}

.fa-feather-alt:before {
    content: "\f56b";
}

.fa-fedex:before {
    content: "\f797";
}

.fa-fedora:before {
    content: "\f798";
}

.fa-female:before {
    content: "\f182";
}

.fa-fighter-jet:before {
    content: "\f0fb";
}

.fa-figma:before {
    content: "\f799";
}

.fa-file:before {
    content: "\f15b";
}

.fa-file-alt:before {
    content: "\f15c";
}

.fa-file-archive:before {
    content: "\f1c6";
}

.fa-file-audio:before {
    content: "\f1c7";
}

.fa-file-code:before {
    content: "\f1c9";
}

.fa-file-contract:before {
    content: "\f56c";
}

.fa-file-csv:before {
    content: "\f6dd";
}

.fa-file-download:before {
    content: "\f56d";
}

.fa-file-excel:before {
    content: "\f1c3";
}

.fa-file-export:before {
    content: "\f56e";
}

.fa-file-image:before {
    content: "\f1c5";
}

.fa-file-import:before {
    content: "\f56f";
}

.fa-file-invoice:before {
    content: "\f570";
}

.fa-file-invoice-dollar:before {
    content: "\f571";
}

.fa-file-medical:before {
    content: "\f477";
}

.fa-file-medical-alt:before {
    content: "\f478";
}

.fa-file-pdf:before {
    content: "\f1c1";
}

.fa-file-powerpoint:before {
    content: "\f1c4";
}

.fa-file-prescription:before {
    content: "\f572";
}

.fa-file-signature:before {
    content: "\f573";
}

.fa-file-upload:before {
    content: "\f574";
}

.fa-file-video:before {
    content: "\f1c8";
}

.fa-file-word:before {
    content: "\f1c2";
}

.fa-fill:before {
    content: "\f575";
}

.fa-fill-drip:before {
    content: "\f576";
}

.fa-film:before {
    content: "\f008";
}

.fa-filter:before {
    content: "\f0b0";
}

.fa-fingerprint:before {
    content: "\f577";
}

.fa-fire:before {
    content: "\f06d";
}

.fa-fire-alt:before {
    content: "\f7e4";
}

.fa-fire-extinguisher:before {
    content: "\f134";
}

.fa-firefox:before {
    content: "\f269";
}

.fa-first-aid:before {
    content: "\f479";
}

.fa-first-order:before {
    content: "\f2b0";
}

.fa-first-order-alt:before {
    content: "\f50a";
}

.fa-firstdraft:before {
    content: "\f3a1";
}

.fa-fish:before {
    content: "\f578";
}

.fa-fist-raised:before {
    content: "\f6de";
}

.fa-flag:before {
    content: "\f024";
}

.fa-flag-checkered:before {
    content: "\f11e";
}

.fa-flag-usa:before {
    content: "\f74d";
}

.fa-flask:before {
    content: "\f0c3";
}

.fa-flickr:before {
    content: "\f16e";
}

.fa-flipboard:before {
    content: "\f44d";
}

.fa-flushed:before {
    content: "\f579";
}

.fa-fly:before {
    content: "\f417";
}

.fa-folder:before {
    content: "\f07b";
}

.fa-folder-minus:before {
    content: "\f65d";
}

.fa-folder-open:before {
    content: "\f07c";
}

.fa-folder-plus:before {
    content: "\f65e";
}

.fa-font:before {
    content: "\f031";
}

.fa-font-awesome:before {
    content: "\f2b4";
}

.fa-font-awesome-alt:before {
    content: "\f35c";
}

.fa-font-awesome-flag:before {
    content: "\f425";
}

.fa-font-awesome-logo-full:before {
    content: "\f4e6";
}

.fa-fonticons:before {
    content: "\f280";
}

.fa-fonticons-fi:before {
    content: "\f3a2";
}

.fa-football-ball:before {
    content: "\f44e";
}

.fa-fort-awesome:before {
    content: "\f286";
}

.fa-fort-awesome-alt:before {
    content: "\f3a3";
}

.fa-forumbee:before {
    content: "\f211";
}

.fa-forward:before {
    content: "\f04e";
}

.fa-foursquare:before {
    content: "\f180";
}

.fa-free-code-camp:before {
    content: "\f2c5";
}

.fa-freebsd:before {
    content: "\f3a4";
}

.fa-frog:before {
    content: "\f52e";
}

.fa-frown:before {
    content: "\f119";
}

.fa-frown-open:before {
    content: "\f57a";
}

.fa-fulcrum:before {
    content: "\f50b";
}

.fa-funnel-dollar:before {
    content: "\f662";
}

.fa-futbol:before {
    content: "\f1e3";
}

.fa-galactic-republic:before {
    content: "\f50c";
}

.fa-galactic-senate:before {
    content: "\f50d";
}

.fa-gamepad:before {
    content: "\f11b";
}

.fa-gas-pump:before {
    content: "\f52f";
}

.fa-gavel:before {
    content: "\f0e3";
}

.fa-gem:before {
    content: "\f3a5";
}

.fa-genderless:before {
    content: "\f22d";
}

.fa-get-pocket:before {
    content: "\f265";
}

.fa-gg:before {
    content: "\f260";
}

.fa-gg-circle:before {
    content: "\f261";
}

.fa-ghost:before {
    content: "\f6e2";
}

.fa-gift:before {
    content: "\f06b";
}

.fa-gifts:before {
    content: "\f79c";
}

.fa-git:before {
    content: "\f1d3";
}

.fa-git-alt:before {
    content: "\f841";
}

.fa-git-square:before {
    content: "\f1d2";
}

.fa-github:before {
    content: "\f09b";
}

.fa-github-alt:before {
    content: "\f113";
}

.fa-github-square:before {
    content: "\f092";
}

.fa-gitkraken:before {
    content: "\f3a6";
}

.fa-gitlab:before {
    content: "\f296";
}

.fa-gitter:before {
    content: "\f426";
}

.fa-glass-cheers:before {
    content: "\f79f";
}

.fa-glass-martini:before {
    content: "\f000";
}

.fa-glass-martini-alt:before {
    content: "\f57b";
}

.fa-glass-whiskey:before {
    content: "\f7a0";
}

.fa-glasses:before {
    content: "\f530";
}

.fa-glide:before {
    content: "\f2a5";
}

.fa-glide-g:before {
    content: "\f2a6";
}

.fa-globe:before {
    content: "\f0ac";
}

.fa-globe-africa:before {
    content: "\f57c";
}

.fa-globe-americas:before {
    content: "\f57d";
}

.fa-globe-asia:before {
    content: "\f57e";
}

.fa-globe-europe:before {
    content: "\f7a2";
}

.fa-gofore:before {
    content: "\f3a7";
}

.fa-golf-ball:before {
    content: "\f450";
}

.fa-goodreads:before {
    content: "\f3a8";
}

.fa-goodreads-g:before {
    content: "\f3a9";
}

.fa-google:before {
    content: "\f1a0";
}

.fa-google-drive:before {
    content: "\f3aa";
}

.fa-google-play:before {
    content: "\f3ab";
}

.fa-google-plus:before {
    content: "\f2b3";
}

.fa-google-plus-g:before {
    content: "\f0d5";
}

.fa-google-plus-square:before {
    content: "\f0d4";
}

.fa-google-wallet:before {
    content: "\f1ee";
}

.fa-gopuram:before {
    content: "\f664";
}

.fa-graduation-cap:before {
    content: "\f19d";
}

.fa-gratipay:before {
    content: "\f184";
}

.fa-grav:before {
    content: "\f2d6";
}

.fa-greater-than:before {
    content: "\f531";
}

.fa-greater-than-equal:before {
    content: "\f532";
}

.fa-grimace:before {
    content: "\f57f";
}

.fa-grin:before {
    content: "\f580";
}

.fa-grin-alt:before {
    content: "\f581";
}

.fa-grin-beam:before {
    content: "\f582";
}

.fa-grin-beam-sweat:before {
    content: "\f583";
}

.fa-grin-hearts:before {
    content: "\f584";
}

.fa-grin-squint:before {
    content: "\f585";
}

.fa-grin-squint-tears:before {
    content: "\f586";
}

.fa-grin-stars:before {
    content: "\f587";
}

.fa-grin-tears:before {
    content: "\f588";
}

.fa-grin-tongue:before {
    content: "\f589";
}

.fa-grin-tongue-squint:before {
    content: "\f58a";
}

.fa-grin-tongue-wink:before {
    content: "\f58b";
}

.fa-grin-wink:before {
    content: "\f58c";
}

.fa-grip-horizontal:before {
    content: "\f58d";
}

.fa-grip-lines:before {
    content: "\f7a4";
}

.fa-grip-lines-vertical:before {
    content: "\f7a5";
}

.fa-grip-vertical:before {
    content: "\f58e";
}

.fa-gripfire:before {
    content: "\f3ac";
}

.fa-grunt:before {
    content: "\f3ad";
}

.fa-guitar:before {
    content: "\f7a6";
}

.fa-gulp:before {
    content: "\f3ae";
}

.fa-h-square:before {
    content: "\f0fd";
}

.fa-hacker-news:before {
    content: "\f1d4";
}

.fa-hacker-news-square:before {
    content: "\f3af";
}

.fa-hackerrank:before {
    content: "\f5f7";
}

.fa-hamburger:before {
    content: "\f805";
}

.fa-hammer:before {
    content: "\f6e3";
}

.fa-hamsa:before {
    content: "\f665";
}

.fa-hand-holding:before {
    content: "\f4bd";
}

.fa-hand-holding-heart:before {
    content: "\f4be";
}

.fa-hand-holding-usd:before {
    content: "\f4c0";
}

.fa-hand-lizard:before {
    content: "\f258";
}

.fa-hand-middle-finger:before {
    content: "\f806";
}

.fa-hand-paper:before {
    content: "\f256";
}

.fa-hand-peace:before {
    content: "\f25b";
}

.fa-hand-point-down:before {
    content: "\f0a7";
}

.fa-hand-point-left:before {
    content: "\f0a5";
}

.fa-hand-point-right:before {
    content: "\f0a4";
}

.fa-hand-point-up:before {
    content: "\f0a6";
}

.fa-hand-pointer:before {
    content: "\f25a";
}

.fa-hand-rock:before {
    content: "\f255";
}

.fa-hand-scissors:before {
    content: "\f257";
}

.fa-hand-spock:before {
    content: "\f259";
}

.fa-hands:before {
    content: "\f4c2";
}

.fa-hands-helping:before {
    content: "\f4c4";
}

.fa-handshake:before {
    content: "\f2b5";
}

.fa-hanukiah:before {
    content: "\f6e6";
}

.fa-hard-hat:before {
    content: "\f807";
}

.fa-hashtag:before {
    content: "\f292";
}

.fa-hat-wizard:before {
    content: "\f6e8";
}

.fa-haykal:before {
    content: "\f666";
}

.fa-hdd:before {
    content: "\f0a0";
}

.fa-heading:before {
    content: "\f1dc";
}

.fa-headphones:before {
    content: "\f025";
}

.fa-headphones-alt:before {
    content: "\f58f";
}

.fa-headset:before {
    content: "\f590";
}

.fa-heart:before {
    content: "\f004";
}

.fa-heart-broken:before {
    content: "\f7a9";
}

.fa-heartbeat:before {
    content: "\f21e";
}

.fa-helicopter:before {
    content: "\f533";
}

.fa-highlighter:before {
    content: "\f591";
}

.fa-hiking:before {
    content: "\f6ec";
}

.fa-hippo:before {
    content: "\f6ed";
}

.fa-hips:before {
    content: "\f452";
}

.fa-hire-a-helper:before {
    content: "\f3b0";
}

.fa-history:before {
    content: "\f1da";
}

.fa-hockey-puck:before {
    content: "\f453";
}

.fa-holly-berry:before {
    content: "\f7aa";
}

.fa-home:before {
    content: "\f015";
}

.fa-hooli:before {
    content: "\f427";
}

.fa-hornbill:before {
    content: "\f592";
}

.fa-horse:before {
    content: "\f6f0";
}

.fa-horse-head:before {
    content: "\f7ab";
}

.fa-hospital:before {
    content: "\f0f8";
}

.fa-hospital-alt:before {
    content: "\f47d";
}

.fa-hospital-symbol:before {
    content: "\f47e";
}

.fa-hot-tub:before {
    content: "\f593";
}

.fa-hotdog:before {
    content: "\f80f";
}

.fa-hotel:before {
    content: "\f594";
}

.fa-hotjar:before {
    content: "\f3b1";
}

.fa-hourglass:before {
    content: "\f254";
}

.fa-hourglass-end:before {
    content: "\f253";
}

.fa-hourglass-half:before {
    content: "\f252";
}

.fa-hourglass-start:before {
    content: "\f251";
}

.fa-house-damage:before {
    content: "\f6f1";
}

.fa-houzz:before {
    content: "\f27c";
}

.fa-hryvnia:before {
    content: "\f6f2";
}

.fa-html5:before {
    content: "\f13b";
}

.fa-hubspot:before {
    content: "\f3b2";
}

.fa-i-cursor:before {
    content: "\f246";
}

.fa-ice-cream:before {
    content: "\f810";
}

.fa-icicles:before {
    content: "\f7ad";
}

.fa-icons:before {
    content: "\f86d";
}

.fa-id-badge:before {
    content: "\f2c1";
}

.fa-id-card:before {
    content: "\f2c2";
}

.fa-id-card-alt:before {
    content: "\f47f";
}

.fa-igloo:before {
    content: "\f7ae";
}

.fa-image:before {
    content: "\f03e";
}

.fa-images:before {
    content: "\f302";
}

.fa-imdb:before {
    content: "\f2d8";
}

.fa-inbox:before {
    content: "\f01c";
}

.fa-indent:before {
    content: "\f03c";
}

.fa-industry:before {
    content: "\f275";
}

.fa-infinity:before {
    content: "\f534";
}

.fa-info:before {
    content: "\f129";
}

.fa-info-circle:before {
    content: "\f05a";
}

.fa-instagram:before {
    content: "\f16d";
}

.fa-intercom:before {
    content: "\f7af";
}

.fa-internet-explorer:before {
    content: "\f26b";
}

.fa-invision:before {
    content: "\f7b0";
}

.fa-ioxhost:before {
    content: "\f208";
}

.fa-italic:before {
    content: "\f033";
}

.fa-itch-io:before {
    content: "\f83a";
}

.fa-itunes:before {
    content: "\f3b4";
}

.fa-itunes-note:before {
    content: "\f3b5";
}

.fa-java:before {
    content: "\f4e4";
}

.fa-jedi:before {
    content: "\f669";
}

.fa-jedi-order:before {
    content: "\f50e";
}

.fa-jenkins:before {
    content: "\f3b6";
}

.fa-jira:before {
    content: "\f7b1";
}

.fa-joget:before {
    content: "\f3b7";
}

.fa-joint:before {
    content: "\f595";
}

.fa-joomla:before {
    content: "\f1aa";
}

.fa-journal-whills:before {
    content: "\f66a";
}

.fa-js:before {
    content: "\f3b8";
}

.fa-js-square:before {
    content: "\f3b9";
}

.fa-jsfiddle:before {
    content: "\f1cc";
}

.fa-kaaba:before {
    content: "\f66b";
}

.fa-kaggle:before {
    content: "\f5fa";
}

.fa-key:before {
    content: "\f084";
}

.fa-keybase:before {
    content: "\f4f5";
}

.fa-keyboard:before {
    content: "\f11c";
}

.fa-keycdn:before {
    content: "\f3ba";
}

.fa-khanda:before {
    content: "\f66d";
}

.fa-kickstarter:before {
    content: "\f3bb";
}

.fa-kickstarter-k:before {
    content: "\f3bc";
}

.fa-kiss:before {
    content: "\f596";
}

.fa-kiss-beam:before {
    content: "\f597";
}

.fa-kiss-wink-heart:before {
    content: "\f598";
}

.fa-kiwi-bird:before {
    content: "\f535";
}

.fa-korvue:before {
    content: "\f42f";
}

.fa-landmark:before {
    content: "\f66f";
}

.fa-language:before {
    content: "\f1ab";
}

.fa-laptop:before {
    content: "\f109";
}

.fa-laptop-code:before {
    content: "\f5fc";
}

.fa-laptop-medical:before {
    content: "\f812";
}

.fa-laravel:before {
    content: "\f3bd";
}

.fa-lastfm:before {
    content: "\f202";
}

.fa-lastfm-square:before {
    content: "\f203";
}

.fa-laugh:before {
    content: "\f599";
}

.fa-laugh-beam:before {
    content: "\f59a";
}

.fa-laugh-squint:before {
    content: "\f59b";
}

.fa-laugh-wink:before {
    content: "\f59c";
}

.fa-layer-group:before {
    content: "\f5fd";
}

.fa-leaf:before {
    content: "\f06c";
}

.fa-leanpub:before {
    content: "\f212";
}

.fa-lemon:before {
    content: "\f094";
}

.fa-less:before {
    content: "\f41d";
}

.fa-less-than:before {
    content: "\f536";
}

.fa-less-than-equal:before {
    content: "\f537";
}

.fa-level-down-alt:before {
    content: "\f3be";
}

.fa-level-up-alt:before {
    content: "\f3bf";
}

.fa-life-ring:before {
    content: "\f1cd";
}

.fa-lightbulb:before {
    content: "\f0eb";
}

.fa-line:before {
    content: "\f3c0";
}

.fa-link:before {
    content: "\f0c1";
}

.fa-linkedin:before {
    content: "\f08c";
}

.fa-linkedin-in:before {
    content: "\f0e1";
}

.fa-linode:before {
    content: "\f2b8";
}

.fa-linux:before {
    content: "\f17c";
}

.fa-lira-sign:before {
    content: "\f195";
}

.fa-list:before {
    content: "\f03a";
}

.fa-list-alt:before {
    content: "\f022";
}

.fa-list-ol:before {
    content: "\f0cb";
}

.fa-list-ul:before {
    content: "\f0ca";
}

.fa-location-arrow:before {
    content: "\f124";
}

.fa-lock:before {
    content: "\f023";
}

.fa-lock-open:before {
    content: "\f3c1";
}

.fa-long-arrow-alt-down:before {
    content: "\f309";
}

.fa-long-arrow-alt-left:before {
    content: "\f30a";
}

.fa-long-arrow-alt-right:before {
    content: "\f30b";
}

.fa-long-arrow-alt-up:before {
    content: "\f30c";
}

.fa-low-vision:before {
    content: "\f2a8";
}

.fa-luggage-cart:before {
    content: "\f59d";
}

.fa-lyft:before {
    content: "\f3c3";
}

.fa-magento:before {
    content: "\f3c4";
}

.fa-magic:before {
    content: "\f0d0";
}

.fa-magnet:before {
    content: "\f076";
}

.fa-mail-bulk:before {
    content: "\f674";
}

.fa-mailchimp:before {
    content: "\f59e";
}

.fa-male:before {
    content: "\f183";
}

.fa-mandalorian:before {
    content: "\f50f";
}

.fa-map:before {
    content: "\f279";
}

.fa-map-marked:before {
    content: "\f59f";
}

.fa-map-marked-alt:before {
    content: "\f5a0";
}

.fa-map-marker:before {
    content: "\f041";
}

.fa-map-marker-alt:before {
    content: "\f3c5";
}

.fa-map-pin:before {
    content: "\f276";
}

.fa-map-signs:before {
    content: "\f277";
}

.fa-markdown:before {
    content: "\f60f";
}

.fa-marker:before {
    content: "\f5a1";
}

.fa-mars:before {
    content: "\f222";
}

.fa-mars-double:before {
    content: "\f227";
}

.fa-mars-stroke:before {
    content: "\f229";
}

.fa-mars-stroke-h:before {
    content: "\f22b";
}

.fa-mars-stroke-v:before {
    content: "\f22a";
}

.fa-mask:before {
    content: "\f6fa";
}

.fa-mastodon:before {
    content: "\f4f6";
}

.fa-maxcdn:before {
    content: "\f136";
}

.fa-medal:before {
    content: "\f5a2";
}

.fa-medapps:before {
    content: "\f3c6";
}

.fa-medium:before {
    content: "\f23a";
}

.fa-medium-m:before {
    content: "\f3c7";
}

.fa-medkit:before {
    content: "\f0fa";
}

.fa-medrt:before {
    content: "\f3c8";
}

.fa-meetup:before {
    content: "\f2e0";
}

.fa-megaport:before {
    content: "\f5a3";
}

.fa-meh:before {
    content: "\f11a";
}

.fa-meh-blank:before {
    content: "\f5a4";
}

.fa-meh-rolling-eyes:before {
    content: "\f5a5";
}

.fa-memory:before {
    content: "\f538";
}

.fa-mendeley:before {
    content: "\f7b3";
}

.fa-menorah:before {
    content: "\f676";
}

.fa-mercury:before {
    content: "\f223";
}

.fa-meteor:before {
    content: "\f753";
}

.fa-microchip:before {
    content: "\f2db";
}

.fa-microphone:before {
    content: "\f130";
}

.fa-microphone-alt:before {
    content: "\f3c9";
}

.fa-microphone-alt-slash:before {
    content: "\f539";
}

.fa-microphone-slash:before {
    content: "\f131";
}

.fa-microscope:before {
    content: "\f610";
}

.fa-microsoft:before {
    content: "\f3ca";
}

.fa-minus:before {
    content: "\f068";
}

.fa-minus-circle:before {
    content: "\f056";
}

.fa-minus-square:before {
    content: "\f146";
}

.fa-mitten:before {
    content: "\f7b5";
}

.fa-mix:before {
    content: "\f3cb";
}

.fa-mixcloud:before {
    content: "\f289";
}

.fa-mizuni:before {
    content: "\f3cc";
}

.fa-mobile:before {
    content: "\f10b";
}

.fa-mobile-alt:before {
    content: "\f3cd";
}

.fa-modx:before {
    content: "\f285";
}

.fa-monero:before {
    content: "\f3d0";
}

.fa-money-bill:before {
    content: "\f0d6";
}

.fa-money-bill-alt:before {
    content: "\f3d1";
}

.fa-money-bill-wave:before {
    content: "\f53a";
}

.fa-money-bill-wave-alt:before {
    content: "\f53b";
}

.fa-money-check:before {
    content: "\f53c";
}

.fa-money-check-alt:before {
    content: "\f53d";
}

.fa-monument:before {
    content: "\f5a6";
}

.fa-moon:before {
    content: "\f186";
}

.fa-mortar-pestle:before {
    content: "\f5a7";
}

.fa-mosque:before {
    content: "\f678";
}

.fa-motorcycle:before {
    content: "\f21c";
}

.fa-mountain:before {
    content: "\f6fc";
}

.fa-mouse-pointer:before {
    content: "\f245";
}

.fa-mug-hot:before {
    content: "\f7b6";
}

.fa-music:before {
    content: "\f001";
}

.fa-napster:before {
    content: "\f3d2";
}

.fa-neos:before {
    content: "\f612";
}

.fa-network-wired:before {
    content: "\f6ff";
}

.fa-neuter:before {
    content: "\f22c";
}

.fa-newspaper:before {
    content: "\f1ea";
}

.fa-nimblr:before {
    content: "\f5a8";
}

.fa-node:before {
    content: "\f419";
}

.fa-node-js:before {
    content: "\f3d3";
}

.fa-not-equal:before {
    content: "\f53e";
}

.fa-notes-medical:before {
    content: "\f481";
}

.fa-npm:before {
    content: "\f3d4";
}

.fa-ns8:before {
    content: "\f3d5";
}

.fa-nutritionix:before {
    content: "\f3d6";
}

.fa-object-group:before {
    content: "\f247";
}

.fa-object-ungroup:before {
    content: "\f248";
}

.fa-odnoklassniki:before {
    content: "\f263";
}

.fa-odnoklassniki-square:before {
    content: "\f264";
}

.fa-oil-can:before {
    content: "\f613";
}

.fa-old-republic:before {
    content: "\f510";
}

.fa-om:before {
    content: "\f679";
}

.fa-opencart:before {
    content: "\f23d";
}

.fa-openid:before {
    content: "\f19b";
}

.fa-opera:before {
    content: "\f26a";
}

.fa-optin-monster:before {
    content: "\f23c";
}

.fa-osi:before {
    content: "\f41a";
}

.fa-otter:before {
    content: "\f700";
}

.fa-outdent:before {
    content: "\f03b";
}

.fa-page4:before {
    content: "\f3d7";
}

.fa-pagelines:before {
    content: "\f18c";
}

.fa-pager:before {
    content: "\f815";
}

.fa-paint-brush:before {
    content: "\f1fc";
}

.fa-paint-roller:before {
    content: "\f5aa";
}

.fa-palette:before {
    content: "\f53f";
}

.fa-palfed:before {
    content: "\f3d8";
}

.fa-pallet:before {
    content: "\f482";
}

.fa-paper-plane:before {
    content: "\f1d8";
}

.fa-paperclip:before {
    content: "\f0c6";
}

.fa-parachute-box:before {
    content: "\f4cd";
}

.fa-paragraph:before {
    content: "\f1dd";
}

.fa-parking:before {
    content: "\f540";
}

.fa-passport:before {
    content: "\f5ab";
}

.fa-pastafarianism:before {
    content: "\f67b";
}

.fa-paste:before {
    content: "\f0ea";
}

.fa-patreon:before {
    content: "\f3d9";
}

.fa-pause:before {
    content: "\f04c";
}

.fa-pause-circle:before {
    content: "\f28b";
}

.fa-paw:before {
    content: "\f1b0";
}

.fa-paypal:before {
    content: "\f1ed";
}

.fa-peace:before {
    content: "\f67c";
}

.fa-pen:before {
    content: "\f304";
}

.fa-pen-alt:before {
    content: "\f305";
}

.fa-pen-fancy:before {
    content: "\f5ac";
}

.fa-pen-nib:before {
    content: "\f5ad";
}

.fa-pen-square:before {
    content: "\f14b";
}

.fa-pencil-alt:before {
    content: "\f303";
}

.fa-pencil-ruler:before {
    content: "\f5ae";
}

.fa-penny-arcade:before {
    content: "\f704";
}

.fa-people-carry:before {
    content: "\f4ce";
}

.fa-pepper-hot:before {
    content: "\f816";
}

.fa-percent:before {
    content: "\f295";
}

.fa-percentage:before {
    content: "\f541";
}

.fa-periscope:before {
    content: "\f3da";
}

.fa-person-booth:before {
    content: "\f756";
}

.fa-phabricator:before {
    content: "\f3db";
}

.fa-phoenix-framework:before {
    content: "\f3dc";
}

.fa-phoenix-squadron:before {
    content: "\f511";
}

.fa-phone:before {
    content: "\f095";
}

.fa-phone-alt:before {
    content: "\f879";
}

.fa-phone-slash:before {
    content: "\f3dd";
}

.fa-phone-square:before {
    content: "\f098";
}

.fa-phone-square-alt:before {
    content: "\f87b";
}

.fa-phone-volume:before {
    content: "\f2a0";
}

.fa-photo-video:before {
    content: "\f87c";
}

.fa-php:before {
    content: "\f457";
}

.fa-pied-piper:before {
    content: "\f2ae";
}

.fa-pied-piper-alt:before {
    content: "\f1a8";
}

.fa-pied-piper-hat:before {
    content: "\f4e5";
}

.fa-pied-piper-pp:before {
    content: "\f1a7";
}

.fa-piggy-bank:before {
    content: "\f4d3";
}

.fa-pills:before {
    content: "\f484";
}

.fa-pinterest:before {
    content: "\f0d2";
}

.fa-pinterest-p:before {
    content: "\f231";
}

.fa-pinterest-square:before {
    content: "\f0d3";
}

.fa-pizza-slice:before {
    content: "\f818";
}

.fa-place-of-worship:before {
    content: "\f67f";
}

.fa-plane:before {
    content: "\f072";
}

.fa-plane-arrival:before {
    content: "\f5af";
}

.fa-plane-departure:before {
    content: "\f5b0";
}

.fa-play:before {
    content: "\f04b";
}

.fa-play-circle:before {
    content: "\f144";
}

.fa-playstation:before {
    content: "\f3df";
}

.fa-plug:before {
    content: "\f1e6";
}

.fa-plus:before {
    content: "\f067";
}

.fa-plus-circle:before {
    content: "\f055";
}

.fa-plus-square:before {
    content: "\f0fe";
}

.fa-podcast:before {
    content: "\f2ce";
}

.fa-poll:before {
    content: "\f681";
}

.fa-poll-h:before {
    content: "\f682";
}

.fa-poo:before {
    content: "\f2fe";
}

.fa-poo-storm:before {
    content: "\f75a";
}

.fa-poop:before {
    content: "\f619";
}

.fa-portrait:before {
    content: "\f3e0";
}

.fa-pound-sign:before {
    content: "\f154";
}

.fa-power-off:before {
    content: "\f011";
}

.fa-pray:before {
    content: "\f683";
}

.fa-praying-hands:before {
    content: "\f684";
}

.fa-prescription:before {
    content: "\f5b1";
}

.fa-prescription-bottle:before {
    content: "\f485";
}

.fa-prescription-bottle-alt:before {
    content: "\f486";
}

.fa-print:before {
    content: "\f02f";
}

.fa-procedures:before {
    content: "\f487";
}

.fa-product-hunt:before {
    content: "\f288";
}

.fa-project-diagram:before {
    content: "\f542";
}

.fa-pushed:before {
    content: "\f3e1";
}

.fa-puzzle-piece:before {
    content: "\f12e";
}

.fa-python:before {
    content: "\f3e2";
}

.fa-qq:before {
    content: "\f1d6";
}

.fa-qrcode:before {
    content: "\f029";
}

.fa-question:before {
    content: "\f128";
}

.fa-question-circle:before {
    content: "\f059";
}

.fa-quidditch:before {
    content: "\f458";
}

.fa-quinscape:before {
    content: "\f459";
}

.fa-quora:before {
    content: "\f2c4";
}

.fa-quote-left:before {
    content: "\f10d";
}

.fa-quote-right:before {
    content: "\f10e";
}

.fa-quran:before {
    content: "\f687";
}

.fa-r-project:before {
    content: "\f4f7";
}

.fa-radiation:before {
    content: "\f7b9";
}

.fa-radiation-alt:before {
    content: "\f7ba";
}

.fa-rainbow:before {
    content: "\f75b";
}

.fa-random:before {
    content: "\f074";
}

.fa-raspberry-pi:before {
    content: "\f7bb";
}

.fa-ravelry:before {
    content: "\f2d9";
}

.fa-react:before {
    content: "\f41b";
}

.fa-reacteurope:before {
    content: "\f75d";
}

.fa-readme:before {
    content: "\f4d5";
}

.fa-rebel:before {
    content: "\f1d0";
}

.fa-receipt:before {
    content: "\f543";
}

.fa-recycle:before {
    content: "\f1b8";
}

.fa-red-river:before {
    content: "\f3e3";
}

.fa-reddit:before {
    content: "\f1a1";
}

.fa-reddit-alien:before {
    content: "\f281";
}

.fa-reddit-square:before {
    content: "\f1a2";
}

.fa-redhat:before {
    content: "\f7bc";
}

.fa-redo:before {
    content: "\f01e";
}

.fa-redo-alt:before {
    content: "\f2f9";
}

.fa-registered:before {
    content: "\f25d";
}

.fa-remove-format:before {
    content: "\f87d";
}

.fa-renren:before {
    content: "\f18b";
}

.fa-reply:before {
    content: "\f3e5";
}

.fa-reply-all:before {
    content: "\f122";
}

.fa-replyd:before {
    content: "\f3e6";
}

.fa-republican:before {
    content: "\f75e";
}

.fa-researchgate:before {
    content: "\f4f8";
}

.fa-resolving:before {
    content: "\f3e7";
}

.fa-restroom:before {
    content: "\f7bd";
}

.fa-retweet:before {
    content: "\f079";
}

.fa-rev:before {
    content: "\f5b2";
}

.fa-ribbon:before {
    content: "\f4d6";
}

.fa-ring:before {
    content: "\f70b";
}

.fa-road:before {
    content: "\f018";
}

.fa-robot:before {
    content: "\f544";
}

.fa-rocket:before {
    content: "\f135";
}

.fa-rocketchat:before {
    content: "\f3e8";
}

.fa-rockrms:before {
    content: "\f3e9";
}

.fa-route:before {
    content: "\f4d7";
}

.fa-rss:before {
    content: "\f09e";
}

.fa-rss-square:before {
    content: "\f143";
}

.fa-ruble-sign:before {
    content: "\f158";
}

.fa-ruler:before {
    content: "\f545";
}

.fa-ruler-combined:before {
    content: "\f546";
}

.fa-ruler-horizontal:before {
    content: "\f547";
}

.fa-ruler-vertical:before {
    content: "\f548";
}

.fa-running:before {
    content: "\f70c";
}

.fa-rupee-sign:before {
    content: "\f156";
}

.fa-sad-cry:before {
    content: "\f5b3";
}

.fa-sad-tear:before {
    content: "\f5b4";
}

.fa-safari:before {
    content: "\f267";
}

.fa-salesforce:before {
    content: "\f83b";
}

.fa-sass:before {
    content: "\f41e";
}

.fa-satellite:before {
    content: "\f7bf";
}

.fa-satellite-dish:before {
    content: "\f7c0";
}

.fa-save:before {
    content: "\f0c7";
}

.fa-schlix:before {
    content: "\f3ea";
}

.fa-school:before {
    content: "\f549";
}

.fa-screwdriver:before {
    content: "\f54a";
}

.fa-scribd:before {
    content: "\f28a";
}

.fa-scroll:before {
    content: "\f70e";
}

.fa-sd-card:before {
    content: "\f7c2";
}

.fa-search:before {
    content: "\f002";
}

.fa-search-dollar:before {
    content: "\f688";
}

.fa-search-location:before {
    content: "\f689";
}

.fa-search-minus:before {
    content: "\f010";
}

.fa-search-plus:before {
    content: "\f00e";
}

.fa-searchengin:before {
    content: "\f3eb";
}

.fa-seedling:before {
    content: "\f4d8";
}

.fa-sellcast:before {
    content: "\f2da";
}

.fa-sellsy:before {
    content: "\f213";
}

.fa-server:before {
    content: "\f233";
}

.fa-servicestack:before {
    content: "\f3ec";
}

.fa-shapes:before {
    content: "\f61f";
}

.fa-share:before {
    content: "\f064";
}

.fa-share-alt:before {
    content: "\f1e0";
}

.fa-share-alt-square:before {
    content: "\f1e1";
}

.fa-share-square:before {
    content: "\f14d";
}

.fa-shekel-sign:before {
    content: "\f20b";
}

.fa-shield-alt:before {
    content: "\f3ed";
}

.fa-ship:before {
    content: "\f21a";
}

.fa-shipping-fast:before {
    content: "\f48b";
}

.fa-shirtsinbulk:before {
    content: "\f214";
}

.fa-shoe-prints:before {
    content: "\f54b";
}

.fa-shopping-bag:before {
    content: "\f290";
}

.fa-shopping-basket:before {
    content: "\f291";
}

.fa-shopping-cart:before {
    content: "\f07a";
}

.fa-shopware:before {
    content: "\f5b5";
}

.fa-shower:before {
    content: "\f2cc";
}

.fa-shuttle-van:before {
    content: "\f5b6";
}

.fa-sign:before {
    content: "\f4d9";
}

.fa-sign-in-alt:before {
    content: "\f2f6";
}

.fa-sign-language:before {
    content: "\f2a7";
}

.fa-sign-out-alt:before {
    content: "\f2f5";
}

.fa-signal:before {
    content: "\f012";
}

.fa-signature:before {
    content: "\f5b7";
}

.fa-sim-card:before {
    content: "\f7c4";
}

.fa-simplybuilt:before {
    content: "\f215";
}

.fa-sistrix:before {
    content: "\f3ee";
}

.fa-sitemap:before {
    content: "\f0e8";
}

.fa-sith:before {
    content: "\f512";
}

.fa-skating:before {
    content: "\f7c5";
}

.fa-sketch:before {
    content: "\f7c6";
}

.fa-skiing:before {
    content: "\f7c9";
}

.fa-skiing-nordic:before {
    content: "\f7ca";
}

.fa-skull:before {
    content: "\f54c";
}

.fa-skull-crossbones:before {
    content: "\f714";
}

.fa-skyatlas:before {
    content: "\f216";
}

.fa-skype:before {
    content: "\f17e";
}

.fa-slack:before {
    content: "\f198";
}

.fa-slack-hash:before {
    content: "\f3ef";
}

.fa-slash:before {
    content: "\f715";
}

.fa-sleigh:before {
    content: "\f7cc";
}

.fa-sliders-h:before {
    content: "\f1de";
}

.fa-slideshare:before {
    content: "\f1e7";
}

.fa-smile:before {
    content: "\f118";
}

.fa-smile-beam:before {
    content: "\f5b8";
}

.fa-smile-wink:before {
    content: "\f4da";
}

.fa-smog:before {
    content: "\f75f";
}

.fa-smoking:before {
    content: "\f48d";
}

.fa-smoking-ban:before {
    content: "\f54d";
}

.fa-sms:before {
    content: "\f7cd";
}

.fa-snapchat:before {
    content: "\f2ab";
}

.fa-snapchat-ghost:before {
    content: "\f2ac";
}

.fa-snapchat-square:before {
    content: "\f2ad";
}

.fa-snowboarding:before {
    content: "\f7ce";
}

.fa-snowflake:before {
    content: "\f2dc";
}

.fa-snowman:before {
    content: "\f7d0";
}

.fa-snowplow:before {
    content: "\f7d2";
}

.fa-socks:before {
    content: "\f696";
}

.fa-solar-panel:before {
    content: "\f5ba";
}

.fa-sort:before {
    content: "\f0dc";
}

.fa-sort-alpha-down:before {
    content: "\f15d";
}

.fa-sort-alpha-down-alt:before {
    content: "\f881";
}

.fa-sort-alpha-up:before {
    content: "\f15e";
}

.fa-sort-alpha-up-alt:before {
    content: "\f882";
}

.fa-sort-amount-down:before {
    content: "\f160";
}

.fa-sort-amount-down-alt:before {
    content: "\f884";
}

.fa-sort-amount-up:before {
    content: "\f161";
}

.fa-sort-amount-up-alt:before {
    content: "\f885";
}

.fa-sort-down:before {
    content: "\f0dd";
}

.fa-sort-numeric-down:before {
    content: "\f162";
}

.fa-sort-numeric-down-alt:before {
    content: "\f886";
}

.fa-sort-numeric-up:before {
    content: "\f163";
}

.fa-sort-numeric-up-alt:before {
    content: "\f887";
}

.fa-sort-up:before {
    content: "\f0de";
}

.fa-soundcloud:before {
    content: "\f1be";
}

.fa-sourcetree:before {
    content: "\f7d3";
}

.fa-spa:before {
    content: "\f5bb";
}

.fa-space-shuttle:before {
    content: "\f197";
}

.fa-speakap:before {
    content: "\f3f3";
}

.fa-speaker-deck:before {
    content: "\f83c";
}

.fa-spell-check:before {
    content: "\f891";
}

.fa-spider:before {
    content: "\f717";
}

.fa-spinner:before {
    content: "\f110";
}

.fa-splotch:before {
    content: "\f5bc";
}

.fa-spotify:before {
    content: "\f1bc";
}

.fa-spray-can:before {
    content: "\f5bd";
}

.fa-square:before {
    content: "\f0c8";
}

.fa-square-full:before {
    content: "\f45c";
}

.fa-square-root-alt:before {
    content: "\f698";
}

.fa-squarespace:before {
    content: "\f5be";
}

.fa-stack-exchange:before {
    content: "\f18d";
}

.fa-stack-overflow:before {
    content: "\f16c";
}

.fa-stackpath:before {
    content: "\f842";
}

.fa-stamp:before {
    content: "\f5bf";
}

.fa-star:before {
    content: "\f005";
}

.fa-star-and-crescent:before {
    content: "\f699";
}

.fa-star-half:before {
    content: "\f089";
}

.fa-star-half-alt:before {
    content: "\f5c0";
}

.fa-star-of-david:before {
    content: "\f69a";
}

.fa-star-of-life:before {
    content: "\f621";
}

.fa-staylinked:before {
    content: "\f3f5";
}

.fa-steam:before {
    content: "\f1b6";
}

.fa-steam-square:before {
    content: "\f1b7";
}

.fa-steam-symbol:before {
    content: "\f3f6";
}

.fa-step-backward:before {
    content: "\f048";
}

.fa-step-forward:before {
    content: "\f051";
}

.fa-stethoscope:before {
    content: "\f0f1";
}

.fa-sticker-mule:before {
    content: "\f3f7";
}

.fa-sticky-note:before {
    content: "\f249";
}

.fa-stop:before {
    content: "\f04d";
}

.fa-stop-circle:before {
    content: "\f28d";
}

.fa-stopwatch:before {
    content: "\f2f2";
}

.fa-store:before {
    content: "\f54e";
}

.fa-store-alt:before {
    content: "\f54f";
}

.fa-strava:before {
    content: "\f428";
}

.fa-stream:before {
    content: "\f550";
}

.fa-street-view:before {
    content: "\f21d";
}

.fa-strikethrough:before {
    content: "\f0cc";
}

.fa-stripe:before {
    content: "\f429";
}

.fa-stripe-s:before {
    content: "\f42a";
}

.fa-stroopwafel:before {
    content: "\f551";
}

.fa-studiovinari:before {
    content: "\f3f8";
}

.fa-stumbleupon:before {
    content: "\f1a4";
}

.fa-stumbleupon-circle:before {
    content: "\f1a3";
}

.fa-subscript:before {
    content: "\f12c";
}

.fa-subway:before {
    content: "\f239";
}

.fa-suitcase:before {
    content: "\f0f2";
}

.fa-suitcase-rolling:before {
    content: "\f5c1";
}

.fa-sun:before {
    content: "\f185";
}

.fa-superpowers:before {
    content: "\f2dd";
}

.fa-superscript:before {
    content: "\f12b";
}

.fa-supple:before {
    content: "\f3f9";
}

.fa-surprise:before {
    content: "\f5c2";
}

.fa-suse:before {
    content: "\f7d6";
}

.fa-swatchbook:before {
    content: "\f5c3";
}

.fa-swimmer:before {
    content: "\f5c4";
}

.fa-swimming-pool:before {
    content: "\f5c5";
}

.fa-symfony:before {
    content: "\f83d";
}

.fa-synagogue:before {
    content: "\f69b";
}

.fa-sync:before {
    content: "\f021";
}

.fa-sync-alt:before {
    content: "\f2f1";
}

.fa-syringe:before {
    content: "\f48e";
}

.fa-table:before {
    content: "\f0ce";
}

.fa-table-tennis:before {
    content: "\f45d";
}

.fa-tablet:before {
    content: "\f10a";
}

.fa-tablet-alt:before {
    content: "\f3fa";
}

.fa-tablets:before {
    content: "\f490";
}

.fa-tachometer-alt:before {
    content: "\f3fd";
}

.fa-tag:before {
    content: "\f02b";
}

.fa-tags:before {
    content: "\f02c";
}

.fa-tape:before {
    content: "\f4db";
}

.fa-tasks:before {
    content: "\f0ae";
}

.fa-taxi:before {
    content: "\f1ba";
}

.fa-teamspeak:before {
    content: "\f4f9";
}

.fa-teeth:before {
    content: "\f62e";
}

.fa-teeth-open:before {
    content: "\f62f";
}

.fa-telegram:before {
    content: "\f2c6";
}

.fa-telegram-plane:before {
    content: "\f3fe";
}

.fa-temperature-high:before {
    content: "\f769";
}

.fa-temperature-low:before {
    content: "\f76b";
}

.fa-tencent-weibo:before {
    content: "\f1d5";
}

.fa-tenge:before {
    content: "\f7d7";
}

.fa-terminal:before {
    content: "\f120";
}

.fa-text-height:before {
    content: "\f034";
}

.fa-text-width:before {
    content: "\f035";
}

.fa-th:before {
    content: "\f00a";
}

.fa-th-large:before {
    content: "\f009";
}

.fa-th-list:before {
    content: "\f00b";
}

.fa-the-red-yeti:before {
    content: "\f69d";
}

.fa-theater-masks:before {
    content: "\f630";
}

.fa-themeco:before {
    content: "\f5c6";
}

.fa-themeisle:before {
    content: "\f2b2";
}

.fa-thermometer:before {
    content: "\f491";
}

.fa-thermometer-empty:before {
    content: "\f2cb";
}

.fa-thermometer-full:before {
    content: "\f2c7";
}

.fa-thermometer-half:before {
    content: "\f2c9";
}

.fa-thermometer-quarter:before {
    content: "\f2ca";
}

.fa-thermometer-three-quarters:before {
    content: "\f2c8";
}

.fa-think-peaks:before {
    content: "\f731";
}

.fa-thumbs-down:before {
    content: "\f165";
}

.fa-thumbs-up:before {
    content: "\f164";
}

.fa-thumbtack:before {
    content: "\f08d";
}

.fa-ticket-alt:before {
    content: "\f3ff";
}

.fa-times:before {
    content: "\f00d";
}

.fa-times-circle:before {
    content: "\f057";
}

.fa-tint:before {
    content: "\f043";
}

.fa-tint-slash:before {
    content: "\f5c7";
}

.fa-tired:before {
    content: "\f5c8";
}

.fa-toggle-off:before {
    content: "\f204";
}

.fa-toggle-on:before {
    content: "\f205";
}

.fa-toilet:before {
    content: "\f7d8";
}

.fa-toilet-paper:before {
    content: "\f71e";
}

.fa-toolbox:before {
    content: "\f552";
}

.fa-tools:before {
    content: "\f7d9";
}

.fa-tooth:before {
    content: "\f5c9";
}

.fa-torah:before {
    content: "\f6a0";
}

.fa-torii-gate:before {
    content: "\f6a1";
}

.fa-tractor:before {
    content: "\f722";
}

.fa-trade-federation:before {
    content: "\f513";
}

.fa-trademark:before {
    content: "\f25c";
}

.fa-traffic-light:before {
    content: "\f637";
}

.fa-train:before {
    content: "\f238";
}

.fa-tram:before {
    content: "\f7da";
}

.fa-transgender:before {
    content: "\f224";
}

.fa-transgender-alt:before {
    content: "\f225";
}

.fa-trash:before {
    content: "\f1f8";
}

.fa-trash-alt:before {
    content: "\f2ed";
}

.fa-trash-restore:before {
    content: "\f829";
}

.fa-trash-restore-alt:before {
    content: "\f82a";
}

.fa-tree:before {
    content: "\f1bb";
}

.fa-trello:before {
    content: "\f181";
}

.fa-tripadvisor:before {
    content: "\f262";
}

.fa-trophy:before {
    content: "\f091";
}

.fa-truck:before {
    content: "\f0d1";
}

.fa-truck-loading:before {
    content: "\f4de";
}

.fa-truck-monster:before {
    content: "\f63b";
}

.fa-truck-moving:before {
    content: "\f4df";
}

.fa-truck-pickup:before {
    content: "\f63c";
}

.fa-tshirt:before {
    content: "\f553";
}

.fa-tty:before {
    content: "\f1e4";
}

.fa-tumblr:before {
    content: "\f173";
}

.fa-tumblr-square:before {
    content: "\f174";
}

.fa-tv:before {
    content: "\f26c";
}

.fa-twitch:before {
    content: "\f1e8";
}

.fa-twitter:before {
    content: "\f099";
}

.fa-twitter-square:before {
    content: "\f081";
}

.fa-typo3:before {
    content: "\f42b";
}

.fa-uber:before {
    content: "\f402";
}

.fa-ubuntu:before {
    content: "\f7df";
}

.fa-uikit:before {
    content: "\f403";
}

.fa-umbrella:before {
    content: "\f0e9";
}

.fa-umbrella-beach:before {
    content: "\f5ca";
}

.fa-underline:before {
    content: "\f0cd";
}

.fa-undo:before {
    content: "\f0e2";
}

.fa-undo-alt:before {
    content: "\f2ea";
}

.fa-uniregistry:before {
    content: "\f404";
}

.fa-universal-access:before {
    content: "\f29a";
}

.fa-university:before {
    content: "\f19c";
}

.fa-unlink:before {
    content: "\f127";
}

.fa-unlock:before {
    content: "\f09c";
}

.fa-unlock-alt:before {
    content: "\f13e";
}

.fa-untappd:before {
    content: "\f405";
}

.fa-upload:before {
    content: "\f093";
}

.fa-ups:before {
    content: "\f7e0";
}

.fa-usb:before {
    content: "\f287";
}

.fa-user:before {
    content: "\f007";
}

.fa-user-alt:before {
    content: "\f406";
}

.fa-user-alt-slash:before {
    content: "\f4fa";
}

.fa-user-astronaut:before {
    content: "\f4fb";
}

.fa-user-check:before {
    content: "\f4fc";
}

.fa-user-circle:before {
    content: "\f2bd";
}

.fa-user-clock:before {
    content: "\f4fd";
}

.fa-user-cog:before {
    content: "\f4fe";
}

.fa-user-edit:before {
    content: "\f4ff";
}

.fa-user-friends:before {
    content: "\f500";
}

.fa-user-graduate:before {
    content: "\f501";
}

.fa-user-injured:before {
    content: "\f728";
}

.fa-user-lock:before {
    content: "\f502";
}

.fa-user-md:before {
    content: "\f0f0";
}

.fa-user-minus:before {
    content: "\f503";
}

.fa-user-ninja:before {
    content: "\f504";
}

.fa-user-nurse:before {
    content: "\f82f";
}

.fa-user-plus:before {
    content: "\f234";
}

.fa-user-secret:before {
    content: "\f21b";
}

.fa-user-shield:before {
    content: "\f505";
}

.fa-user-slash:before {
    content: "\f506";
}

.fa-user-tag:before {
    content: "\f507";
}

.fa-user-tie:before {
    content: "\f508";
}

.fa-user-times:before {
    content: "\f235";
}

.fa-users:before {
    content: "\f0c0";
}

.fa-users-cog:before {
    content: "\f509";
}

.fa-usps:before {
    content: "\f7e1";
}

.fa-ussunnah:before {
    content: "\f407";
}

.fa-utensil-spoon:before {
    content: "\f2e5";
}

.fa-utensils:before {
    content: "\f2e7";
}

.fa-vaadin:before {
    content: "\f408";
}

.fa-vector-square:before {
    content: "\f5cb";
}

.fa-venus:before {
    content: "\f221";
}

.fa-venus-double:before {
    content: "\f226";
}

.fa-venus-mars:before {
    content: "\f228";
}

.fa-viacoin:before {
    content: "\f237";
}

.fa-viadeo:before {
    content: "\f2a9";
}

.fa-viadeo-square:before {
    content: "\f2aa";
}

.fa-vial:before {
    content: "\f492";
}

.fa-vials:before {
    content: "\f493";
}

.fa-viber:before {
    content: "\f409";
}

.fa-video:before {
    content: "\f03d";
}

.fa-video-slash:before {
    content: "\f4e2";
}

.fa-vihara:before {
    content: "\f6a7";
}

.fa-vimeo:before {
    content: "\f40a";
}

.fa-vimeo-square:before {
    content: "\f194";
}

.fa-vimeo-v:before {
    content: "\f27d";
}

.fa-vine:before {
    content: "\f1ca";
}

.fa-vk:before {
    content: "\f189";
}

.fa-vnv:before {
    content: "\f40b";
}

.fa-voicemail:before {
    content: "\f897";
}

.fa-volleyball-ball:before {
    content: "\f45f";
}

.fa-volume-down:before {
    content: "\f027";
}

.fa-volume-mute:before {
    content: "\f6a9";
}

.fa-volume-off:before {
    content: "\f026";
}

.fa-volume-up:before {
    content: "\f028";
}

.fa-vote-yea:before {
    content: "\f772";
}

.fa-vr-cardboard:before {
    content: "\f729";
}

.fa-vuejs:before {
    content: "\f41f";
}

.fa-walking:before {
    content: "\f554";
}

.fa-wallet:before {
    content: "\f555";
}

.fa-warehouse:before {
    content: "\f494";
}

.fa-water:before {
    content: "\f773";
}

.fa-wave-square:before {
    content: "\f83e";
}

.fa-waze:before {
    content: "\f83f";
}

.fa-weebly:before {
    content: "\f5cc";
}

.fa-weibo:before {
    content: "\f18a";
}

.fa-weight:before {
    content: "\f496";
}

.fa-weight-hanging:before {
    content: "\f5cd";
}

.fa-weixin:before {
    content: "\f1d7";
}

.fa-whatsapp:before {
    content: "\f232";
}

.fa-whatsapp-square:before {
    content: "\f40c";
}

.fa-wheelchair:before {
    content: "\f193";
}

.fa-whmcs:before {
    content: "\f40d";
}

.fa-wifi:before {
    content: "\f1eb";
}

.fa-wikipedia-w:before {
    content: "\f266";
}

.fa-wind:before {
    content: "\f72e";
}

.fa-window-close:before {
    content: "\f410";
}

.fa-window-maximize:before {
    content: "\f2d0";
}

.fa-window-minimize:before {
    content: "\f2d1";
}

.fa-window-restore:before {
    content: "\f2d2";
}

.fa-windows:before {
    content: "\f17a";
}

.fa-wine-bottle:before {
    content: "\f72f";
}

.fa-wine-glass:before {
    content: "\f4e3";
}

.fa-wine-glass-alt:before {
    content: "\f5ce";
}

.fa-wix:before {
    content: "\f5cf";
}

.fa-wizards-of-the-coast:before {
    content: "\f730";
}

.fa-wolf-pack-battalion:before {
    content: "\f514";
}

.fa-won-sign:before {
    content: "\f159";
}

.fa-wordpress:before {
    content: "\f19a";
}

.fa-wordpress-simple:before {
    content: "\f411";
}

.fa-wpbeginner:before {
    content: "\f297";
}

.fa-wpexplorer:before {
    content: "\f2de";
}

.fa-wpforms:before {
    content: "\f298";
}

.fa-wpressr:before {
    content: "\f3e4";
}

.fa-wrench:before {
    content: "\f0ad";
}

.fa-x-ray:before {
    content: "\f497";
}

.fa-xbox:before {
    content: "\f412";
}

.fa-xing:before {
    content: "\f168";
}

.fa-xing-square:before {
    content: "\f169";
}

.fa-y-combinator:before {
    content: "\f23b";
}

.fa-yahoo:before {
    content: "\f19e";
}

.fa-yammer:before {
    content: "\f840";
}

.fa-yandex:before {
    content: "\f413";
}

.fa-yandex-international:before {
    content: "\f414";
}

.fa-yarn:before {
    content: "\f7e3";
}

.fa-yelp:before {
    content: "\f1e9";
}

.fa-yen-sign:before {
    content: "\f157";
}

.fa-yin-yang:before {
    content: "\f6ad";
}

.fa-yoast:before {
    content: "\f2b1";
}

.fa-youtube:before {
    content: "\f167";
}

.fa-youtube-square:before {
    content: "\f431";
}

.fa-zhihu:before {
    content: "\f63f";
}

.sr-only {
    border: 0;
    clip: rect(0, 0, 0, 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
    clip: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    position: static;
    width: auto;
}

@font-face {
    font-family: "Font Awesome 5 Brands";
  font-style: normal;
  font-weight: normal;
  src: url(../fonts/fa-brands-400.eot);
  src: url(../fonts/fa-brands-400.eot?#iefix) format("embedded-opentype"), url(../fonts/fa-brands-400.woff2) format("woff2"), url(../fonts/fa-brands-400.woff) format("woff"), url(../fonts/fa-brands-400.ttf) format("truetype"), url(../fonts/fa-brands-400.svg#fontawesome) format("svg");
}

.fab {
    font-family: "Font Awesome 5 Brands";
}

@font-face {
    font-family: "Font Awesome 5 Free";
  font-style: normal;
  font-weight: 400;
  src: url(../fonts/fa-regular-400.eot);
  src: url(../fonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(../fonts/fa-regular-400.woff2) format("woff2"), url(../fonts/fa-regular-400.woff) format("woff"), url(../fonts/fa-regular-400.ttf) format("truetype"), url(../fonts/fa-regular-400.svg#fontawesome) format("svg");
}

.far {
    font-weight: 400;
}

@font-face {
    font-family: "Font Awesome 5 Free";
  font-style: normal;
  font-weight: 900;
  src: url(../fonts/fa-solid-900.eot);
  src: url(../fonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(../fonts/fa-solid-900.woff2) format("woff2"), url(../fonts/fa-solid-900.woff) format("woff"), url(../fonts/fa-solid-900.ttf) format("truetype"), url(../fonts/fa-solid-900.svg#fontawesome) format("svg");
}

.fa, .far, .fas {
    font-family: "Font Awesome 5 Free";
}

.fa, .fas {
    font-weight: 900;
}

@font-face {
    font-family: "cryptocoins";
  src: url("../fonts/cryptocoins.woff2") format("woff2"), url("../fonts/cryptocoins.woff") format("woff"), url("../fonts/cryptocoins.ttf") format("truetype");
}

/* .cc:before { */
.cc::before {
    font-family: "cryptocoins";
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-variant: normal;
    font-weight: normal;
  /* speak: none; only necessary if not using the private unicode range (firstGlyph option) */
    text-decoration: none;
    text-transform: none;
}

.cc.ADA-alt::before {
    content: "\E001";
}

.cc.ADA::before {
    content: "\E002";
}

.cc.ADC-alt::before {
    content: "\E003";
}

.cc.ADC::before {
    content: "\E004";
}

.cc.AEON-alt::before {
    content: "\E005";
}

.cc.AEON::before {
    content: "\E006";
}

.cc.AMP-alt::before {
    content: "\E007";
}

.cc.AMP::before {
    content: "\E008";
}

.cc.ANC-alt::before {
    content: "\E009";
}

.cc.ANC::before {
    content: "\E00A";
}

.cc.ARCH-alt::before {
    content: "\E00B";
}

.cc.ARCH::before {
    content: "\E00C";
}

.cc.ARDR-alt::before {
    content: "\E00D";
}

.cc.ARDR::before {
    content: "\E00E";
}

.cc.ARK-alt::before {
    content: "\E00F";
}

.cc.ARK::before {
    content: "\E010";
}

.cc.AST::before {
    content: "\E011";
}

.cc.AUR-alt::before {
    content: "\E012";
}

.cc.AUR::before {
    content: "\E013";
}

.cc.BANX-alt::before {
    content: "\E014";
}

.cc.BANX::before {
    content: "\E015";
}

.cc.BAT-alt::before {
    content: "\E016";
}

.cc.BAT::before {
    content: "\E017";
}

.cc.BAY-alt::before {
    content: "\E018";
}

.cc.BAY::before {
    content: "\E019";
}

.cc.BC-alt::before {
    content: "\E01A";
}

.cc.BLK-alt::before {
    content: "\E01A";
}

.cc.BC::before {
    content: "\E01B";
}

.cc.BLK::before {
    content: "\E01B";
}

.cc.BCH-alt::before {
    content: "\E01C";
}

.cc.BCC-alt::before {
    content: "\E01C";
}

.cc.BCH::before {
    content: "\E01D";
}

.cc.BCC::before {
    content: "\E01D";
}

.cc.BCN-alt::before {
    content: "\E01E";
}

.cc.BCN::before {
    content: "\E01F";
}

.cc.BCY::before {
    content: "\E020";
}

.cc.BELA::before {
    content: "\E021";
}

.cc.BFT-alt::before {
    content: "\E022";
}

.cc.BFT::before {
    content: "\E023";
}

.cc.BLZ::before {
    content: "\E024";
}

.cc.BNB::before {
    content: "\E025";
}

.cc.BRK-alt::before {
    content: "\E026";
}

.cc.BRK::before {
    content: "\E027";
}

.cc.BRX-alt::before {
    content: "\E028";
}

.cc.BRX::before {
    content: "\E029";
}

.cc.BSD-alt::before {
    content: "\E02A";
}

.cc.BSD::before {
    content: "\E02B";
}

.cc.BTA::before {
    content: "\E02C";
}

.cc.BTC-alt::before {
    content: "\E02D";
}

.cc.BTC::before {
    content: "\E02E";
}

.cc.BTCD-alt::before {
    content: "\E02F";
}

.cc.BTCD::before {
    content: "\E030";
}

.cc.BTCP-alt::before {
    content: "\E031";
}

.cc.BTCP::before {
    content: "\E032";
}

.cc.BTG::before {
    content: "\E033";
}

.cc.BTM-alt::before {
    content: "\E034";
}

.cc.BTM::before {
    content: "\E035";
}

.cc.BTS-alt::before {
    content: "\E036";
}

.cc.BTS::before {
    content: "\E037";
}

.cc.BURST::before {
    content: "\E038";
}

.cc.CLAM-alt::before {
    content: "\E039";
}

.cc.CLAM::before {
    content: "\E03A";
}

.cc.CLOAK-alt::before {
    content: "\E03B";
}

.cc.CLOAK::before {
    content: "\E03C";
}

.cc.CVC-alt::before {
    content: "\E03D";
}

.cc.CVC::before {
    content: "\E03E";
}

.cc.DAO-alt::before {
    content: "\E03F";
}

.cc.DAO::before {
    content: "\E040";
}

.cc.DASH-alt::before {
    content: "\E041";
}

.cc.DASH::before {
    content: "\E042";
}

.cc.DCR-alt::before {
    content: "\E043";
}

.cc.DCR::before {
    content: "\E044";
}

.cc.DCT-alt::before {
    content: "\E045";
}

.cc.DCT::before {
    content: "\E046";
}

.cc.DGB-alt::before {
    content: "\E047";
}

.cc.DGB::before {
    content: "\E048";
}

.cc.DGD::before {
    content: "\E049";
}

.cc.DGX::before {
    content: "\E04A";
}

.cc.DMD-alt::before {
    content: "\E04B";
}

.cc.DMD::before {
    content: "\E04C";
}

.cc.DOGE-alt::before {
    content: "\E04D";
}

.cc.DOGE::before {
    content: "\E04E";
}

.cc.EMC-alt::before {
    content: "\E04F";
}

.cc.EMC::before {
    content: "\E050";
}

.cc.EMC2-alt::before {
    content: "\E051";
}

.cc.EMC2::before {
    content: "\E052";
}

.cc.EOS-alt::before {
    content: "\E053";
}

.cc.EOS::before {
    content: "\E054";
}

.cc.ERC-alt::before {
    content: "\E055";
}

.cc.ERC::before {
    content: "\E056";
}

.cc.ETC-alt::before {
    content: "\E057";
}

.cc.ETC::before {
    content: "\E058";
}

.cc.ETH-alt::before {
    content: "\E059";
}

.cc.ETH::before {
    content: "\E05A";
}

.cc.EXP-alt::before {
    content: "\E05B";
}

.cc.EXP::before {
    content: "\E05C";
}

.cc.FC2-alt::before {
    content: "\E05D";
}

.cc.FC2::before {
    content: "\E05E";
}

.cc.FCT-alt::before {
    content: "\E05F";
}

.cc.FCT::before {
    content: "\E060";
}

.cc.FLDC-alt::before {
    content: "\E061";
}

.cc.FLDC::before {
    content: "\E062";
}

.cc.FLO-alt::before {
    content: "\E063";
}

.cc.FLO::before {
    content: "\E064";
}

.cc.FRK-alt::before {
    content: "\E065";
}

.cc.FRK::before {
    content: "\E066";
}

.cc.FTC-alt::before {
    content: "\E067";
}

.cc.FTC::before {
    content: "\E068";
}

.cc.FUN::before {
    content: "\E069";
}

.cc.GAME-alt::before {
    content: "\E06A";
}

.cc.GAME::before {
    content: "\E06B";
}

.cc.GBYTE-alt::before {
    content: "\E06C";
}

.cc.GBYTE::before {
    content: "\E06D";
}

.cc.GDC-alt::before {
    content: "\E06E";
}

.cc.GDC::before {
    content: "\E06F";
}

.cc.GEMZ-alt::before {
    content: "\E070";
}

.cc.GEMZ::before {
    content: "\E071";
}

.cc.GLD-alt::before {
    content: "\E072";
}

.cc.GLD::before {
    content: "\E073";
}

.cc.GNO-alt::before {
    content: "\E074";
}

.cc.GNO::before {
    content: "\E075";
}

.cc.GNT-alt::before {
    content: "\E076";
}

.cc.GNT::before {
    content: "\E077";
}

.cc.GOLOS-alt::before {
    content: "\E078";
}

.cc.GOLOS::before {
    content: "\E079";
}

.cc.GRC-alt::before {
    content: "\E07A";
}

.cc.GRC::before {
    content: "\E07B";
}

.cc.GRS::before {
    content: "\E07C";
}

.cc.HEAT-alt::before {
    content: "\E07D";
}

.cc.HEAT::before {
    content: "\E07E";
}

.cc.HSR::before {
    content: "\E07F";
}

.cc.HUC-alt::before {
    content: "\E080";
}

.cc.HUC::before {
    content: "\E081";
}

.cc.ICN-alt::before {
    content: "\E082";
}

.cc.ICN::before {
    content: "\E083";
}

.cc.ICX::before {
    content: "\E084";
}

.cc.IFC-alt::before {
    content: "\E085";
}

.cc.IFC::before {
    content: "\E086";
}

.cc.INCNT-alt::before {
    content: "\E087";
}

.cc.INCNT::before {
    content: "\E088";
}

.cc.IOC-alt::before {
    content: "\E089";
}

.cc.IOC::before {
    content: "\E08A";
}

.cc.IOTA-alt::before {
    content: "\E08B";
}

.cc.IOTA::before {
    content: "\E08C";
}

.cc.JBS-alt::before {
    content: "\E08D";
}

.cc.JBS::before {
    content: "\E08E";
}

.cc.KMD-alt::before {
    content: "\E08F";
}

.cc.KMD::before {
    content: "\E090";
}

.cc.KOBO::before {
    content: "\E091";
}

.cc.KORE-alt::before {
    content: "\E092";
}

.cc.KORE::before {
    content: "\E093";
}

.cc.LBC-alt::before {
    content: "\E094";
}

.cc.LBC::before {
    content: "\E095";
}

.cc.LDOGE-alt::before {
    content: "\E096";
}

.cc.LDOGE::before {
    content: "\E097";
}

.cc.LSK-alt::before {
    content: "\E098";
}

.cc.LSK::before {
    content: "\E099";
}

.cc.LTC-alt::before {
    content: "\E09A";
}

.cc.LTC::before {
    content: "\E09B";
}

.cc.MAID-alt::before {
    content: "\E09C";
}

.cc.MAID::before {
    content: "\E09D";
}

.cc.MARKS-alt::before {
    content: "\E09E";
}

.cc.MARKS::before {
    content: "\E09F";
}

.cc.Bitmark::before {
    content: "\E09F";
}

.cc.MCO-alt::before {
    content: "\E0A0";
}

.cc.MCO::before {
    content: "\E0A1";
}

.cc.MINT-alt::before {
    content: "\E0A2";
}

.cc.MINT::before {
    content: "\E0A3";
}

.cc.MONA-alt::before {
    content: "\E0A4";
}

.cc.MONA::before {
    content: "\E0A5";
}

.cc.MRC::before {
    content: "\E0A6";
}

.cc.MSC-alt::before {
    content: "\E0A7";
}

.cc.MSC::before {
    content: "\E0A8";
}

.cc.MTL-alt::before {
    content: "\E0A9";
}

.cc.MTL::before {
    content: "\E0AA";
}

.cc.MTR-alt::before {
    content: "\E0AB";
}

.cc.MTR::before {
    content: "\E0AC";
}

.cc.MUE-alt::before {
    content: "\E0AD";
}

.cc.MUE::before {
    content: "\E0AE";
}

.cc.MYST-alt::before {
    content: "\E0AF";
}

.cc.MYST::before {
    content: "\E0B0";
}

.cc.NAV-alt::before {
    content: "\E0B1";
}

.cc.NAV::before {
    content: "\E0B2";
}

.cc.NBT::before {
    content: "\E0B3";
}

.cc.USNBT::before {
    content: "\E0B3";
}

.cc.NEO-alt::before {
    content: "\E0B4";
}

.cc.NEO::before {
    content: "\E0B5";
}

.cc.GAS::before {
    content: "\E0B5";
}

.cc.NEOS-alt::before {
    content: "\E0B6";
}

.cc.NEOS::before {
    content: "\E0B7";
}

.cc.NEU-alt::before {
    content: "\E0B8";
}

.cc.NEU::before {
    content: "\E0B9";
}

.cc.NLG-alt::before {
    content: "\E0BA";
}

.cc.NLG::before {
    content: "\E0BB";
}

.cc.NMC-alt::before {
    content: "\E0BC";
}

.cc.NMC::before {
    content: "\E0BD";
}

.cc.NMR::before {
    content: "\E0BE";
}

.cc.NOTE-alt::before {
    content: "\E0BF";
}

.cc.NOTE::before {
    content: "\E0C0";
}

.cc.NVC-alt::before {
    content: "\E0C1";
}

.cc.NVC::before {
    content: "\E0C2";
}

.cc.NXT-alt::before {
    content: "\E0C3";
}

.cc.NXT::before {
    content: "\E0C4";
}

.cc.OK-alt::before {
    content: "\E0C5";
}

.cc.OK::before {
    content: "\E0C6";
}

.cc.OMG-alt::before {
    content: "\E0C7";
}

.cc.OMG::before {
    content: "\E0C8";
}

.cc.OMNI-alt::before {
    content: "\E0C9";
}

.cc.OMNI::before {
    content: "\E0CA";
}

.cc.OPAL-alt::before {
    content: "\E0CB";
}

.cc.OPAL::before {
    content: "\E0CC";
}

.cc.PART-alt::before {
    content: "\E0CD";
}

.cc.PART::before {
    content: "\E0CE";
}

.cc.PASC::before {
    content: "\E0CF";
}

.cc.PIGGY-alt::before {
    content: "\E0D0";
}

.cc.PIGGY::before {
    content: "\E0D1";
}

.cc.PINK-alt::before {
    content: "\E0D2";
}

.cc.PINK::before {
    content: "\E0D3";
}

.cc.PIVX-alt::before {
    content: "\E0D4";
}

.cc.PIVX::before {
    content: "\E0D5";
}

.cc.POT-alt::before {
    content: "\E0D6";
}

.cc.POT::before {
    content: "\E0D7";
}

.cc.PPC-alt::before {
    content: "\E0D8";
}

.cc.PPC::before {
    content: "\E0D9";
}

.cc.PPT::before {
    content: "\E0DA";
}

.cc.QRK-alt::before {
    content: "\E0DB";
}

.cc.QRK::before {
    content: "\E0DC";
}

.cc.QTUM-alt::before {
    content: "\E0DD";
}

.cc.QTUM::before {
    content: "\E0DE";
}

.cc.RADS-alt::before {
    content: "\E0DF";
}

.cc.RADS::before {
    content: "\E0E0";
}

.cc.RBIES-alt::before {
    content: "\E0E1";
}

.cc.RBIES::before {
    content: "\E0E2";
}

.cc.RBT-alt::before {
    content: "\E0E3";
}

.cc.RBT::before {
    content: "\E0E4";
}

.cc.RBY-alt::before {
    content: "\E0E5";
}

.cc.RBY::before {
    content: "\E0E6";
}

.cc.RDD-alt::before {
    content: "\E0E7";
}

.cc.RDD::before {
    content: "\E0E8";
}

.cc.REP-alt::before {
    content: "\E0E9";
}

.cc.REP::before {
    content: "\E0EA";
}

.cc.RHOC::before {
    content: "\E0EB";
}

.cc.RIC-alt::before {
    content: "\E0EC";
}

.cc.RIC::before {
    content: "\E0ED";
}

.cc.RISE-alt::before {
    content: "\E0EE";
}

.cc.RISE::before {
    content: "\E0EF";
}

.cc.SALT-alt::before {
    content: "\E0F0";
}

.cc.SALT::before {
    content: "\E0F1";
}

.cc.SAR-alt::before {
    content: "\E0F2";
}

.cc.SAR::before {
    content: "\E0F3";
}

.cc.SCOT-alt::before {
    content: "\E0F4";
}

.cc.SCOT::before {
    content: "\E0F5";
}

.cc.SDC-alt::before {
    content: "\E0F6";
}

.cc.SDC::before {
    content: "\E0F7";
}

.cc.SIA-alt::before {
    content: "\E0F8";
}

.cc.SIA::before {
    content: "\E0F9";
}

.cc.SC::before {
    content: "\E0F9";
}

.cc.SJCX-alt::before {
    content: "\E0FA";
}

.cc.SJCX::before {
    content: "\E0FB";
}

.cc.STORJ::before {
    content: "\E0FB";
}

.cc.SLG-alt::before {
    content: "\E0FC";
}

.cc.SLG::before {
    content: "\E0FD";
}

.cc.SLS-alt::before {
    content: "\E0FE";
}

.cc.SLS::before {
    content: "\E0FF";
}

.cc.SNRG-alt::before {
    content: "\E100";
}

.cc.SNRG::before {
    content: "\E101";
}

.cc.SNT::before {
    content: "\E102";
}

.cc.START-alt::before {
    content: "\E103";
}

.cc.START::before {
    content: "\E104";
}

.cc.STEEM-alt::before {
    content: "\E105";
}

.cc.STEEM::before {
    content: "\E106";
}

.cc.SBD::before {
    content: "\E106";
}

.cc.STRAT-alt::before {
    content: "\E107";
}

.cc.STRAT::before {
    content: "\E108";
}

.cc.SWIFT-alt::before {
    content: "\E109";
}

.cc.SWIFT::before {
    content: "\E10A";
}

.cc.SYNC-alt::before {
    content: "\E10B";
}

.cc.SYNC::before {
    content: "\E10C";
}

.cc.SYS-alt::before {
    content: "\E10D";
}

.cc.SYS::before {
    content: "\E10E";
}

.cc.TRIG-alt::before {
    content: "\E10F";
}

.cc.TRIG::before {
    content: "\E110";
}

.cc.TRX::before {
    content: "\E111";
}

.cc.TX-alt::before {
    content: "\E112";
}

.cc.TX::before {
    content: "\E113";
}

.cc.UBQ-alt::before {
    content: "\E114";
}

.cc.UBQ::before {
    content: "\E115";
}

.cc.UNITY-alt::before {
    content: "\E116";
}

.cc.UNITY::before {
    content: "\E117";
}

.cc.USDT-alt::before {
    content: "\E118";
}

.cc.USDT::before {
    content: "\E119";
}

.cc.VERI::before {
    content: "\E11A";
}

.cc.VET::before {
    content: "\E11B";
}

.cc.VIA-alt::before {
    content: "\E11C";
}

.cc.VIA::before {
    content: "\E11D";
}

.cc.VIOR-alt::before {
    content: "\E11E";
}

.cc.VIOR::before {
    content: "\E11F";
}

.cc.VNL-alt::before {
    content: "\E120";
}

.cc.VNL::before {
    content: "\E121";
}

.cc.VPN-alt::before {
    content: "\E122";
}

.cc.VPN::before {
    content: "\E123";
}

.cc.VRC-alt::before {
    content: "\E124";
}

.cc.VRC::before {
    content: "\E125";
}

.cc.VTC-alt::before {
    content: "\E126";
}

.cc.VTC::before {
    content: "\E127";
}

.cc.WAVES-alt::before {
    content: "\E128";
}

.cc.WAVES::before {
    content: "\E129";
}

.cc.XAI-alt::before {
    content: "\E12A";
}

.cc.XAI::before {
    content: "\E12B";
}

.cc.XBC::before {
    content: "\E12C";
}

.cc.XBS-alt::before {
    content: "\E12D";
}

.cc.XBS::before {
    content: "\E12E";
}

.cc.XCP-alt::before {
    content: "\E12F";
}

.cc.XCP::before {
    content: "\E130";
}

.cc.XEM-alt::before {
    content: "\E131";
}

.cc.XEM::before {
    content: "\E132";
}

.cc.XLM-alt::before {
    content: "\E133";
}

.cc.XLM::before {
    content: "\E134";
}

.cc.XMR::before {
    content: "\E135";
}

.cc.XMY::before {
    content: "\E136";
}

.cc.XPM-alt::before {
    content: "\E137";
}

.cc.XPM::before {
    content: "\E138";
}

.cc.XRB::before {
    content: "\E139";
}

.cc.XRP-alt::before {
    content: "\E13A";
}

.cc.XRP::before {
    content: "\E13B";
}

.cc.XTZ-alt::before {
    content: "\E13C";
}

.cc.XTZ::before {
    content: "\E13D";
}

.cc.XVC-alt::before {
    content: "\E13E";
}

.cc.XVC::before {
    content: "\E13F";
}

.cc.XVG-alt::before {
    content: "\E140";
}

.cc.XVG::before {
    content: "\E141";
}

.cc.XZC-alt::before {
    content: "\E142";
}

.cc.XZC::before {
    content: "\E143";
}

.cc.YBC-alt::before {
    content: "\E144";
}

.cc.YBC::before {
    content: "\E145";
}

.cc.ZEC-alt::before {
    content: "\E146";
}

.cc.ZEC::before {
    content: "\E147";
}

.cc.ZEIT-alt::before {
    content: "\E148";
}

.cc.ZEIT::before {
    content: "\E149";
}

.cc.ZRX-alt::before {
    content: "\E14A";
}

.cc.ZRX::before {
    content: "\E14B";
}

.ADA {
    color: #3CC8C8;
}

.ADC {
    color: #3CB0E5;
}

.AEON {
    color: #164450;
}

.AMP {
    color: #048DD2;
}

.ANC {
    color: #000;
}

.ARCH {
    color: #002652;
}

.ARDR {
    color: #1162a1;
}

.ARK {
    color: #F70000;
}

.AST {
    color: #18F18F;
}

.AUR {
    color: #136c5e;
}

.BANX {
    color: #225BA6;
}

.BAT {
    color: #9e1f63;
}

.BAY {
    color: #584ba1;
}

.BC {
    color: #202121;
}

.BCN {
    color: #964F51;
}

.BCY {
    color: #123A5A;
}

.BELA {
    color: #009EF9;
}

.BFT {
    color: #4fc3f7;
}

.BLZ {
    color: #6BE6BE;
}

.BRK {
    color: #194fa0;
}

.BRX {
    color: #a8c300;
}

.BSD {
    color: #1186E7;
}

.BTA {
    color: #210094;
}

.BTC, .BCH {
    color: #F7931A;
}

.BTG {
    color: #eba809;
}

.BTCD {
    color: #2A72DC;
}

.BTCP {
    color: #272D63;
}

.BTM {
    color: #9FA8B4;
}

.BTS {
    color: #03A9E0;
}

.BURST {
    color: #2D2D2D;
}

.CLAM {
    color: #D6AB31;
}

.CLOAK {
    color: #DF3F1E;
}

.CVC {
    color: #3AB03E;
}

.DAO {
    color: #FF3B3B;
}

.DASH {
    color: #1c75bc;
}

.DCR {
    color: #3b7cfb;
}

.DCT {
    color: #008770;
}

.DGB {
    color: #0066cc;
}

.DGD, .DGX {
    color: #D8A24A;
}

.DMD {
    color: #5497b2;
}

.DOGE {
    color: #BA9F33;
}

.EMC {
    color: #674c8c;
}

.EMC2 {
    color: #00CCFF;
}

.EOS {
    color: #19191A;
}

.ERC {
    color: #101E84;
}

.ETC {
    color: #669073;
}

.ETH {
    color: #282828;
}

.EXP {
    color: #FFAA5C;
}

.FC2 {
    color: #040405;
}

.FCT {
    color: #2175BB;
}

.FLDC {
    color: #C40E09;
}

.FLO {
    color: #1358C8;
}

.FRK {
    color: #0633cd;
}

.FTC {
    color: #679EF1;
}

.FUN {
    color: #EF3A5C;
}

.GAME {
    color: #ed1b24;
}

.GBYTE {
    color: #2C3E50;
}

.GDC {
    color: #E9A226;
}

.GEMZ {
    color: #e86060;
}

.GLD {
    color: #E8BE24;
}

.GNO {
    color: #00A6C4;
}

.GNT {
    color: #00d6e3;
}

.GOLOS {
    color: #2670B7;
}

.GRC {
    color: #88A13C;
}

.GRS {
    color: #648FA0;
}

.HEAT {
    color: #ff5606;
}

.HUC {
    color: #FFC018;
}

.ICN {
    color: #4c6f8c;
}

.ICX {
    color: #22C8CC;
}

.IFC {
    color: #ed272d;
}

.INCNT {
    color: #f2932f;
}

.IOC {
    color: #2fa3de;
}

.IOTA {
    color: #FFFFFF;
}

.JBS {
    color: #1A8BCD;
}

.KMD {
    color: #326464;
}

.KOBO {
    color: #80C342;
}

.KORE {
    color: #DF4124;
}

.LBC {
    color: #015C47;
}

.LDOGE {
    color: #ffcc00;
}

.LSK {
    color: #0D4EA0;
}

.LTC {
    color: #838383;
}

.MAID {
    color: #5492D6;
}

.MARKS {
    color: #504C4C;
}

.MCO {
    color: #0D3459;
}

.MINT {
    color: #006835;
}

.MONA {
    color: #a99364;
}

.MRC {
    color: #4279bd;
}

.MSC {
    color: #1D4983;
}

.MTL {
    color: #242424;
}

.MTR {
    color: #b92429;
}

.MUE {
    color: #f5a10e;
}

.NAV {
    color: #7D59B5;
}

.MYST {
    color: #f5a10e;
}

.NBT {
    color: #FFC93D;
}

.NEO {
    color: #58BF00;
}

.NEOS {
    color: #1d1d1b;
}

.NEU {
    color: #2983c0;
}

.NLG {
    color: #003E7E;
}

.NMC {
    color: #6787B7;
}

.NMR {
    color: #8DE8DE;
}

.NOTE {
    color: #42daff;
}

.NVC {
    color: #ecab41;
}

.NXT {
    color: #008FBB;
}

.OK {
    color: #0165A4;
}

.OMG {
    color: #1A53F0;
}

.OMNI {
    color: #18347E;
}

.OPAL {
    color: #7193AA;
}

.PART {
    color: #05D5A3;
}

.PASC {
    color: #F7931E;
}

.PIGGY {
    color: #F27A7A;
}

.PINK {
    color: #ED31CA;
}

.PIVX {
    color: #3b2f4d;
}

.POT {
    color: #105B2F;
}

.PPC {
    color: #3FA30C;
}

.PPT {
    color: #5a9ef6;
}

.QRK {
    color: #22AABF;
}

.QTUM {
    color: #359BCE;
}

.RADS {
    color: #924cea;
}

.RBIES {
    color: #C62436;
}

.RBT {
    color: #0d4982;
}

.RBY {
    color: #D31F26;
}

.RDD {
    color: #ED1C24;
}

.REP {
    color: #40a2cb;
}

.RIC {
    color: #60E4DD;
}

.RHOC {
    color: #C26C26;
}

.RISE {
    color: #43CEA2;
}

.SALT {
    color: #373C43;
}

.SAR {
    color: #1B72B8;
}

.SCOT {
    color: #3498DB;
}

.SDC {
    color: #981D2D;
}

.SIA {
    color: #00CBA0;
}

.SJCX {
    color: #003366;
}

.SLG {
    color: #5A6875;
}

.SLS {
    color: #1EB549;
}

.SNRG {
    color: #160363;
}

.START {
    color: #01AEF0;
}

.STEEM {
    color: #1A5099;
}

.STRAT {
    color: #2398dd;
}

.SWIFT {
    color: #428BCA;
}

.SYNC {
    color: #008DD2;
}

.SYS {
    color: #0098DA;
}

.TRIG {
    color: #1fbff4;
}

.TRX {
    color: #c62734;
}

.TX {
    color: #1F8BCC;
}

.UBQ {
    color: #00ec8d;
}

.UNITY {
    color: #ED8527;
}

.USDT {
    color: #2CA07A;
}

.VEN {
    color: #15BDFF;
}

.VIA {
    color: #565656;
}

.VIOR {
    color: #1F52A4;
}

.VNL {
    color: #404249;
}

.VPN {
    color: #589700;
}

.VRC {
    color: #418bca;
}

.VTC {
    color: #1b5c2e;
}

.WAVES {
    color: #24aad6;
}

.XAI {
    color: #2ef99f;
}

.XBC {
    color: #F7931A;
}

.XBS {
    color: #d3261d;
}

.XCP {
    color: #EC1550;
}

.XEM {
    color: #41bf76;
}

.XLM {
    color: #08B5E5;
}

.XMR {
    color: #FF6600;
}

.XMY {
    color: #BC3182;
}

.XPM {
    color: #e5b625;
}

.XRP {
    color: #346AA9;
}

.XTZ {
    color: #A6DF00;
}

.XVC {
    color: #B50126;
}

.XVG {
    color: #42AFB2;
}

.XZC {
    color: #23B852;
}

.YBC {
    color: #D6C154;
}

.ZEC {
    color: #e5a93d;
}

.ZEIT {
    color: #ACACAC;
}

.ZRX {
    color: #302C2C;
}

/**  =====================
      Custom css start
==========================  **/
/* ==========  card css start  =========== */
.anim-rotate {
    -webkit-animation: anim-rotate 1s linear infinite;
    animation: anim-rotate 1s linear infinite;
}

@-webkit-keyframes anim-rotate {
    100% {
        transform: rotate(360deg);
    }
}

@keyframes anim-rotate {
    100% {
        transform: rotate(360deg);
    }
}

.anim-close-card {
    -webkit-animation: anim-close-card 1.4s linear;
    animation: anim-close-card 1.4s linear;
}

@-webkit-keyframes anim-close-card {
    100% {
        opacity: 0.3;
        transform: scale3d(0.3, 0.3, 0.3);
    }
}

@keyframes anim-close-card {
    100% {
        opacity: 0.3;
        transform: scale3d(0.3, 0.3, 0.3);
    }
}

.card {
    box-shadow: 0 2px 10px -1px rgba(69, 90, 100, 0.3);
    margin-bottom: 30px;
    transition: box-shadow 0.2s ease-in-out;
}

.card:hover {
    box-shadow: 0 5px 11px 0px rgba(69, 90, 100, 0.3);
}

.card .card-header {
    border-bottom: 1px solid #e2e5e8;
    position: relative;
}

.card .card-header h5 {
    margin-bottom: 0;
    color: #37474f;
    font-size: 0.9375rem;
    font-weight: 600;
    display: inline-block;
    margin-right: 10px;
    line-height: 1.1;
    position: relative;
}

.card .card-header .card-header-right {
    right: 10px;
    top: 10px;
    display: inline-block;
    float: right;
    padding: 0;
    position: absolute;
}

@media only screen and (max-width: 575px) {
    .card .card-header .card-header-right {
        display: none;
    }
}

.card .card-header .card-header-right .dropdown-menu {
    margin-top: 0;
}

.card .card-header .card-header-right .dropdown-menu li {
    cursor: pointer;
}

.card .card-header .card-header-right .dropdown-menu li a {
    font-size: 14px;
    text-transform: capitalize;
}

.card .card-header .card-header-right .btn.dropdown-toggle {
    border: none;
    background: transparent;
    box-shadow: none;
    color: #888;
}

.card .card-header .card-header-right .btn.dropdown-toggle i {
    margin-right: 0;
}

.card .card-header .card-header-right .btn.dropdown-toggle:after {
    display: none;
}

.card .card-header .card-header-right .btn.dropdown-toggle:focus {
    box-shadow: none;
    outline: none;
}

.card .card-header .card-header-right .btn.dropdown-toggle {
    border: none;
    background: transparent;
    box-shadow: none;
    padding: 0;
    width: 20px;
    height: 20px;
    right: 8px;
    top: 8px;
}

.card .card-header .card-header-right .btn.dropdown-toggle.mobile-menu span {
    background-color: #888;
    height: 2px;
    border-radius: 5px;
}

.card .card-header .card-header-right .btn.dropdown-toggle.mobile-menu span:after, .card .card-header .card-header-right .btn.dropdown-toggle.mobile-menu span:before {
    border-radius: 5px;
    height: 2px;
    background-color: #888;
}

.card .card-header .card-header-right .nav-pills {
    padding: 0;
    box-shadow: none;
    background: transparent;
}

.card .card-footer {
    border-top: 1px solid #e2e5e8;
    padding: 12px 20px;
}

.card .card-footer:not([class*="bg-"]) {
    background: transparent;
}

.card .card-block,
  .card .card-body {
    padding: 20px 20px;
}

.card.card-load {
    position: relative;
    overflow: hidden;
}

.card.card-load .card-loader {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    background-color: rgba(255, 255, 255, 0.7);
    z-index: 999;
}

.card.card-load .card-loader i {
    margin: 0 auto;
    color: #4680ff;
    font-size: 24px;
    align-items: center;
    display: flex;
}

.card.full-card {
    z-index: 99999;
    border-radius: 0;
}

.card[class*="bg-"] .card-header {
    border-bottom-color: rgba(255, 255, 255, 0.25);
}

/**  =====================
      button css start
==========================  **/
.btn-page .btn {
    margin-right: 5px;
    margin-bottom: 5px;
}

.btn-page .btn-group .btn,
.btn-page .btn-group-vertical .btn {
    margin-right: 0;
    margin-bottom: 0;
}

.btn.btn-icon {
    width: 45px;
    height: 45px;
    padding: 0;
    border-radius: 50%;
    font-size: 18px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

/**  =====================
      Radio & Checked css start
==========================  **/
.custom-checkbox .custom-control-label:before {
    top: 0;
    width: 1.2rem;
    height: 1.2rem;
    border-radius: 0.125rem;
}

.custom-checkbox .custom-control-label:after {
    content: "";
    display: block;
    width: 6px;
    height: 12px;
    opacity: 0.9;
    background-image: none;
    border-right: 2px solid #fff;
    border-top: 2px solid #fff;
    position: absolute;
    left: -21px;
    top: 10px;
    transform: scaleX(-1) rotate(135deg);
    transform-origin: left top;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label:before {
    -webkit-animation: custripple 0.3s linear forwards;
    animation: custripple 0.3s linear forwards;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
    background-image: none;
    -webkit-animation: check linear 0.5s;
    animation: check linear 0.5s;
    opacity: 1;
}

.custom-radio .custom-control-label:after, .custom-radio .custom-control-label:before {
    top: 2px;
    width: 1.2rem;
    height: 1.2rem;
}

.custom-radio .custom-control-label:after {
    transform: scale(0);
    opacity: 0;
    background: #fff;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
    -webkit-animation: custripple 0.3s linear forwards;
    animation: custripple 0.3s linear forwards;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
    background-image: none;
    opacity: 1;
    transform: scale(0.4);
}

.custom-switch .custom-control-label:before {
    left: -2.25rem;
    top: 0.35rem;
    width: 1.75rem;
    height: 0.8rem;
    pointer-events: all;
    border-radius: 0.5rem;
    background: #dbe3ec;
    border: none;
    box-shadow: none !important;
}

.custom-switch .custom-control-label:after {
    top: 3px;
    left: -37px;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
}

.custom-switch .custom-control-input:checked ~ .custom-control-label::before {
    background: #aec7ff;
}

.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
    -webkit-animation: custripple 0.3s linear forwards;
    animation: custripple 0.3s linear forwards;
    background: #4680ff;
}

@-webkit-keyframes check {
    0% {
        height: 0;
        width: 0;
    }

    25% {
        height: 0;
        width: 6px;
    }

    50% {
        height: 12px;
        width: 6px;
    }
}

@keyframes check {
    0% {
        height: 0;
        width: 0;
    }

    25% {
        height: 0;
        width: 6px;
    }

    50% {
        height: 12px;
        width: 6px;
    }
}

@-webkit-keyframes custripple {
    0% {
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0);
    }

    50% {
        box-shadow: 0 0 0 12px rgba(0, 0, 0, 0.08);
    }

    100% {
        box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
    }
}

@keyframes custripple {
    0% {
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0);
    }

    50% {
        box-shadow: 0 0 0 12px rgba(0, 0, 0, 0.08);
    }

    100% {
        box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
    }
}

/**====== Radio & Checked css end ======**/
/**  =====================
      Switches css start
==========================  **/
.switch input[type=checkbox] {
    opacity: 0;
    position: absolute;
}

.switch input[type=checkbox] + .cr {
    position: relative;
    display: inline-block;
    transition: 0.4s ease;
    height: 20px;
    width: 35px;
    border: 1px solid #e9eaec;
    border-radius: 60px;
    cursor: pointer;
    z-index: 0;
    top: 12px;
}

.switch input[type=checkbox] + .cr:after, .switch input[type=checkbox] + .cr:before {
    content: "";
    position: absolute;
    display: block;
    top: 0;
    left: 0;
}

.switch input[type=checkbox] + .cr:before {
    transition: 0.2s cubic-bezier(0.24, 0, 0.5, 1);
    height: 20px;
    width: 35px;
    border-radius: 30px;
}

.switch input[type=checkbox] + .cr:after {
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1), 0 4px 0 0 rgba(0, 0, 0, 0.04), 0 4px 9px rgba(0, 0, 0, 0.13), 0 3px 3px rgba(0, 0, 0, 0.05);
    transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
    background: #f7f7f7;
    height: 19px;
    width: 19px;
    border-radius: 60px;
}

.switch input[type=checkbox]:checked + .cr:before {
    background: #4680ff;
    transition: width 0.2s cubic-bezier(0, 0, 0, 0.1);
}

.switch input[type=checkbox]:checked + .cr:after {
    left: 16px;
}

.switch input[type=checkbox]:disabled + label {
    opacity: 0.5;
    -webkit-filter: grayscale(0.4);
    filter: grayscale(0.4);
    cursor: not-allowed;
}

.switch.switch-primary input[type=checkbox]:checked + .cr:before {
    background: #4680ff;
}

.switch.switch-danger input[type=checkbox]:checked + .cr:before {
    background: #ff5252;
}

.switch.switch-success input[type=checkbox]:checked + .cr:before {
    background: #9ccc65;
}

.switch.switch-warning input[type=checkbox]:checked + .cr:before {
    background: #ffba57;
}

.switch.switch-info input[type=checkbox]:checked + .cr:before {
    background: #00bcd4;
}

.switch.switch-purple input[type=checkbox]:checked + .cr:before {
    background: #536dfe;
}

/**====== Switches css end ======**/
/**  =====================
      Badges css start
==========================  **/
.badge {
    font-size: 80%;
    padding: 0.35em 0.6em;
    font-weight: 600;
}

.badge-light-primary {
    background: rgba(70, 128, 255, 0.2);
    border-color: #cbdbff;
    color: #4680ff;
}

a.badge-light-primary.active, a.badge-light-primary:active, a.badge-light-primary:focus, a.badge-light-primary:hover {
    background: #4680ff;
    border-color: #4680ff;
    color: #dae6ff;
}

.badge-light-secondary {
    background: rgba(108, 117, 125, 0.2);
    border-color: #d6d8db;
    color: #6c757d;
}

a.badge-light-secondary.active, a.badge-light-secondary:active, a.badge-light-secondary:focus, a.badge-light-secondary:hover {
    background: #6c757d;
    border-color: #6c757d;
    color: #e2e3e5;
}

.badge-light-success {
    background: rgba(156, 204, 101, 0.2);
    border-color: #e3f1d4;
    color: #9ccc65;
}

a.badge-light-success.active, a.badge-light-success:active, a.badge-light-success:focus, a.badge-light-success:hover {
    background: #9ccc65;
    border-color: #9ccc65;
    color: #ebf5e0;
}

.badge-light-info {
    background: rgba(0, 172, 193, 0.2);
    border-color: #b8e8ee;
    color: #00acc1;
}

a.badge-light-info.active, a.badge-light-info:active, a.badge-light-info:focus, a.badge-light-info:hover {
    background: #00acc1;
    border-color: #00acc1;
    color: #cceef3;
}

.badge-light-warning {
    background: rgba(255, 186, 87, 0.2);
    border-color: #ffecd0;
    color: #ffba57;
}

a.badge-light-warning.active, a.badge-light-warning:active, a.badge-light-warning:focus, a.badge-light-warning:hover {
    background: #ffba57;
    border-color: #ffba57;
    color: #fff1dd;
}

.badge-light-danger {
    background: rgba(255, 82, 82, 0.2);
    border-color: #ffcfcf;
    color: #ff5252;
}

a.badge-light-danger.active, a.badge-light-danger:active, a.badge-light-danger:focus, a.badge-light-danger:hover {
    background: #ff5252;
    border-color: #ff5252;
    color: #ffdcdc;
}

.badge-light-light {
    background: rgba(248, 249, 250, 0.2);
    border-color: #fdfdfe;
    color: #f8f9fa;
}

a.badge-light-light.active, a.badge-light-light:active, a.badge-light-light:focus, a.badge-light-light:hover {
    background: #f8f9fa;
    border-color: #f8f9fa;
    color: #fefefe;
}

.badge-light-dark {
    background: rgba(52, 58, 64, 0.2);
    border-color: #c6c8ca;
    color: #343a40;
}

a.badge-light-dark.active, a.badge-light-dark:active, a.badge-light-dark:focus, a.badge-light-dark:hover {
    background: #343a40;
    border-color: #343a40;
    color: #d6d8d9;
}

/**====== Badges css end ======**/
/**  =====================
      Custom css start
==========================  **/
body {
    font-family: "Open Sans", sans-serif;
    font-size: 14px;
    color: #373a3c;
    font-weight: 400;
    background: #4665ff;
    position: relative;
}

*:focus {
    outline: none;
}

a:hover {
    outline: none;
    text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
    color: #37474f;
    font-weight: 600;
}

h1 {
    font-size: 2.5rem;
}

h2 {
    font-size: 2rem;
}

h3 {
    font-size: 1.75rem;
}

h4 {
    font-size: 1.5rem;
}

h5 {
    font-size: 1rem;
}

h6 {
    font-size: 0.875rem;
}

p {
    font-size: 13px;
}

b,
strong {
    font-weight: 600;
}

.img-radius {
    border-radius: 50%;
}

.page-header {
    background: transparent;
    margin-top: -140px;
    margin-bottom: 30px;
}

.page-header h5 {
    margin-bottom: 15px;
    font-weight: 400;
    color: #fff;
}

.page-header .page-header-title + .breadcrumb {
    background: transparent;
    padding: 0;
    margin-bottom: 0;
}

.page-header .page-header-title + .breadcrumb > .breadcrumb-item {
    line-height: 1;
}

.page-header .page-header-title + .breadcrumb > .breadcrumb-item:before {
    color: rgba(255, 255, 255, 0.5);
}

.page-header .page-header-title + .breadcrumb > .breadcrumb-item a {
    color: #fff;
    font-weight: 400;
}

.page-header .page-header-title + .breadcrumb > .breadcrumb-item:last-child a {
    color: #fff;
    font-weight: 600;
}

.page-header:not(.breadcumb-sticky) .page-header-title + .breadcrumb > .breadcrumb-item a {
    font-size: 13px;
}

.page-header.breadcumb-sticky {
    overflow: hidden;
    position: relative;
}

.page-header.breadcumb-sticky .page-header-title {
    display: inline-block;
}

.page-header.breadcumb-sticky .page-header-title h5 {
    margin-bottom: 0;
    color: #fff;
}

.page-header.breadcumb-sticky .breadcrumb-item + .breadcrumb-item::before,
    .page-header.breadcumb-sticky .page-header-title + .breadcrumb > .breadcrumb-item a,
    .page-header.breadcumb-sticky .page-header-title + .breadcrumb > .breadcrumb-item:last-child a {
    color: #fff;
}

.page-header.breadcumb-sticky .breadcrumb {
    display: inline-flex;
    float: right;
    margin-top: 4px;
}

@media only screen and (max-width: 767px) {
    .page-header.breadcumb-sticky .breadcrumb {
        display: flex;
        float: none;
    }
}

/* ==========  card css start  =========== */
.anim-rotate {
    -webkit-animation: anim-rotate 1s linear infinite;
    animation: anim-rotate 1s linear infinite;
}

@keyframes anim-rotate {
    100% {
        transform: rotate(360deg);
    }
}

.anim-close-card {
    -webkit-animation: anim-close-card 1.4s linear;
    animation: anim-close-card 1.4s linear;
}

@keyframes anim-close-card {
    100% {
        opacity: 0.3;
        transform: scale3d(0.3, 0.3, 0.3);
    }
}

/* ==========  scrollbar End  =========== */
.scroll-y {
    z-index: 1027;
}

/* ==========  scrollbar End  ===========
 ==========  card css End  ===========
 ================================    Dropdown Start  ===================== */
.dropdown-menu {
    padding: 10px 0;
    font-size: 14px;
}

.dropdown-menu > li,
  .dropdown-menu > .dropdown-item {
    padding-left: 8px;
    padding-right: 8px;
    margin: 0 10px;
    width: auto;
    border-radius: 2px;
}

.dropdown-menu > li > a,
    .dropdown-menu > .dropdown-item > a {
    padding: 5px;
    color: #373a3c;
}

.dropdown-menu > li > a i,
      .dropdown-menu > .dropdown-item > a i {
    font-size: 15px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-right: 10px;
}

.dropdown-menu > li.active, .dropdown-menu > li:active, .dropdown-menu > li:focus, .dropdown-menu > li:hover,
    .dropdown-menu > .dropdown-item.active,
    .dropdown-menu > .dropdown-item:active,
    .dropdown-menu > .dropdown-item:focus,
    .dropdown-menu > .dropdown-item:hover {
    background: #4680ff;
    color: #fff;
    box-shadow: 0 0 4px 0 rgba(43, 43, 43, 0.25);
}

.dropdown-menu > li.active > a, .dropdown-menu > li:active > a, .dropdown-menu > li:focus > a, .dropdown-menu > li:hover > a,
      .dropdown-menu > .dropdown-item.active > a,
      .dropdown-menu > .dropdown-item:active > a,
      .dropdown-menu > .dropdown-item:focus > a,
      .dropdown-menu > .dropdown-item:hover > a {
    background: transparent;
    color: #fff;
}

.dropdown-menu > a.active, .dropdown-menu > a:active, .dropdown-menu > a:focus, .dropdown-menu > a:hover {
    background: #4680ff;
    color: #fff;
}

.drp-icon:after {
    display: none;
}

/* ================================    Dropdown End  ===================== */
@media (min-width: 1600px) {
    .container {
        max-width: 1540px;
    }
}

@media (max-width: 992px) {
    .container {
        max-width: 100%;
    }
}

/* ========================================================
 ===============     document      ======================
 ========================================================

 Grid examples
*/
.bd-example-row {
    background: #ecf0f5;
    padding: 15px;
    margin-bottom: 15px;
}

.bd-example-row .row > [class^="col-"],
  .bd-example-row .row > .col {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    background-color: rgba(86, 61, 124, 0.15);
    border: 1px solid rgba(86, 61, 124, 0.2);
}

.bd-example-row .row + .row {
    margin-top: 1rem;
}

.bd-example-row .flex-items-bottom,
  .bd-example-row .flex-items-middle,
  .bd-example-row .flex-items-top {
    min-height: 6rem;
    background-color: rgba(255, 0, 0, 0.1);
}

.bd-example-row-flex-cols .row {
    min-height: 10rem;
    background-color: rgba(255, 0, 0, 0.1);
}

/* Docs examples */
.bd-example {
    position: relative;
    padding: 1rem;
    margin: 1rem;
    border: solid #ddd;
    border-width: 0.2rem 0 0;
}

@media only screen and (max-height: 575px) {
    .bd-example {
        padding: 1.5rem;
        margin-right: 0;
        margin-left: 0;
        border-width: 0.2rem;
    }
}

/* Example modals */
.modal {
    z-index: 1072;
}

.modal .popover,
  .modal .tooltip {
    z-index: 1073;
}

.modal-backdrop {
    z-index: 1071;
}

.bd-example-modal {
    background-color: #fafafa;
}

.bd-example-modal .modal {
    position: relative;
    top: auto;
    right: auto;
    bottom: auto;
    left: auto;
    z-index: 1;
    display: block;
}

.bd-example-modal .modal-dialog {
    left: auto;
    margin-right: auto;
    margin-left: auto;
}

/* Example tabbable tabs */
.bd-example-tabs .nav-tabs {
    margin-bottom: 1rem;
}

/* Code snippets */
.highlight {
    padding: 1rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
    background-color: #f3f2fb;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

@media only screen and (max-height: 575px) {
    .highlight {
        padding: 1.5rem;
    }
}

.bd-content .highlight {
    margin-right: 15px;
    margin-left: 15px;
}

@media only screen and (max-height: 575px) {
    .bd-content .highlight {
        margin-right: 0;
        margin-left: 0;
    }
}

.highlight pre {
    padding: 0;
    margin-top: 0;
    margin-bottom: 0;
    background-color: transparent;
    border: 0;
}

.highlight pre code {
    font-size: inherit;
    color: #333;
}

:not(pre) > code[class*="language-"],
pre[class*="language-"] {
    background: transparent;
}

/* =======================================================================
 ===============     Ui kit copy model style      ====================== */
/* Code examples */
.datta-example {
    position: relative;
}

.datta-example .datta-example-btns {
    position: absolute;
    right: 30px;
    top: -10px;
    opacity: 0;
    transform: rotateX(-90deg);
    transition: all 0.3s ease-in-out;
}

.datta-example .datta-example-btns .datta-example-btn {
    display: inline-block;
    line-height: 1;
    font-weight: 600;
    background: #4680ff;
    color: #fff;
    padding: 0.1875rem 0.3125rem;
    border-radius: 2px;
    white-space: nowrap;
    font-size: 11px;
    margin: 0 4px;
}

.datta-example .datta-example-btns .datta-example-btn.copy::before {
    content: "COPY";
}

.datta-example .datta-example-btns .datta-example-btn.copied {
    background: #9ccc65 !important;
    color: #fff !important;
}

.datta-example .datta-example-btns .datta-example-btn.copied::before {
    content: "COPIED!";
}

.datta-example:hover .datta-example-btns {
    top: -21px;
    transform: rotateX(0deg);
    opacity: 1;
}

/* Modal */
.datta-example-modal {
    position: fixed;
    z-index: 1099;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: #282c34;
    transform-origin: 50% 0;
    transform: scale(0);
    transition: all 0.3s ease-in-out;
}

.datta-example-modal-opened {
    overflow: hidden !important;
}

.datta-example-modal-opened .datta-example-modal {
    transform: scale(1);
}

.datta-example-modal-content {
    max-width: 100vw;
    margin: auto;
    padding: 50px;
    height: 100vh;
    overflow: auto;
}

.datta-example-modal-content > pre {
    overflow: hidden;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
}

.datta-example-modal-content > pre > code {
    padding: 0;
    background: none;
    font-size: 16px;
}

.md-datta-example-modal-copy {
    display: block;
    position: fixed;
    top: 90px;
    right: 30px;
    margin-right: 8px;
    font-size: 1.5rem;
    border-radius: 50%;
    padding: 10px 15px;
    background: #4680ff;
    color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2);
    z-index: 1;
    white-space: nowrap;
}

.md-datta-example-modal-copy:hover {
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2);
    color: #fff;
}

.md-datta-example-modal-copy.copied::before {
    content: "Copied to Clipboard Successfully ! . . .";
    position: absolute;
    display: block;
    right: 100%;
    margin-right: 10px;
    font-size: 14px;
    background: #9ccc65;
    line-height: 24px;
    height: 24px;
    border-radius: 3px;
    padding: 0 6px;
    top: 50%;
    margin-top: -12px;
}

.datta-example-modal-close {
    display: block;
    position: fixed;
    top: 10px;
    right: 52px;
    color: #fff;
    opacity: 0.2;
    font-size: 3rem;
    font-weight: 100;
    transition: all 0.3s ease-in-out;
    z-index: 1;
}

.datta-example-modal-close:hover {
    color: #fff;
    opacity: 0.9;
}

/* Code */
.cui-bottom-spacer {
    height: 12rem;
}

/* editor style for model */
.hljs {
    padding: 0.5em;
    color: #abb2bf;
    background: #282c34;
}

.hljs-comment,
.hljs-quote {
    color: #5c6370;
    font-style: italic;
}

.hljs-doctag,
.hljs-formula,
.hljs-keyword {
    color: #c678dd;
}

.hljs-deletion,
.hljs-name,
.hljs-section,
.hljs-selector-tag,
.hljs-subst {
    color: #e06c75;
}

.hljs-literal {
    color: #56b6c2;
}

.hljs-addition,
.hljs-attribute,
.hljs-meta-string,
.hljs-regexp,
.hljs-string {
    color: #98c379;
}

.hljs-built_in,
.hljs-class .hljs-title {
    color: #e6c07b;
}

.hljs-attr,
.hljs-number,
.hljs-selector-attr,
.hljs-selector-class,
.hljs-selector-pseudo,
.hljs-template-variable,
.hljs-type,
.hljs-variable {
    color: #d19a66;
}

.hljs-bullet,
.hljs-link,
.hljs-meta,
.hljs-selector-id,
.hljs-symbol,
.hljs-title {
    color: #61aeee;
}

.hljs-emphasis {
    font-style: italic;
}

.hljs-strong {
    font-weight: bold;
}

.hljs-link {
    text-decoration: underline;
}

/* ================================    md animated mode start   ===================== */
.md-show.md-effect-12 ~ .md-overlay {
    background: #4680ff;
}

/* ================================    md animated mode End   ===================== */
/* ================================    range slider Start  ===================== */
.tooltip.in {
    opacity: 0.9;
}

.tooltip .tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
}

.tooltip.top {
    padding: 5px 0;
    margin-top: -3px;
}

.tooltip.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 5px 5px 0;
    border-top-color: #000;
}

/* ================================    range slider End  ===================== */
/* ================================    owl-carousel slider Start  ===================== */
.owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev {
    padding: 3px 9px;
}

/* ================================    owl-carousel slider End  ===================== */
/* ================================    Bootstrap tags input Start  ===================== */
.bootstrap-tagsinput {
    padding: 10px 15px;
    box-shadow: none;
    border-radius: 2px;
    background: #ecf0f5;
}

.bootstrap-tagsinput .tag {
    padding: 5px 12px;
    border-radius: 2px;
    line-height: 37px;
    margin-top: 5px;
    margin-right: 5px;
}

.bootstrap-tagsinput .tag [data-role="remove"] {
    margin-right: -5px;
}

.bootstrap-tagsinput .tag [data-role="remove"]:after {
    content: "\e8f6";
    padding: 0 2px;
    font-family: 'feather' !important;
}

/* ================================    Bootstrap tags input End  ===================== */
/* ================================    Multi-Select Start  ===================== */
.ms-container {
    width: 100%;
}

/* ================================    Multi-Select End  ===================== */
/* ================================    Blockquote Start  ===================== */
.blockquote {
    border-left: 0.25rem solid #e2e5e8;
    padding: 0.5rem 1rem;
}

.blockquote.text-right {
    border-left: none;
    border-right: 0.25rem solid #e2e5e8;
}

/* ================================    Blockquote End  ===================== */
/* ================================    animation start  ===================== */
.card .animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    border: 5px solid #fff;
    margin-bottom: 30px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2);
}

/* ================================    animation End  ===================== */
/* ================================    browser  warning  Start  ===================== */
.ie-warning {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999999;
    background: #000000;
    width: 100%;
    height: 100%;
    text-align: center;
    color: #fff;
    font-family: "Courier New", Courier, monospace;
    padding: 50px 0;
}

.ie-warning p {
    font-size: 17px;
}

.ie-warning h1 {
    color: #fff;
}

.ie-warning .iew-container {
    min-width: 1024px;
    width: 100%;
    height: 200px;
    background: #fff;
    margin: 50px 0;
}

.ie-warning .iew-download {
    list-style: none;
    padding: 30px 0;
    margin: 0 auto;
    width: 720px;
}

.ie-warning .iew-download > li {
    float: left;
    vertical-align: top;
}

.ie-warning .iew-download > li > a {
    display: block;
    color: #000;
    width: 140px;
    font-size: 15px;
    padding: 15px 0;
}

.ie-warning .iew-download > li > a > div {
    margin-top: 10px;
}

.ie-warning .iew-download > li > a:hover {
    background-color: #eee;
}

/* ================================    browser  warning  End  ===================== */
div.code-toolbar > .toolbar a,
div.code-toolbar > .toolbar span,
div.code-toolbar > .toolbar button {
    padding: 3px 0.9em !important;
    background: #04a9f5 !important;
    color: #fff !important;
    box-shadow: none !important;
}

pre[class*=language-]:after,
pre[class*=language-]:before {
    display: none;
}

/* table css */
.table-borderless tbody tr td,
.table-borderless tbody tr th {
    border: 0;
}

@media only screen and (max-width: 400px) {
    .lay-customizer .theme-color > a[data-value="reset"],
  .theme-color > a[data-value="reset"] {
        margin-top: 20px;
    }
}

/**  =====================
      Generic-class css start
========================== **/
/*====== Padding , Margin css starts ======*/
.p-0 {
    padding: 0px;
}

.p-t-0 {
    padding-top: 0px;
}

.p-b-0 {
    padding-bottom: 0px;
}

.p-l-0 {
    padding-left: 0px;
}

.p-r-0 {
    padding-right: 0px;
}

.m-0 {
    margin: 0px;
}

.m-t-0 {
    margin-top: 0px;
}

.m-b-0 {
    margin-bottom: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.m-r-0 {
    margin-right: 0px;
}

.p-5 {
    padding: 5px;
}

.p-t-5 {
    padding-top: 5px;
}

.p-b-5 {
    padding-bottom: 5px;
}

.p-l-5 {
    padding-left: 5px;
}

.p-r-5 {
    padding-right: 5px;
}

.m-5 {
    margin: 5px;
}

.m-t-5 {
    margin-top: 5px;
}

.m-b-5 {
    margin-bottom: 5px;
}

.m-l-5 {
    margin-left: 5px;
}

.m-r-5 {
    margin-right: 5px;
}

.p-10 {
    padding: 10px;
}

.p-t-10 {
    padding-top: 10px;
}

.p-b-10 {
    padding-bottom: 10px;
}

.p-l-10 {
    padding-left: 10px;
}

.p-r-10 {
    padding-right: 10px;
}

.m-10 {
    margin: 10px;
}

.m-t-10 {
    margin-top: 10px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-l-10 {
    margin-left: 10px;
}

.m-r-10 {
    margin-right: 10px;
}

.p-15 {
    padding: 15px;
}

.p-t-15 {
    padding-top: 15px;
}

.p-b-15 {
    padding-bottom: 15px;
}

.p-l-15 {
    padding-left: 15px;
}

.p-r-15 {
    padding-right: 15px;
}

.m-15 {
    margin: 15px;
}

.m-t-15 {
    margin-top: 15px;
}

.m-b-15 {
    margin-bottom: 15px;
}

.m-l-15 {
    margin-left: 15px;
}

.m-r-15 {
    margin-right: 15px;
}

.p-20 {
    padding: 20px;
}

.p-t-20 {
    padding-top: 20px;
}

.p-b-20 {
    padding-bottom: 20px;
}

.p-l-20 {
    padding-left: 20px;
}

.p-r-20 {
    padding-right: 20px;
}

.m-20 {
    margin: 20px;
}

.m-t-20 {
    margin-top: 20px;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-l-20 {
    margin-left: 20px;
}

.m-r-20 {
    margin-right: 20px;
}

.p-25 {
    padding: 25px;
}

.p-t-25 {
    padding-top: 25px;
}

.p-b-25 {
    padding-bottom: 25px;
}

.p-l-25 {
    padding-left: 25px;
}

.p-r-25 {
    padding-right: 25px;
}

.m-25 {
    margin: 25px;
}

.m-t-25 {
    margin-top: 25px;
}

.m-b-25 {
    margin-bottom: 25px;
}

.m-l-25 {
    margin-left: 25px;
}

.m-r-25 {
    margin-right: 25px;
}

.p-30 {
    padding: 30px;
}

.p-t-30 {
    padding-top: 30px;
}

.p-b-30 {
    padding-bottom: 30px;
}

.p-l-30 {
    padding-left: 30px;
}

.p-r-30 {
    padding-right: 30px;
}

.m-30 {
    margin: 30px;
}

.m-t-30 {
    margin-top: 30px;
}

.m-b-30 {
    margin-bottom: 30px;
}

.m-l-30 {
    margin-left: 30px;
}

.m-r-30 {
    margin-right: 30px;
}

.p-35 {
    padding: 35px;
}

.p-t-35 {
    padding-top: 35px;
}

.p-b-35 {
    padding-bottom: 35px;
}

.p-l-35 {
    padding-left: 35px;
}

.p-r-35 {
    padding-right: 35px;
}

.m-35 {
    margin: 35px;
}

.m-t-35 {
    margin-top: 35px;
}

.m-b-35 {
    margin-bottom: 35px;
}

.m-l-35 {
    margin-left: 35px;
}

.m-r-35 {
    margin-right: 35px;
}

.p-40 {
    padding: 40px;
}

.p-t-40 {
    padding-top: 40px;
}

.p-b-40 {
    padding-bottom: 40px;
}

.p-l-40 {
    padding-left: 40px;
}

.p-r-40 {
    padding-right: 40px;
}

.m-40 {
    margin: 40px;
}

.m-t-40 {
    margin-top: 40px;
}

.m-b-40 {
    margin-bottom: 40px;
}

.m-l-40 {
    margin-left: 40px;
}

.m-r-40 {
    margin-right: 40px;
}

.p-45 {
    padding: 45px;
}

.p-t-45 {
    padding-top: 45px;
}

.p-b-45 {
    padding-bottom: 45px;
}

.p-l-45 {
    padding-left: 45px;
}

.p-r-45 {
    padding-right: 45px;
}

.m-45 {
    margin: 45px;
}

.m-t-45 {
    margin-top: 45px;
}

.m-b-45 {
    margin-bottom: 45px;
}

.m-l-45 {
    margin-left: 45px;
}

.m-r-45 {
    margin-right: 45px;
}

.p-50 {
    padding: 50px;
}

.p-t-50 {
    padding-top: 50px;
}

.p-b-50 {
    padding-bottom: 50px;
}

.p-l-50 {
    padding-left: 50px;
}

.p-r-50 {
    padding-right: 50px;
}

.m-50 {
    margin: 50px;
}

.m-t-50 {
    margin-top: 50px;
}

.m-b-50 {
    margin-bottom: 50px;
}

.m-l-50 {
    margin-left: 50px;
}

.m-r-50 {
    margin-right: 50px;
}

/*====== Padding , Margin css ends ======*/
/*====== text-color, background & border css starts ======*/
.bg-c-blue {
    background-color: #4680ff;
}

.text-c-blue {
    color: #4680ff;
}

.b-c-blue {
    border: 1px solid #4680ff;
}

.bg-c-red {
    background-color: #ff5252;
}

.text-c-red {
    color: #ff5252;
}

.b-c-red {
    border: 1px solid #ff5252;
}

.bg-c-green {
    background-color: #9ccc65;
}

.text-c-green {
    color: #9ccc65;
}

.b-c-green {
    border: 1px solid #9ccc65;
}

.bg-c-yellow {
    background-color: #ffba57;
}

.text-c-yellow {
    color: #ffba57;
}

.b-c-yellow {
    border: 1px solid #ffba57;
}

.bg-c-purple {
    background-color: #536dfe;
}

.text-c-purple {
    color: #536dfe;
}

.b-c-purple {
    border: 1px solid #536dfe;
}

/*====== text-color, background & border css ends ======*/
/*====== [ overrides bootstrap color ]text-color, background & border css starts ======*/
.bg-primary {
    background-color: #4680ff !important;
}

.text-primary {
    color: #4680ff !important;
}

.b-primary {
    border: 1px solid #4680ff !important;
}

.text-h-primary:hover {
    color: #4680ff !important;
}

.bg-danger {
    background-color: #ff5252 !important;
}

.text-danger {
    color: #ff5252 !important;
}

.b-danger {
    border: 1px solid #ff5252 !important;
}

.text-h-danger:hover {
    color: #ff5252 !important;
}

.bg-success {
    background-color: #9ccc65 !important;
}

.text-success {
    color: #9ccc65 !important;
}

.b-success {
    border: 1px solid #9ccc65 !important;
}

.text-h-success:hover {
    color: #9ccc65 !important;
}

.bg-warning {
    background-color: #ffba57 !important;
}

.text-warning {
    color: #ffba57 !important;
}

.b-warning {
    border: 1px solid #ffba57 !important;
}

.text-h-warning:hover {
    color: #ffba57 !important;
}

.bg-info {
    background-color: #00bcd4 !important;
}

.text-info {
    color: #00bcd4 !important;
}

.b-info {
    border: 1px solid #00bcd4 !important;
}

.text-h-info:hover {
    color: #00bcd4 !important;
}

.bg-purple {
    background-color: #536dfe !important;
}

.text-purple {
    color: #536dfe !important;
}

.b-purple {
    border: 1px solid #536dfe !important;
}

.text-h-purple:hover {
    color: #536dfe !important;
}

/*====== [ overrides bootstrap color ]text-color, background & border css ends ======*/
/*====== border color css starts ======*/
.b-primary {
    border: 1px solid #4680ff;
}

.border-bottom-primary td {
    border-bottom: 1px solid #4680ff;
}

.border-bottom-primary th {
    border-bottom: 1px solid #4680ff !important;
}

.b-danger {
    border: 1px solid #ff5252;
}

.border-bottom-danger td {
    border-bottom: 1px solid #ff5252;
}

.border-bottom-danger th {
    border-bottom: 1px solid #ff5252 !important;
}

.b-success {
    border: 1px solid #9ccc65;
}

.border-bottom-success td {
    border-bottom: 1px solid #9ccc65;
}

.border-bottom-success th {
    border-bottom: 1px solid #9ccc65 !important;
}

.b-warning {
    border: 1px solid #ffba57;
}

.border-bottom-warning td {
    border-bottom: 1px solid #ffba57;
}

.border-bottom-warning th {
    border-bottom: 1px solid #ffba57 !important;
}

.b-info {
    border: 1px solid #00bcd4;
}

.border-bottom-info td {
    border-bottom: 1px solid #00bcd4;
}

.border-bottom-info th {
    border-bottom: 1px solid #00bcd4 !important;
}

.b-purple {
    border: 1px solid #536dfe;
}

.border-bottom-purple td {
    border-bottom: 1px solid #536dfe;
}

.border-bottom-purple th {
    border-bottom: 1px solid #536dfe !important;
}

/*====== border color css ends ======*/
/*====== Card top border css starts ======*/
.card-border-c-blue {
    border-top: 4px solid #4680ff;
}

.card-border-c-red {
    border-top: 4px solid #ff5252;
}

.card-border-c-green {
    border-top: 4px solid #9ccc65;
}

.card-border-c-yellow {
    border-top: 4px solid #ffba57;
}

.card-border-c-purple {
    border-top: 4px solid #536dfe;
}

/*====== Card top border ends ======*/
/*====== Font-size css starts ======*/
.f-10 {
    font-size: 10px;
}

.f-12 {
    font-size: 12px;
}

.f-14 {
    font-size: 14px;
}

.f-16 {
    font-size: 16px;
}

.f-18 {
    font-size: 18px;
}

.f-20 {
    font-size: 20px;
}

.f-22 {
    font-size: 22px;
}

.f-24 {
    font-size: 24px;
}

.f-26 {
    font-size: 26px;
}

.f-28 {
    font-size: 28px;
}

.f-30 {
    font-size: 30px;
}

.f-32 {
    font-size: 32px;
}

.f-34 {
    font-size: 34px;
}

.f-36 {
    font-size: 36px;
}

.f-38 {
    font-size: 38px;
}

.f-40 {
    font-size: 40px;
}

.f-42 {
    font-size: 42px;
}

.f-44 {
    font-size: 44px;
}

.f-46 {
    font-size: 46px;
}

.f-48 {
    font-size: 48px;
}

.f-50 {
    font-size: 50px;
}

.f-52 {
    font-size: 52px;
}

.f-54 {
    font-size: 54px;
}

.f-56 {
    font-size: 56px;
}

.f-58 {
    font-size: 58px;
}

.f-60 {
    font-size: 60px;
}

.f-62 {
    font-size: 62px;
}

.f-64 {
    font-size: 64px;
}

.f-66 {
    font-size: 66px;
}

.f-68 {
    font-size: 68px;
}

.f-70 {
    font-size: 70px;
}

.f-72 {
    font-size: 72px;
}

.f-74 {
    font-size: 74px;
}

.f-76 {
    font-size: 76px;
}

.f-78 {
    font-size: 78px;
}

.f-80 {
    font-size: 80px;
}

/*====== Font-size css ends ======*/
/*====== Font-weight css starts ======*/
.f-w-100 {
    font-weight: 100;
}

.f-w-200 {
    font-weight: 200;
}

.f-w-300 {
    font-weight: 300;
}

.f-w-400 {
    font-weight: 400;
}

.f-w-500 {
    font-weight: 500;
}

.f-w-600 {
    font-weight: 600;
}

.f-w-700 {
    font-weight: 700;
}

.f-w-800 {
    font-weight: 800;
}

.f-w-900 {
    font-weight: 900;
}

/*====== Font-weight css ends ======*/
/*====== text-color, background color css starts ======*/
.bg-facebook {
    background: #3C5A99;
}

.text-facebook {
    color: #3C5A99;
}

.bg-twitter {
    background: #42C0FB;
}

.text-twitter {
    color: #42C0FB;
}

.bg-dribbble {
    background: #EC4A89;
}

.text-dribbble {
    color: #EC4A89;
}

.bg-pinterest {
    background: #BF2131;
}

.text-pinterest {
    color: #BF2131;
}

.bg-youtube {
    background: #E0291D;
}

.text-youtube {
    color: #E0291D;
}

.bg-googleplus {
    background: #C73E2E;
}

.text-googleplus {
    color: #C73E2E;
}

.bg-instagram {
    background: #AA7C62;
}

.text-instagram {
    color: #AA7C62;
}

.bg-viber {
    background: #7B519D;
}

.text-viber {
    color: #7B519D;
}

.bg-behance {
    background: #0057ff;
}

.text-behance {
    color: #0057ff;
}

.bg-dropbox {
    background: #3380FF;
}

.text-dropbox {
    color: #3380FF;
}

.bg-linkedin {
    background: #0077B5;
}

.text-linkedin {
    color: #0077B5;
}

/*====== text-color css ends ======*/
/*====== width, Height css starts ======*/
.wid-20 {
    width: 20px;
}

.hei-20 {
    height: 20px;
}

.wid-25 {
    width: 25px;
}

.hei-25 {
    height: 25px;
}

.wid-30 {
    width: 30px;
}

.hei-30 {
    height: 30px;
}

.wid-35 {
    width: 35px;
}

.hei-35 {
    height: 35px;
}

.wid-40 {
    width: 40px;
}

.hei-40 {
    height: 40px;
}

.wid-45 {
    width: 45px;
}

.hei-45 {
    height: 45px;
}

.wid-50 {
    width: 50px;
}

.hei-50 {
    height: 50px;
}

.wid-55 {
    width: 55px;
}

.hei-55 {
    height: 55px;
}

.wid-60 {
    width: 60px;
}

.hei-60 {
    height: 60px;
}

.wid-65 {
    width: 65px;
}

.hei-65 {
    height: 65px;
}

.wid-70 {
    width: 70px;
}

.hei-70 {
    height: 70px;
}

.wid-75 {
    width: 75px;
}

.hei-75 {
    height: 75px;
}

.wid-80 {
    width: 80px;
}

.hei-80 {
    height: 80px;
}

.wid-85 {
    width: 85px;
}

.hei-85 {
    height: 85px;
}

.wid-90 {
    width: 90px;
}

.hei-90 {
    height: 90px;
}

.wid-95 {
    width: 95px;
}

.hei-95 {
    height: 95px;
}

.wid-100 {
    width: 100px;
}

.hei-100 {
    height: 100px;
}

.wid-105 {
    width: 105px;
}

.hei-105 {
    height: 105px;
}

.wid-110 {
    width: 110px;
}

.hei-110 {
    height: 110px;
}

.wid-115 {
    width: 115px;
}

.hei-115 {
    height: 115px;
}

.wid-120 {
    width: 120px;
}

.hei-120 {
    height: 120px;
}

.wid-125 {
    width: 125px;
}

.hei-125 {
    height: 125px;
}

.wid-130 {
    width: 130px;
}

.hei-130 {
    height: 130px;
}

.wid-135 {
    width: 135px;
}

.hei-135 {
    height: 135px;
}

.wid-140 {
    width: 140px;
}

.hei-140 {
    height: 140px;
}

.wid-145 {
    width: 145px;
}

.hei-145 {
    height: 145px;
}

.wid-150 {
    width: 150px;
}

.hei-150 {
    height: 150px;
}

.wid-250 {
    width: 250px;
}

/*====== width, Height css ends ======*/
/*====== border-width css starts ======*/
.b-wid-1 {
    border-width: 1px;
}

.b-wid-2 {
    border-width: 2px;
}

.b-wid-3 {
    border-width: 3px;
}

.b-wid-4 {
    border-width: 4px;
}

.b-wid-5 {
    border-width: 5px;
}

.b-wid-6 {
    border-width: 6px;
}

.b-wid-7 {
    border-width: 7px;
}

.b-wid-8 {
    border-width: 8px;
}

/*====== border-width css ends ======*/
/* new logo start */
.b-brand {
    display: flex;
    align-items: center;
}

.b-brand .b-bg {
    background: #4680ff;
    border-radius: 3px;
    width: 30px;
    height: 30px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #fff;
}

.b-brand .b-title {
    margin-left: 10px;
    font-weight: 400;
    color: #fff;
    font-size: 16px;
}

.navbar-collapsed .b-brand .b-title {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.navbar-collapsed .mobile-menu {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.navbar-collapsed:hover .b-brand .b-title {
    transform: rotateY(0deg);
    opacity: 1;
}

.navbar-collapsed:hover .mobile-menu {
    transition-delay: 0.3s;
    transform: rotateY(0deg);
    opacity: 1;
}

/* new logo End  */
/* Pre-loader css start */
.loader-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    z-index: 1035;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.2);
}

.loader-bg .loader-track {
    position: relative;
    height: 3px;
    display: block;
    width: 100%;
    overflow: hidden;
}

.loader-bg .loader-track .loader-fill:after, .loader-bg .loader-track .loader-fill:before {
    content: '';
    background: #fff;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    will-change: left, right;
}

.loader-bg .loader-track .loader-fill:before {
    -webkit-animation: mbar 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
    animation: mbar 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
}

.loader-bg .loader-track .loader-fill:after {
    -webkit-animation: m_s 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    animation: m_s 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    -webkit-animation-delay: 1.15s;
    animation-delay: 1.15s;
}

@-webkit-keyframes mbar {
    0% {
        left: -35%;
        right: 100%;
    }

    60% {
        left: 100%;
        right: -90%;
    }

    100% {
        left: 100%;
        right: -35%;
    }
}

@keyframes mbar {
    0% {
        left: -35%;
        right: 100%;
    }

    60% {
        left: 100%;
        right: -90%;
    }

    100% {
        left: 100%;
        right: -35%;
    }
}

@-webkit-keyframes m_s {
    0% {
        left: -200%;
        right: 100%;
    }

    60% {
        left: 107%;
        right: -8%;
    }

    100% {
        left: 107%;
        right: -8%;
    }
}

@keyframes m_s {
    0% {
        left: -200%;
        right: 100%;
    }

    60% {
        left: 107%;
        right: -8%;
    }

    100% {
        left: 107%;
        right: -8%;
    }
}

/* Pre-loader css end */
/* header css start */
.search-bar {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    box-shadow: 0 2px 10px -1px rgba(69, 90, 100, 0.3);
    z-index: 1030;
    background: #fff;
    padding: 12px;
}

.search-bar .close {
    position: absolute;
    top: 9px;
    right: 9px;
    padding: 8px 16px;
}

.pcoded-header {
    z-index: 1029;
    position: relative;
    display: flex;
    min-height: 50px;
    padding: 0;
    top: 0;
    background: #fff;
    color: rgba(16, 27, 51, 0.8);
    width: 100%;
    transition: all 0.3s ease-in-out;
}

.pcoded-header .m-header {
    width: 230px;
    position: relative;
    height: 50px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0 25px;
}

.pcoded-header .m-header .logo-dark,
    .pcoded-header .m-header .logo-thumb {
    display: none;
}

.pcoded-header .input-group {
    background: transparent;
}

.pcoded-header .input-group .input-group-text {
    margin-right: 0;
}

.pcoded-header .input-group .input-group-text,
  .pcoded-header a,
  .pcoded-header dropdown-toggle {
    color: rgba(16, 27, 51, 0.8);
}

.pcoded-header .input-group .input-group-text:hover,
    .pcoded-header a:hover,
    .pcoded-header dropdown-toggle:hover {
    color: #101b33;
}

.pcoded-header #mobile-header {
    display: none;
}

.pcoded-header .navbar-nav {
    padding-left: 0;
    list-style: none;
    margin-bottom: 0;
    display: inline-flex;
    flex-direction: row;
}

.pcoded-header .navbar-nav > li {
    line-height: 50px;
    display: inline-block;
}

.pcoded-header .navbar-nav > li .nav-link {
    padding: 0;
}

.pcoded-header .navbar-nav > li:first-child {
    padding-left: 25px;
}

.pcoded-header .navbar-nav > li:last-child {
    padding-right: 25px;
}

.pcoded-header .navbar-nav .dropdown {
    height: 50px;
}

.pcoded-header .mr-auto .dropdown-menu {
    margin-left: -20px;
}

.pcoded-header .ml-auto {
    float: right;
    height: 50px;
}

.pcoded-header .ml-auto .dropdown-menu {
    margin-right: -20px;
}

.pcoded-header .main-search .input-group {
    border-radius: 3px;
    padding: 0;
}

.pcoded-header .main-search .input-group .form-control,
    .pcoded-header .main-search .input-group .input-group-text {
    background: transparent;
    border: none;
    border-radius: 0;
    padding: 0;
    height: auto;
}

.pcoded-header .main-search .input-group .search-close {
    display: none;
}

.pcoded-header .main-search .input-group .search-btn {
    padding: 0;
    background: transparent;
    border-color: transparent;
    box-shadow: none;
    margin-bottom: 0;
    margin-right: 0;
}

.pcoded-header .main-search .input-group .form-control {
    transition: all 0.3s ease-in-out;
    font-size: 14px;
}

.pcoded-header .main-search .input-group .form-control:active, .pcoded-header .main-search .input-group .form-control:focus, .pcoded-header .main-search .input-group .form-control:hover,
    .pcoded-header .main-search .input-group .search-btn:active,
    .pcoded-header .main-search .input-group .search-btn:focus,
    .pcoded-header .main-search .input-group .search-btn:hover {
    outline: none;
    box-shadow: none;
}

.pcoded-header .main-search.open .input-group {
    background: #ecf0f5;
    border: 0 solid #ecf0f5;
    padding: 0 0 0 20px;
}

.pcoded-header .main-search.open .input-group .search-close {
    display: flex;
}

.pcoded-header .main-search.open .input-group .search-btn {
    padding: 6px 9px;
    margin-left: 5px;
    color: #fff;
    background: #4680ff;
    border-color: #4680ff;
}

.pcoded-header .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header .main-search.open .input-group .form-control {
    transition: all 0.3s ease-in-out;
}

.pcoded-header .main-search.open .input-group .form-control:active, .pcoded-header .main-search.open .input-group .form-control:focus, .pcoded-header .main-search.open .input-group .form-control:hover,
    .pcoded-header .main-search.open .input-group .search-btn:active,
    .pcoded-header .main-search.open .input-group .search-btn:focus,
    .pcoded-header .main-search.open .input-group .search-btn:hover {
    outline: none;
    box-shadow: none;
}

.pcoded-header .dropdown .dropdown-toggle {
    line-height: 50px;
    display: inline-block;
    text-align: center;
    width: 40px;
}

.pcoded-header .dropdown .dropdown-toggle:after {
    display: none;
}

.pcoded-header .dropdown .dropdown-menu {
    position: absolute;
    min-width: 250px;
}

.pcoded-header .dropdown .dropdown-menu li {
    line-height: 1.2;
}

.pcoded-header .dropdown .dropdown-menu li a {
    padding: 10px;
    font-size: 14px;
}

.pcoded-header .dropdown .dropdown-menu li.active a, .pcoded-header .dropdown .dropdown-menu li:active a, .pcoded-header .dropdown .dropdown-menu li:focus a, .pcoded-header .dropdown .dropdown-menu li:hover a {
    color: #373a3c;
}

.pcoded-header .dropdown .notification {
    width: 350px;
    padding: 0;
    line-height: 1.4;
    overflow: hidden;
}

.pcoded-header .dropdown .notification a {
    color: #373a3c;
}

.pcoded-header .dropdown .notification a:hover {
    color: #37474f;
}

.pcoded-header .dropdown .notification .noti-head {
    background: #101b33;
    padding: 15px 20px;
}

.pcoded-header .dropdown .notification .noti-head h6 {
    color: #fff;
}

.pcoded-header .dropdown .notification .noti-head a {
    color: #fff;
    text-decoration: underline;
    font-size: 13px;
}

.pcoded-header .dropdown .notification .noti-body {
    padding: 0;
    position: relative;
    height: 300px;
}

.pcoded-header .dropdown .notification .noti-body img {
    width: 40px;
    margin-right: 20px;
}

.pcoded-header .dropdown .notification .noti-body li {
    padding: 15px 20px;
    transition: all 0.3s ease-in-out;
}

.pcoded-header .dropdown .notification .noti-body li.n-title {
    padding-bottom: 0;
}

.pcoded-header .dropdown .notification .noti-body li.n-title p {
    margin-bottom: 5px;
}

.pcoded-header .dropdown .notification .noti-body li.notification:hover {
    background: rgba(70, 128, 255, 0.1);
}

.pcoded-header .dropdown .notification .noti-body li p {
    margin-bottom: 5px;
    font-size: 13px;
}

.pcoded-header .dropdown .notification .noti-body li p strong {
    color: #222;
}

.pcoded-header .dropdown .notification .noti-body li .n-time {
    font-size: 80%;
    float: right;
}

.pcoded-header .dropdown .notification .noti-footer {
    border-top: 1px solid #f1f1f1;
    padding: 15px 20px;
    text-align: center;
    background: #ecf0f5;
}

.pcoded-header .dropdown .notification .noti-footer a {
    text-decoration: underline;
    font-size: 13px;
}

.pcoded-header .dropdown .notification ul {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.pcoded-header .dropdown .notification ul li {
    padding: 20px 15px;
}

.pcoded-header .dropdown .profile-notification {
    padding: 0;
    line-height: 1.4;
    overflow: hidden;
}

.pcoded-header .dropdown .profile-notification .pro-head {
    color: #fff;
    padding: 15px;
    position: relative;
    background: #101b33;
}

.pcoded-header .dropdown .profile-notification .pro-head img {
    width: 40px;
    margin-right: 10px;
}

.pcoded-header .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
    padding-right: 0;
    position: absolute;
    right: 0;
    top: 0;
    height: 100%;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pcoded-header .dropdown .profile-notification .pro-body {
    padding: 20px 0;
    margin-bottom: 0;
    list-style: none;
}

.pcoded-header .dropdown .profile-notification .pro-body li {
    margin: 0 10px;
    border-radius: 2px;
}

.pcoded-header .dropdown .profile-notification .pro-body li a {
    color: #373a3c;
    font-size: 14px;
    padding: 10px;
}

.pcoded-header .dropdown .profile-notification .pro-body li a i {
    margin-right: 10px;
}

.pcoded-header .dropdown .profile-notification .pro-body li.active, .pcoded-header .dropdown .profile-notification .pro-body li:active, .pcoded-header .dropdown .profile-notification .pro-body li:focus, .pcoded-header .dropdown .profile-notification .pro-body li:hover {
    background: #4680ff;
    box-shadow: 0 15px 8px -9px rgba(0, 0, 0, 0.25);
}

.pcoded-header .dropdown .profile-notification .pro-body li.active > a, .pcoded-header .dropdown .profile-notification .pro-body li:active > a, .pcoded-header .dropdown .profile-notification .pro-body li:focus > a, .pcoded-header .dropdown .profile-notification .pro-body li:hover > a {
    color: #fff;
    background: transparent;
}

/* header css end */
/* menu[ vartical ] css start */
.mob-toggler,
.mobile-menu {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 37px;
    height: 50px;
    position: absolute;
    right: 0;
    top: 0;
    padding: 0 10px;
}

.mob-toggler span,
  .mobile-menu span {
    position: relative;
    display: block;
    width: 100%;
    height: 2px;
    background-color: rgba(16, 27, 51, 0.8);
    transition: 0.3s cubic-bezier(0.97, 0.75, 0.61, 1.84);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-radius: 2px;
}

.mob-toggler span:after, .mob-toggler span:before,
    .mobile-menu span:after,
    .mobile-menu span:before {
    content: "";
    position: absolute;
    left: 0;
    height: 2px;
    background-color: rgba(16, 27, 51, 0.8);
    transition: 0.3s cubic-bezier(0.97, 0.75, 0.61, 1.84);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-radius: 2px;
}

.mob-toggler span:after,
    .mobile-menu span:after {
    top: 6px;
    width: 70%;
}

.mob-toggler span:before,
    .mobile-menu span:before {
    top: -6px;
    width: 40%;
}

.mob-toggler:hover span,
  .mobile-menu:hover span {
    background-color: #101b33;
}

.mob-toggler:hover span:after, .mob-toggler:hover span:before,
    .mobile-menu:hover span:after,
    .mobile-menu:hover span:before {
    background-color: #101b33;
    width: 100%;
}

.mob-toggler {
    right: 5px;
    display: none;
}

.pcoded-header:before,
.pcoded-main-container:before {
    content: "";
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar {
    display: block;
    z-index: 1028;
    position: absolute;
    box-shadow: 0 2px 10px -1px rgba(69, 90, 100, 0.3);
    transition: all 0.3s ease-in-out;
    width: 230px;
    height: calc(100% - 50px);
    margin-top: 50px;
    border-radius: 0 6px 0 0;
    top: 0;
    background: #101b33;
    color: #97a7c1;
}

.pcoded-navbar ul {
    padding-left: 0;
    list-style: none;
    margin-bottom: 0;
}

.pcoded-navbar .scroll-div.navbar-content {
    height: 100%;
}

.pcoded-navbar .header-logo {
    position: relative;
    align-items: center;
    display: inline-flex;
    float: left;
    background: #101b33;
    height: 50px;
    text-align: center;
    width: 230px;
    margin-right: 0;
    padding: 10px 25px;
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar .header-logo .logo-dark {
    display: none;
}

.pcoded-navbar .header-logo .logo-thumb {
    transform: rotateY(-90deg);
    opacity: 0;
    position: absolute;
    transition: unset;
}

.pcoded-navbar .header-logo + .scroll-div {
    float: left;
    display: inline-block;
}

.pcoded-navbar .mobile-menu {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 37px;
    height: 50px;
    position: absolute;
    right: 10px;
    top: 0;
    padding: 0 10px;
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar .pcoded-badge {
    font-size: 75%;
    position: relative;
    right: 0;
    top: -1px;
    padding: 2px 7px;
    border-radius: 2px;
    display: inline-block;
    margin-left: 10px;
}

.pcoded-navbar .main-menu-header {
    position: relative;
    padding: 25px 25px 10px;
    height: 116px;
    text-align: center;
}

.pcoded-navbar .main-menu-header .user-details {
    cursor: pointer;
}

.pcoded-navbar .main-menu-header .user-details > div {
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar .main-menu-header .img-radius {
    width: 60px;
    margin-bottom: 10px;
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar .main-menu-header + div .list-inline {
    display: flex;
    width: 80%;
    margin: 10px auto 0;
    border-top: 1px solid rgba(151, 167, 193, 0.2);
    border-bottom: 1px solid rgba(151, 167, 193, 0.2);
}

.pcoded-navbar .main-menu-header + div .list-inline .list-inline-item {
    cursor: pointer;
    position: relative;
    overflow: hidden;
    flex: 1 1 auto;
    text-align: center;
    padding: 10px 0;
    font-size: 18px;
    border: none;
}

.pcoded-navbar .main-menu-header + div .list-inline .list-inline-item a {
    position: relative;
}

.pcoded-navbar .main-menu-header + div .list-inline .list-inline-item .badge {
    position: absolute;
    top: -8px;
    right: -11px;
    font-size: 11px;
}

.pcoded-navbar .pcoded-inner-navbar {
    flex-direction: column;
}

.pcoded-navbar .pcoded-inner-navbar li {
    position: relative;
}

.pcoded-navbar .pcoded-inner-navbar li > a {
    text-align: left;
    padding: 7px 10px;
    margin: 5px 10px;
    border-radius: 0.25rem;
    display: block;
    position: relative;
}

.pcoded-navbar .pcoded-inner-navbar li > a .pcoded-mtext {
    position: relative;
}

.pcoded-navbar .pcoded-inner-navbar li > a > .pcoded-micon {
    font-size: 16px;
    padding: 0;
    margin-right: 5px;
    border-radius: 4px;
    width: 30px;
    display: inline-flex;
    align-items: center;
    height: 30px;
    text-align: center;
    justify-content: center;
}

.pcoded-navbar .pcoded-inner-navbar li > a > .pcoded-micon + .pcoded-mtext {
    position: relative;
    top: 0;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu > a:after {
    content: "\e844";
    font-family: 'feather';
    font-size: 13px;
    border: none;
    position: absolute;
    top: 13px;
    right: 20px;
    transition: 0.3s ease-in-out;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu.pcoded-trigger > a:after {
    transform: rotate(90deg);
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu {
    display: none;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li + li > a {
    border-top: 1px solid rgba(151, 167, 193, 0.2);
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu a:after {
    top: 7px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu.pcoded-trigger.active > .pcoded-submenu {
    display: block;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu.pcoded-trigger.active > a {
    position: relative;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu {
    position: relative;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li {
    position: relative;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li > a {
    text-align: left;
    padding: 10px 7px 10px 45px;
    margin: 0;
    display: block;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li > a:before {
    content: "\e844";
    font-family: 'feather';
    position: absolute;
    top: 10px;
    left: 24px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li .pcoded-submenu:after {
    left: 45px;
    top: -20px;
    height: calc(100% - 15px);
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li .pcoded-submenu > li:after {
    left: 46px;
    width: 20px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li .pcoded-submenu > li > a {
    padding: 10px 7px 10px 65px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li .pcoded-submenu > li > a:before {
    left: 45px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li .pcoded-submenu > li .pcoded-submenu:after {
    left: 45px;
    top: -20px;
    height: calc(100% - 15px);
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li .pcoded-submenu > li .pcoded-submenu > li:after {
    left: 46px;
    width: 20px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li .pcoded-submenu > li .pcoded-submenu > li > a {
    padding: 10px 7px 10px 85px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li .pcoded-submenu > li .pcoded-submenu > li > a:before {
    left: 65px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-menu-caption {
    font-size: 13px;
    font-weight: 600;
    color: #4680ff;
    padding: 18px 15px 5px;
    text-transform: capitalize;
    position: relative;
    margin-top: 10px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-menu-caption:first-child {
    border-top: none;
    margin-top: 0;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-menu-caption > label {
    margin-bottom: 0;
}

.pcoded-navbar .pcoded-inner-navbar li.disabled > a {
    cursor: default;
    opacity: 0.5;
}

.pcoded-navbar .pcoded-submenu {
    background: #101b33;
    padding: 15px 0;
}

.pcoded-navbar a {
    color: #97a7c1;
}

.pcoded-navbar .navbar-content,
  .pcoded-navbar .navbar-wrapper {
    width: 100%;
    height: 100%;
}

.pcoded-navbar.navbar-collapsed {
    width: 70px;
    height: calc(100% - 50px);
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar.navbar-collapsed .header-logo {
    width: 70px;
    padding: 10px 20px;
}

.pcoded-navbar.navbar-collapsed .header-logo img {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
    opacity: 0;
    transition: unset;
}

.pcoded-navbar.navbar-collapsed .header-logo .logo-thumb {
    transform: rotateY(0deg);
    transform-origin: 0 0;
    opacity: 1;
    left: calc((70px / 2) - 20px);
}

.pcoded-navbar.navbar-collapsed .header-logo .mobile-menu {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
    opacity: 0;
}

.pcoded-navbar.navbar-collapsed .navbar-content.ps {
    overflow: visible;
}

.pcoded-navbar.navbar-collapsed .pcoded-menu-caption {
    position: relative;
    width: 100%;
    height: auto;
    white-space: nowrap;
    overflow: hidden;
}

.pcoded-navbar.navbar-collapsed .pcoded-menu-caption > label {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar.navbar-collapsed .pcoded-menu-caption:after {
    content: "";
    position: absolute;
    top: 32px;
    left: 15px;
    width: calc(100% - 30px);
    height: 1px;
    background: rgba(151, 167, 193, 0.5);
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li > a {
    padding: 7px 20px;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li > a > .pcoded-micon + .pcoded-mtext {
    position: absolute;
    top: 11px;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li > a > .pcoded-mtext {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li.pcoded-hasmenu > a:after {
    right: 12px;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li.pcoded-hasmenu .pcoded-submenu {
    display: none;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li.pcoded-trigger .pcoded-submenu li a {
    color: transparent;
    white-space: nowrap;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li.pcoded-trigger .pcoded-submenu li + li a {
    border-top: none;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li.pcoded-trigger .pcoded-submenu .pcoded-submenu li a:before {
    opacity: 0;
}

.pcoded-navbar.navbar-collapsed ~ .pcoded-main-container {
    margin-left: 70px;
}

.pcoded-navbar.navbar-collapsed .pcoded-badge {
    transform: rotateX(-90deg);
    transform-origin: 50% 50%;
    opacity: 0;
    display: none;
    transition: all 0.15s ease-in-out;
}

.pcoded-navbar.navbar-collapsed:hover {
    width: 230px !important;
}

.pcoded-navbar.navbar-collapsed:hover .header-logo {
    width: 230px;
}

.pcoded-navbar.navbar-collapsed:hover .header-logo img {
    transform: rotateY(0deg);
    opacity: 1;
}

.pcoded-navbar.navbar-collapsed:hover .header-logo .logo-thumb {
    transform: rotateY(-90deg);
    opacity: 0;
}

.pcoded-navbar.navbar-collapsed:hover .header-logo .mobile-menu {
    display: flex;
    right: 10px;
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-menu-caption > label {
    transform: rotateY(0deg);
    opacity: 1;
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-menu-caption:after {
    background: transparent;
}

.pcoded-navbar.navbar-collapsed:hover .mobile-menu {
    transform: rotateY(0deg);
    opacity: 1;
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-inner-navbar > li > a > .pcoded-mtext {
    transform: rotateY(0deg);
    opacity: 1;
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-inner-navbar > li > a > .pcoded-mtext:after {
    opacity: 1;
    visibility: visible;
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-inner-navbar > li.pcoded-hasmenu > a:after {
    transform: rotateX(0deg);
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-inner-navbar > li.pcoded-hasmenu.pcoded-trigger > a:after {
    transform: rotateX(0deg) rotate(90deg);
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-inner-navbar > li.pcoded-trigger .pcoded-submenu li a {
    color: inherit;
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-inner-navbar > li.pcoded-trigger .pcoded-submenu .pcoded-submenu li a:before {
    opacity: 1;
}

.pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li > a {
    padding: 7px 10px;
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li > a:after {
    display: none;
}

.pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.active > a, .pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger > a {
    width: calc(70px - 20px);
}

.pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger.pcoded-hasmenu > .pcoded-submenu li.active > a:before,
    .pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger.pcoded-hasmenu > .pcoded-submenu li.pcoded-trigger > a:before,
    .pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger.pcoded-hasmenu > .pcoded-submenu li:hover > a:before {
    content: "";
    top: 10px;
    left: 31px;
    border-radius: 50%;
    background: #4680ff;
    padding: 5px;
    box-shadow: 0 0 0 5px #fff;
    z-index: 6;
}

.pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger.pcoded-hasmenu > .pcoded-submenu:before {
    content: "";
    width: 2px;
    height: 100%;
    position: absolute;
    top: 0;
    left: calc(70px / 2);
    z-index: 5;
    background: rgba(151, 167, 193, 0.2);
}

.pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger .pcoded-submenu li + li > a {
    border-top-color: transparent !important;
}

.pcoded-navbar.navbar-collapsed:not(:hover) .main-menu-header {
    padding: 25px 9px;
}

.pcoded-navbar.navbar-collapsed:not(:hover) .main-menu-header .img-radius {
    width: calc(70px - 20px);
}

.pcoded-navbar.navbar-collapsed:not(:hover) .main-menu-header .user-details > div {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
}

.pcoded-navbar .pcoded-menu-caption {
    color: #8090a5;
}

.pcoded-navbar .pcoded-inner-navbar li.active > a, .pcoded-navbar .pcoded-inner-navbar li:focus > a, .pcoded-navbar .pcoded-inner-navbar li:hover > a {
    color: #e5efff;
}

.pcoded-navbar .pcoded-inner-navbar > li.active > a, .pcoded-navbar .pcoded-inner-navbar > li.pcoded-trigger > a {
    background: #4680ff;
    color: #fff;
    box-shadow: 0 10px 5px -8px rgba(0, 0, 0, 0.4);
}

.pcoded-navbar .pcoded-inner-navbar > .pcoded-menu-caption.active:after, .pcoded-navbar .pcoded-inner-navbar > .pcoded-menu-caption.pcoded-trigger:after {
    display: none;
}

.pcoded-navbar.mob-open ~ .pcoded-header:before,
.pcoded-navbar.mob-open ~ .pcoded-main-container:before, .pcoded-navbar.navbar-collapsed:hover ~ .pcoded-header:before,
.pcoded-navbar.navbar-collapsed:hover ~ .pcoded-main-container:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

/* ===  scroll bar start  ===== */
.navbar-content {
    position: relative;
}

.ps__rail-y {
    z-index: 5;
}

.ps .ps__rail-x.ps--clicking,
.ps .ps__rail-x:focus,
.ps .ps__rail-x:hover,
.ps .ps__rail-y.ps--clicking,
.ps .ps__rail-y:focus,
.ps .ps__rail-y:hover {
    background: transparent;
}

.ps__thumb-y {
    background: #98aec9;
}

.ps__rail-y.ps--clicking .ps__thumb-y,
.ps__rail-y:focus > .ps__thumb-y,
.ps__rail-y:hover > .ps__thumb-y {
    background: #a9bbd2;
}

/* ===  scroll bar End  ===== */
/* menu [ vartical ] css end */
/* menu[ horizontal ] css start */
.pcoded-navbar.theme-horizontal {
    display: block;
    height: 50px;
    width: 100%;
    z-index: 1023;
    position: fixed;
    border-radius: 0;
    top: 50px;
    margin-top: 0;
}

.pcoded-navbar.theme-horizontal .pcoded-badge {
    display: none;
}

.pcoded-navbar.theme-horizontal.top-nav-collapse {
    top: 0;
}

.pcoded-navbar.theme-horizontal.default, .pcoded-navbar.theme-horizontal.default.top-nav-collapse {
    top: 50px;
}

.pcoded-navbar.theme-horizontal.header-hide {
    top: 0;
}

.pcoded-navbar.theme-horizontal.header-hide.top-nav-collapse {
    top: -50px;
}

.pcoded-navbar.theme-horizontal.header-hide ~ .pcoded-main-container {
    margin-top: 50px;
}

.pcoded-navbar.theme-horizontal .header-logo {
    display: none;
}

.pcoded-navbar.theme-horizontal .sidenav-horizontal-wrapper {
    display: flex;
    align-items: center;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar {
    display: block;
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
    white-space: nowrap;
    transition: all 0.5s ease-in-out;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-menu-caption {
    display: none;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li {
    display: inline-flex;
    list-style: outside none none;
    margin: 0;
    padding: 0;
    position: relative;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li > a {
    margin: 0;
    padding: 8px 15px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li > a > .pcoded-mtext {
    position: relative;
    top: 0;
    margin-right: 5px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li > a:after {
    position: relative;
    top: 0;
    right: 0;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.active a, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-trigger a, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li:hover a {
    box-shadow: none;
    color: #fff;
    background: transparent;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.active:before, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.pcoded-trigger:before {
    content: "\6d";
    position: absolute;
    bottom: -24px;
    left: 0;
    font-family: "pct";
    z-index: 1001;
    font-size: 50px;
    line-height: 1;
    padding-left: calc(50% - 25px);
    color: #101b33;
    text-shadow: 0 3px 4px rgba(69, 90, 100, 0.3);
    width: 100%;
    height: 40px;
    transform: scaleX(1.2);
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.active > .pcoded-submenu, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.pcoded-trigger > .pcoded-submenu {
    margin-top: 30px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.active:after, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-trigger:after {
    content: "";
    background-color: #4680ff;
    z-index: 4;
    position: absolute;
    left: 19px;
    top: auto;
    bottom: 5px;
    width: 23px;
    height: 2px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.edge > .pcoded-submenu {
    left: auto;
    right: 0;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu {
    position: relative;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu {
    opacity: 0;
    visibility: hidden;
    transform-origin: 50% 50%;
    transition: transform 0.3s, opacity 0.3s;
    transform-style: preserve-3d;
    transform: rotateX(-90deg);
    position: absolute;
    min-width: 250px;
    display: block;
    z-index: 1;
    top: 100%;
    list-style: outside none none;
    margin: 0;
    border-radius: 4px;
    padding: 15px;
    box-shadow: 0 4px 24px 0 rgba(62, 57, 107, 0.18);
    background: #fff;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu:after {
    display: none;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu a {
    color: #101b33;
    padding: 10px 20px 10px 30px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu a:before {
    left: 5px;
    top: 11px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu li + li > a {
    border-top-color: #ededed;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu li:after {
    display: none;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu li.active > a, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu li.pcoded-trigger > a, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu li:hover > a {
    color: #4680ff;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-submenu {
    position: absolute;
    min-width: 250px;
    z-index: 1;
    left: calc(100% + 10px);
    top: -10px;
    margin: 0 0 0 20px;
    border-radius: 4px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-submenu:before {
    content: "\6a";
    position: absolute;
    top: 8px;
    left: -31px;
    font-family: "pct";
    z-index: 1001;
    font-size: 50px;
    line-height: 1;
    color: #fff;
    width: 40px;
    height: 100%;
    text-shadow: -8px 0 13px rgba(62, 57, 107, 0.08);
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-submenu a {
    color: #101b33;
    padding: 10px 20px 10px 30px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-submenu a:before {
    left: 5px;
    top: 11px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-submenu .pcoded-submenu a {
    padding: 10px 20px 10px 30px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-submenu .pcoded-submenu a:before {
    left: 5px;
    top: 11px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-hasmenu.edge .pcoded-submenu {
    left: auto;
    margin: 0 20px 0 0;
    right: calc(100% + 10px);
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-hasmenu.edge .pcoded-submenu:before {
    content: '\6b';
    left: auto;
    right: -21px;
    text-shadow: 8px 0 13px rgba(62, 57, 107, 0.08);
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu.pcoded-trigger > .pcoded-submenu {
    opacity: 1;
    visibility: visible;
    transform: rotateX(0deg);
}

.pcoded-navbar.theme-horizontal .navbar-content {
    display: flex;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header {
    position: fixed;
    top: 0;
    margin-left: 0;
    width: 100%;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header:not(.headerpos-fixed) {
    background: #4680ff;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header .b-title {
    color: #101b33;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*='header-'] .b-title {
    color: #fff;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header .m-header {
    display: inline-flex;
    padding: 0 15px;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header .m-header .logo-main,
      .pcoded-navbar.theme-horizontal ~ .pcoded-header .m-header .logo-thumb {
    display: none;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header .m-header .logo-dark {
    display: inline-block;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header .mobile-menu {
    display: none;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .m-header {
    display: inline-flex;
    padding: 0 15px;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .m-header .logo-dark,
        .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .m-header .logo-thumb {
    display: none;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .m-header .logo-main {
    display: inline-block;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu {
    color: #373a3c;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu a {
    color: #373a3c;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li.active, .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li:active, .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li:focus, .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li:hover {
    background: rgba(70, 128, 255, 0.1);
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li.active > a, .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li:active > a, .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li:focus > a, .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] a,
      .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown .notification .noti-body li.notification:hover {
    background: rgba(70, 128, 255, 0.1);
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown .profile-notification .pro-head {
    color: #fff;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-main-container {
    margin-top: 100px;
    margin-left: 0;
    padding-top: 1px;
    min-height: calc(100vh - 100px);
}

.pcoded-navbar.theme-horizontal ~ .pcoded-main-container .page-header h5 {
    color: #37474f;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-main-container .page-header .page-header-title + .breadcrumb > .breadcrumb-item:before {
    color: rgba(55, 71, 79, 0.8);
}

.pcoded-navbar.theme-horizontal ~ .pcoded-main-container .page-header .page-header-title + .breadcrumb > .breadcrumb-item a {
    color: #37474f;
}

/* menu [ horizontal ] css end */
/* main content start */
.pcoded-content {
    position: relative;
    display: block;
    padding: 25px;
    margin-top: 140px;
}

.pcoded-main-container {
    background: #ecf0f5;
    position: relative;
    margin: 0 auto;
    padding-top: 0;
    display: block;
    clear: both;
    float: unset;
    right: 0;
    top: 0;
    margin-left: 230px;
    min-height: 100vh;
    transition: all 0.3s ease-in-out;
}

/* main content end*/
/* ==========================    Rsponsive Menu  start   ====================== */
@media only screen and (max-width: 991px) {
    .pcoded-header .input-group-text,
  .pcoded-header a,
  .pcoded-header dropdown-toggle {
        color: #101b33;
    }

    .pcoded-header .input-group-text:hover,
    .pcoded-header a:hover,
    .pcoded-header dropdown-toggle:hover {
        color: #4680ff;
    }

    .pcoded-header #mobile-header {
        display: none;
        right: 20px;
    }

    .pcoded-header > .collapse:not(.show),
  .pcoded-header .container > .collapse:not(.show) {
        background: #fff;
        box-shadow: 0 2px 10px -1px rgba(69, 90, 100, 0.3);
        position: relative;
    }

    .pcoded-header > .collapse:not(.show) .mob-toggler:after,
    .pcoded-header .container > .collapse:not(.show) .mob-toggler:after {
        content: "\e89a";
        font-family: "feather";
        font-size: 20px;
        color: #101b33;
        position: absolute;
        right: 10px;
        top: 0;
        width: 40px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .pcoded-header > .collapse:not(.show) .mr-auto,
    .pcoded-header .container > .collapse:not(.show) .mr-auto {
        height: 50px;
        display: flex;
        justify-content: center;
    }

    .pcoded-header > .collapse:not(.show) .ml-auto,
    .pcoded-header .container > .collapse:not(.show) .ml-auto {
        margin-left: auto;
        margin-right: 0 !important;
    }

    .pcoded-header .dropdown-menu,
  .pcoded-header .dropdown-menu a,
  .pcoded-header .search-close .input-group-text {
        color: #101b33;
    }

    .pcoded-header .m-header {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 50px;
    }

    .pcoded-header .m-header .mobile-menu {
        right: auto;
        left: 10px;
    }

    .pcoded-header .m-header .mob-toggler {
        display: flex;
    }

    .pcoded-header .full-screen {
        display: none;
    }

    .pcoded-header .navbar-nav > li:last-child {
        padding-right: 20px;
    }

    .pcoded-navbar {
        margin-left: -230px;
        position: absolute;
        height: calc(100% - 50px);
    }

    .pcoded-navbar .scroll-div.navbar-content {
        height: 100%;
    }

    .pcoded-navbar ~ .pcoded-header,
    .pcoded-navbar ~ .pcoded-main-container {
        margin-left: 0;
    }

    .pcoded-navbar ~ .pcoded-header {
        width: 100%;
    }

    .pcoded-navbar .navbar-brand {
        display: none;
    }

    .pcoded-navbar.mob-open {
        margin-left: 0;
    }

    .pcoded-navbar.mob-open .pcoded-main-container ~ .pcoded-header,
      .pcoded-navbar.mob-open ~ .pcoded-main-container {
        margin-left: 0;
    }

    .pcoded-main-container {
        padding-top: 0;
    }
}

@media only screen and (max-width: 575px) {
    .pcoded-header .main-search.open .input-group .search-close {
        display: none;
    }

    .pcoded-header .navbar-nav > li {
        padding: 0 8px;
    }

    .pcoded-header .navbar-nav.ml-auto > li:first-child {
        padding-left: 0;
    }

    .pcoded-header .navbar-nav > li:last-child {
        padding-right: 15px;
    }

    .pcoded-header .navbar-nav.mr-auto li.nav-item:not(.dropdown) {
        display: block;
        padding-right: 0;
    }

    .pcoded-header .navbar-nav.mr-auto li.nav-item:not(.dropdown) .search-close {
        display: none;
    }

    .pcoded-header .dropdown.show {
        position: static;
    }

    .pcoded-header .dropdown.show a:after {
        display: none;
    }

    .pcoded-header .dropdown.show:before {
        display: none;
    }

    .pcoded-header .dropdown .notification {
        width: 100%;
    }

    .pcoded-header .dropdown .dropdown-menu {
        width: 95%;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
    }

    .header-chat.open,
  .header-user-list.open {
        width: 280px;
    }

    .pcoded-content {
        padding: 25px 15px;
    }

    .card {
        margin-bottom: 15px;
    }
}

@media only screen and (max-width: 1200px) and (min-width: 768px) {
    .pcoded-navbar .header-logo {
        transition: none;
    }

    .pcoded-navbar.navbar-collapsed {
        transition: none;
    }

    .pcoded-navbar.navbar-collapsed .header-logo img {
        transition: none;
    }

    .pcoded-navbar.navbar-collapsed .pcoded-menu-caption > label {
        transition: none;
    }

    .pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li > a > .pcoded-mtext {
        transition: none;
    }

    .pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li.pcoded-hasmenu > a:after {
        transition: none;
        transition-delay: 0;
    }

    .pcoded-navbar.navbar-collapsed .pcoded-badge {
        transition: none;
    }

    .pcoded-navbar.navbar-collapsed:hover .pcoded-badge {
        transition-delay: 0;
    }
}

/* responsive horizontal menu */
@media only screen and (max-width: 991px) {
    .pcoded-navbar.theme-horizontal {
        margin-left: 0;
    }

    .pcoded-navbar.theme-horizontal ~ .pcoded-header > .collapse:not(.show),
    .pcoded-navbar.theme-horizontal ~ .pcoded-header .container > .collapse:not(.show) {
        display: inline-flex;
        background: #fff;
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    }

    .pcoded-navbar.theme-horizontal ~ .pcoded-header .b-title {
        color: #fff;
    }

    .pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu.pcoded-trigger > .pcoded-submenu .pcoded-trigger > .pcoded-submenu,
    .pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu.pcoded-trigger > .pcoded-submenu .pcoded-trigger.edge > .pcoded-submenu {
        position: relative;
        left: 0;
        min-width: 100%;
        margin: 0;
        box-shadow: none;
    }

    .pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu.pcoded-trigger > .pcoded-submenu .pcoded-trigger > .pcoded-submenu:before,
      .pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu.pcoded-trigger > .pcoded-submenu .pcoded-trigger.edge > .pcoded-submenu:before {
        display: none;
    }
}

/* ==========================    Rsponsive Menu  end   ====================== */
/* ******************************************************************************* */
/* * Horizontal */
.theme-horizontal .sidenav-horizontal-wrapper {
    flex: 1 1 auto;
    width: 0;
}

.sidenav:not(.sidenav-no-animation) .theme-horizontal .sidenav-horizontal-wrapper .sidenav-inner {
    transition: margin 0.2s;
}

.theme-horizontal .sidenav-horizontal-next,
.theme-horizontal .sidenav-horizontal-prev {
    position: relative;
    display: block;
    flex: 0 0 auto;
    width: 2.25rem;
    background-color: #101b33;
    z-index: 9;
}

.theme-horizontal .sidenav-horizontal-next::after,
  .theme-horizontal .sidenav-horizontal-prev::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    display: block;
    width: 0.8rem;
    height: 0.8rem;
    border: 2px solid;
    border-top: 0;
}

.theme-horizontal .sidenav-horizontal-next.disabled,
  .theme-horizontal .sidenav-horizontal-prev.disabled {
    cursor: default !important;
    opacity: 0;
}

.theme-horizontal .sidenav-horizontal-prev::after {
    border-right: 0;
    transform: translate(-50%, -50%) rotate(45deg);
}

.theme-horizontal .sidenav-horizontal-next::after {
    border-left: 0;
    transform: translate(-50%, -50%) rotate(-45deg);
}

.theme-horizontal .sidenav-horizontal:after, .theme-horizontal .sidenav-horizontal:before {
    content: "";
    background: #101b33;
    width: 100%;
    position: absolute;
    top: 0;
    height: 100%;
    z-index: 5;
}

@media only screen and (max-width: 991px) {
    .theme-horizontal .sidenav-horizontal:after, .theme-horizontal .sidenav-horizontal:before {
        display: none;
    }
}

.theme-horizontal .sidenav-horizontal:before {
    left: 100%;
}

.theme-horizontal .sidenav-horizontal:after {
    right: 100%;
}

.theme-horizontal.menu-light .sidenav-horizontal:after, .theme-horizontal.menu-light .sidenav-horizontal:before {
    background: #fff;
}

@-webkit-keyframes sidenavDropdownShow {
    0% {
        opacity: 0;
        transform: translateY(-0.5rem);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes sidenavDropdownShow {
    0% {
        opacity: 0;
        transform: translateY(-0.5rem);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.pcoded-navbar .card {
    background: rgba(255, 255, 255, 0.1);
    margin: 20px;
    box-shadow: 0 0 0 1px rgba(226, 229, 232, 0.15);
    color: rgba(255, 255, 255, 0.6);
}

.pcoded-navbar .card h6 {
    color: rgba(255, 255, 255, 0.6);
}

.pcoded-navbar .card .close {
    position: absolute;
    color: #97a7c1;
    position: absolute;
    top: 10px;
    right: 12px;
    opacity: 0.8;
    text-shadow: none;
}

.pcoded-navbar.menu-light .card {
    background: rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 0 1px #ecf0f5;
    color: rgba(0, 0, 0, 0.6);
}

.pcoded-navbar.menu-light .card h6 {
    color: #535763;
}

.pcoded-navbar.menu-light .card .close {
    color: #535763;
}

.pcoded-navbar.navbar-collapsed .card {
    display: none;
}

.menu-styler {
    z-index: 1029;
    position: relative;
    color: #373a3c;
}

.menu-styler h5,
  .menu-styler h6 {
    color: #37474f;
}

.menu-styler hr {
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}

.menu-styler .style-toggler > a {
    position: fixed;
    right: 0;
    top: 80px;
    z-index: 1031;
    transition: 0.3s ease-in-out;
}

.menu-styler .style-toggler > a:before {
    content: "";
    width: 45px;
    height: 45px;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1001;
    background: #ff5252;
    transition: 0.3s ease-in-out;
    border-radius: 30px 0 0 30px;
    box-shadow: -4px 0 8px rgba(255, 82, 82, 0.16), -6px 0 8px rgba(0, 0, 0, 0.1);
}

.menu-styler .style-toggler > a:after {
    content: "\e849";
    top: 12px;
    font-size: 21px;
    position: absolute;
    right: 11px;
    font-family: "feather";
    z-index: 1029;
    line-height: 1;
    color: #fff;
    transition: 0.3s ease-in-out;
}

@media all and (-ms-high-contrast: none) {
    .menu-styler .style-toggler > a:after {
        line-height: 0.5;
        top: 18px;
    }
}

.menu-styler.open .style-toggler > a, .menu-styler.prebuild-open .style-toggler > a {
    right: 400px;
    -webkit-animation: sh-shake 0s ease infinite;
    animation: sh-shake 0s ease infinite;
}

.menu-styler.open .style-toggler > a:after, .menu-styler.prebuild-open .style-toggler > a:after {
    content: "\e847";
    -webkit-animation: anim-rotate 0s linear infinite;
    animation: anim-rotate 0s linear infinite;
}

.menu-styler.open .prebuild-toggler > .prebuild-group, .menu-styler.prebuild-open .prebuild-toggler > .prebuild-group {
    right: calc(400px - 100px);
}

.menu-styler.open .style-block {
    right: 0;
    box-shadow: -6px 0 12px rgba(0, 0, 0, 0.175);
}

.menu-styler.prebuild-open .style-block-prebuild {
    right: 0;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
}

.menu-styler .style-block,
  .menu-styler .style-block-prebuild {
    position: fixed;
    top: 0;
    right: -400px;
    width: 400px;
    border-radius: 4px 0 0 4px;
    background: #fff;
    z-index: 1030;
    transition: 0.3s ease-in-out;
    padding: 25px 20px 20px;
}

.menu-styler .mst-scroll {
    height: calc(100vh - 175px);
    background-color: rgba(70, 128, 255, 0.03);
    padding: 0 15px;
}

.menu-styler label {
    margin-bottom: 3px;
}

.menu-styler .switch input[type=checkbox] + .cr {
    top: 8px;
}

.menu-styler .radio input[type=radio] + .cr {
    margin-right: 10px;
}

.menu-styler .radio input[type=radio] + .cr:after, .menu-styler .radio input[type=radio] + .cr:before {
    margin-right: 3px;
}

.menu-styler h6 {
    position: relative;
    margin: 20px 0 10px;
}

.menu-styler .nav-pills {
    padding: 0;
    box-shadow: none;
}

.menu-styler .nav-pills li {
    width: calc(100% / 3);
}

.menu-styler .m-style-scroller {
    padding: 15px 20px;
    box-shadow: none;
    background-color: #ecf0f5;
    border-radius: 4px;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.24);
}

@media only screen and (max-width: 992px) {
    .menu-styler {
        display: none;
    }
}

@-webkit-keyframes sh-shake {
    0%,
  100%,
  25% {
        transform: scale(1);
    }

    15%,
  3%,
  9% {
        transform: scale(1.1);
    }

    12%,
  20%,
  6% {
        transform: scale(0.9);
    }
}

@keyframes sh-shake {
    0%,
  100%,
  25% {
        transform: scale(1);
    }

    15%,
  3%,
  9% {
        transform: scale(1.1);
    }

    12%,
  20%,
  6% {
        transform: scale(0.9);
    }
}

.lay-customizer .theme-color,
.theme-color {
    display: block;
    position: relative;
    padding: 0;
    margin-bottom: 10px;
}

.lay-customizer .theme-color > a,
  .theme-color > a {
    position: relative;
    width: 45px;
    height: 30px;
    border-radius: 3px;
    display: inline-block;
    background: #ecf0f5;
    overflow: hidden;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.28);
}

.lay-customizer .theme-color > a + a,
    .theme-color > a + a {
    margin-left: 8px;
}

.lay-customizer .theme-color > a span,
    .theme-color > a span {
    width: 100%;
    position: absolute;
}

.lay-customizer .theme-color > a span:after, .lay-customizer .theme-color > a span:before,
      .theme-color > a span:after,
      .theme-color > a span:before {
    content: "";
    height: 100%;
    position: absolute;
}

.lay-customizer .theme-color > a span:before,
      .theme-color > a span:before {
    width: 32%;
    left: 0;
    background: #101b33;
}

.lay-customizer .theme-color > a span:after,
      .theme-color > a span:after {
    width: 70%;
    right: 0;
    background: #ecf0f5;
}

.lay-customizer .theme-color > a > span:nth-child(1),
    .theme-color > a > span:nth-child(1) {
    height: 30%;
    top: 0;
}

.lay-customizer .theme-color > a > span:nth-child(1):after,
      .theme-color > a > span:nth-child(1):after {
    background: #fff;
}

.lay-customizer .theme-color > a > span:nth-child(2),
    .theme-color > a > span:nth-child(2) {
    height: 75%;
    bottom: 0;
}

.lay-customizer .theme-color > a > span:nth-child(2):before,
      .theme-color > a > span:nth-child(2):before {
    border-radius: 0 3px 0 0;
}

.lay-customizer .theme-color > a.active:before,
    .theme-color > a.active:before {
    content: "\e83e";
    top: 1px;
    font-size: 20px;
    position: absolute;
    left: 12px;
    font-family: "feather";
    z-index: 1001;
    color: #4680ff;
    transition: 0.3s ease-in-out;
    text-shadow: 0 1px 3px rgba(70, 128, 255, 0.9), 0 3px 8px rgba(0, 0, 0, 0.1);
}

.lay-customizer .theme-color > a.active:after,
    .theme-color > a.active:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);
}

.lay-customizer .theme-color > a[data-value="menu-light"] span:before,
    .theme-color > a[data-value="menu-light"] span:before {
    background: #fff;
}

.lay-customizer .theme-color > a[data-value="dark"] span:after,
    .theme-color > a[data-value="dark"] span:after {
    background: black;
}

.lay-customizer .theme-color > a[data-value="reset"],
    .theme-color > a[data-value="reset"] {
    background: #ff5252;
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    top: -10px;
    width: 135px;
    box-shadow: none;
}

.lay-customizer .theme-color.small > a,
  .theme-color.small > a {
    width: 25px;
    height: 25px;
    border-radius: 50%;
}

.lay-customizer .theme-color.small > a:before,
    .theme-color.small > a:before {
    font-size: 15px;
    left: 5px;
    top: 1px;
}

.lay-customizer .theme-color.small > a > span,
    .theme-color.small > a > span {
    display: none;
}

.lay-customizer .theme-color.header-color > a[data-value="header-blue"] > span:nth-child(1):after,
  .theme-color.header-color > a[data-value="header-blue"] > span:nth-child(1):after {
    background: #4680ff;
}

.lay-customizer .theme-color.header-color.small > a[data-value="header-blue"],
  .theme-color.header-color.small > a[data-value="header-blue"] {
    background: #4680ff;
}

.lay-customizer .theme-color.header-color > a[data-value="header-red"] > span:nth-child(1):after,
  .theme-color.header-color > a[data-value="header-red"] > span:nth-child(1):after {
    background: #ff5252;
}

.lay-customizer .theme-color.header-color.small > a[data-value="header-red"],
  .theme-color.header-color.small > a[data-value="header-red"] {
    background: #ff5252;
}

.lay-customizer .theme-color.header-color > a[data-value="header-purple"] > span:nth-child(1):after,
  .theme-color.header-color > a[data-value="header-purple"] > span:nth-child(1):after {
    background: #536dfe;
}

.lay-customizer .theme-color.header-color.small > a[data-value="header-purple"],
  .theme-color.header-color.small > a[data-value="header-purple"] {
    background: #536dfe;
}

.lay-customizer .theme-color.header-color > a[data-value="header-info"] > span:nth-child(1):after,
  .theme-color.header-color > a[data-value="header-info"] > span:nth-child(1):after {
    background: #00bcd4;
}

.lay-customizer .theme-color.header-color.small > a[data-value="header-info"],
  .theme-color.header-color.small > a[data-value="header-info"] {
    background: #00bcd4;
}

.lay-customizer .theme-color.header-color > a[data-value="header-green"] > span:nth-child(1):after,
  .theme-color.header-color > a[data-value="header-green"] > span:nth-child(1):after {
    background: #9ccc65;
}

.lay-customizer .theme-color.header-color.small > a[data-value="header-green"],
  .theme-color.header-color.small > a[data-value="header-green"] {
    background: #9ccc65;
}

.lay-customizer .theme-color.header-color > a[data-value="header-dark"] > span:nth-child(1):after,
  .theme-color.header-color > a[data-value="header-dark"] > span:nth-child(1):after {
    background: #101b33;
}

.lay-customizer .theme-color.header-color.small > a[data-value="header-dark"],
  .theme-color.header-color.small > a[data-value="header-dark"] {
    background: #101b33;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-blue"],
  .theme-color.background-color.flat > a[data-value="background-blue"] {
    background: #4680ff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(1):before,
    .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(1):after,
    .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(2):before,
    .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(2):after,
    .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-red"],
  .theme-color.background-color.flat > a[data-value="background-red"] {
    background: #ff5252;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(1):before,
    .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(1):after,
    .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(2):before,
    .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(2):after,
    .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-purple"],
  .theme-color.background-color.flat > a[data-value="background-purple"] {
    background: #536dfe;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(1):before,
    .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(1):after,
    .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(2):before,
    .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(2):after,
    .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-info"],
  .theme-color.background-color.flat > a[data-value="background-info"] {
    background: #00bcd4;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(1):before,
    .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(1):after,
    .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(2):before,
    .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(2):after,
    .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-green"],
  .theme-color.background-color.flat > a[data-value="background-green"] {
    background: #9ccc65;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(1):before,
    .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(1):after,
    .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(2):before,
    .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(2):after,
    .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-dark"],
  .theme-color.background-color.flat > a[data-value="background-dark"] {
    background: #101b33;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(1):before,
    .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(1):after,
    .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(2):before,
    .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(2):after,
    .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-blue"],
  .theme-color.background-color.gradient > a[data-value="background-grd-blue"] {
    background: linear-gradient(to right, #4680ff 0%, #00f2fe 100%);
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(1):before,
    .theme-color.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(1):after,
    .theme-color.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(2):before,
    .theme-color.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(2):after,
    .theme-color.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-red"],
  .theme-color.background-color.gradient > a[data-value="background-grd-red"] {
    background: linear-gradient(to right, #ff5252 0%, #ff9a44 100%);
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(1):before,
    .theme-color.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(1):after,
    .theme-color.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(2):before,
    .theme-color.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(2):after,
    .theme-color.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-purple"],
  .theme-color.background-color.gradient > a[data-value="background-grd-purple"] {
    background: linear-gradient(to right, #536dfe 0%, #00adff 100%);
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(1):before,
    .theme-color.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(1):after,
    .theme-color.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(2):before,
    .theme-color.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(2):after,
    .theme-color.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-info"],
  .theme-color.background-color.gradient > a[data-value="background-grd-info"] {
    background: linear-gradient(to right, #00bcd4 0%, #22e1ff 100%);
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(1):before,
    .theme-color.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(1):after,
    .theme-color.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(2):before,
    .theme-color.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(2):after,
    .theme-color.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-green"],
  .theme-color.background-color.gradient > a[data-value="background-grd-green"] {
    background: linear-gradient(to right, #9ccc65 0%, #00e3ae 100%);
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(1):before,
    .theme-color.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(1):after,
    .theme-color.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(2):before,
    .theme-color.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(2):after,
    .theme-color.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-dark"],
  .theme-color.background-color.gradient > a[data-value="background-grd-dark"] {
    background: linear-gradient(to right, #101b33 0%, #1f3054 100%);
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(1):before,
    .theme-color.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(1):after,
    .theme-color.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(2):before,
    .theme-color.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(2):after,
    .theme-color.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.image > a,
  .theme-color.background-color.image > a {
    background-size: contain;
    background-repeat: no-repeat;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-1"],
  .theme-color.background-color.image > a[data-value="background-img-1"] {
    background-image: url("../images/nav-bg/body-bg-1.jpg");
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-1"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.image > a[data-value="background-img-1"] > span:nth-child(1):before,
    .theme-color.background-color.image > a[data-value="background-img-1"] > span:nth-child(1):after,
    .theme-color.background-color.image > a[data-value="background-img-1"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-1"] > span:nth-child(2):before,
    .theme-color.background-color.image > a[data-value="background-img-1"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-1"] > span:nth-child(2):after,
    .theme-color.background-color.image > a[data-value="background-img-1"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-2"],
  .theme-color.background-color.image > a[data-value="background-img-2"] {
    background-image: url("../images/nav-bg/body-bg-2.jpg");
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-2"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.image > a[data-value="background-img-2"] > span:nth-child(1):before,
    .theme-color.background-color.image > a[data-value="background-img-2"] > span:nth-child(1):after,
    .theme-color.background-color.image > a[data-value="background-img-2"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-2"] > span:nth-child(2):before,
    .theme-color.background-color.image > a[data-value="background-img-2"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-2"] > span:nth-child(2):after,
    .theme-color.background-color.image > a[data-value="background-img-2"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-3"],
  .theme-color.background-color.image > a[data-value="background-img-3"] {
    background-image: url("../images/nav-bg/body-bg-3.jpg");
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-3"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.image > a[data-value="background-img-3"] > span:nth-child(1):before,
    .theme-color.background-color.image > a[data-value="background-img-3"] > span:nth-child(1):after,
    .theme-color.background-color.image > a[data-value="background-img-3"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-3"] > span:nth-child(2):before,
    .theme-color.background-color.image > a[data-value="background-img-3"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-3"] > span:nth-child(2):after,
    .theme-color.background-color.image > a[data-value="background-img-3"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-4"],
  .theme-color.background-color.image > a[data-value="background-img-4"] {
    background-image: url("../images/nav-bg/body-bg-4.jpg");
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-4"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.image > a[data-value="background-img-4"] > span:nth-child(1):before,
    .theme-color.background-color.image > a[data-value="background-img-4"] > span:nth-child(1):after,
    .theme-color.background-color.image > a[data-value="background-img-4"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-4"] > span:nth-child(2):before,
    .theme-color.background-color.image > a[data-value="background-img-4"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-4"] > span:nth-child(2):after,
    .theme-color.background-color.image > a[data-value="background-img-4"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-5"],
  .theme-color.background-color.image > a[data-value="background-img-5"] {
    background-image: url("../images/nav-bg/body-bg-5.jpg");
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-5"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.image > a[data-value="background-img-5"] > span:nth-child(1):before,
    .theme-color.background-color.image > a[data-value="background-img-5"] > span:nth-child(1):after,
    .theme-color.background-color.image > a[data-value="background-img-5"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-5"] > span:nth-child(2):before,
    .theme-color.background-color.image > a[data-value="background-img-5"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-5"] > span:nth-child(2):after,
    .theme-color.background-color.image > a[data-value="background-img-5"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-6"],
  .theme-color.background-color.image > a[data-value="background-img-6"] {
    background-image: url("../images/nav-bg/body-bg-6.jpg");
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-6"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.image > a[data-value="background-img-6"] > span:nth-child(1):before,
    .theme-color.background-color.image > a[data-value="background-img-6"] > span:nth-child(1):after,
    .theme-color.background-color.image > a[data-value="background-img-6"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-6"] > span:nth-child(2):before,
    .theme-color.background-color.image > a[data-value="background-img-6"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.image > a[data-value="background-img-6"] > span:nth-child(2):after,
    .theme-color.background-color.image > a[data-value="background-img-6"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #ecf0f5 0%);
}

.doc-img > a {
    position: relative;
    width: 130px;
    height: 80px;
    display: inline-block;
    background: #ecf0f5;
    overflow: hidden;
    box-shadow: 0 0 0 1px #e2e5e8;
}

.doc-img > a span {
    width: 100%;
    position: absolute;
}

.doc-img > a span:after, .doc-img > a span:before {
    content: "";
    height: 100%;
    position: absolute;
}

.doc-img > a span:before {
    width: 30%;
    left: 0;
    background: #101b33;
}

.doc-img > a span:after {
    width: 70%;
    right: 0;
    background: #ecf0f5;
}

.doc-img > a > span:nth-child(1) {
    height: 20%;
    top: 0;
}

.doc-img > a > span:nth-child(1):after {
    background: #fff;
}

.doc-img > a > span:nth-child(2) {
    height: 80%;
    bottom: 0;
}

.doc-img > a > span:nth-child(2):before {
    border-radius: 0 5px 0 0;
}

.doc-img > a.active {
    border-color: #4680ff;
}

.doc-img > a.active:before {
    content: "\e83f";
    top: -4px;
    font-size: 20px;
    position: absolute;
    left: 10px;
    font-family: "feather";
    z-index: 1001;
    color: #4680ff;
    transition: 0.3s ease-in-out;
    text-shadow: 0 3px 8px rgba(70, 128, 255, 0.9), 0 3px 8px rgba(0, 0, 0, 0.1);
}

.doc-img > a.active:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.65);
}

.doc-img > a[data-value="menu-light"] span:before {
    background: #fff;
}

.doc-img > a[data-value="dark"] span:after {
    background: black;
}

.doc-img.header-color > a[data-value="header-blue"] > span:nth-child(1):after {
    background: #4680ff;
}

.doc-img.header-color > a[data-value="header-red"] > span:nth-child(1):after {
    background: #ff5252;
}

.doc-img.header-color > a[data-value="header-purple"] > span:nth-child(1):after {
    background: #536dfe;
}

.doc-img.header-color > a[data-value="header-info"] > span:nth-child(1):after {
    background: #00bcd4;
}

.doc-img.header-color > a[data-value="header-green"] > span:nth-child(1):after {
    background: #9ccc65;
}

.doc-img.header-color > a[data-value="header-dark"] > span:nth-child(1):after {
    background: #101b33;
}

.doc-img.background-color.flat > a[data-value="background-blue"] {
    background: #4680ff;
}

.doc-img.background-color.flat > a[data-value="background-blue"] > span:nth-child(1):after, .doc-img.background-color.flat > a[data-value="background-blue"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.flat > a[data-value="background-blue"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.flat > a[data-value="background-blue"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.flat > a[data-value="background-red"] {
    background: #ff5252;
}

.doc-img.background-color.flat > a[data-value="background-red"] > span:nth-child(1):after, .doc-img.background-color.flat > a[data-value="background-red"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.flat > a[data-value="background-red"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.flat > a[data-value="background-red"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.flat > a[data-value="background-purple"] {
    background: #536dfe;
}

.doc-img.background-color.flat > a[data-value="background-purple"] > span:nth-child(1):after, .doc-img.background-color.flat > a[data-value="background-purple"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.flat > a[data-value="background-purple"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.flat > a[data-value="background-purple"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.flat > a[data-value="background-info"] {
    background: #00bcd4;
}

.doc-img.background-color.flat > a[data-value="background-info"] > span:nth-child(1):after, .doc-img.background-color.flat > a[data-value="background-info"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.flat > a[data-value="background-info"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.flat > a[data-value="background-info"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.flat > a[data-value="background-green"] {
    background: #9ccc65;
}

.doc-img.background-color.flat > a[data-value="background-green"] > span:nth-child(1):after, .doc-img.background-color.flat > a[data-value="background-green"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.flat > a[data-value="background-green"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.flat > a[data-value="background-green"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.flat > a[data-value="background-dark"] {
    background: #101b33;
}

.doc-img.background-color.flat > a[data-value="background-dark"] > span:nth-child(1):after, .doc-img.background-color.flat > a[data-value="background-dark"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.flat > a[data-value="background-dark"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.flat > a[data-value="background-dark"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-blue"] {
    background: linear-gradient(to right, #4680ff 0%, #00f2fe 100%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(1):after, .doc-img.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-red"] {
    background: linear-gradient(to right, #ff5252 0%, #ff9a44 100%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(1):after, .doc-img.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-purple"] {
    background: linear-gradient(to right, #536dfe 0%, #00adff 100%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(1):after, .doc-img.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-info"] {
    background: linear-gradient(to right, #00bcd4 0%, #22e1ff 100%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(1):after, .doc-img.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-green"] {
    background: linear-gradient(to right, #9ccc65 0%, #00e3ae 100%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(1):after, .doc-img.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-dark"] {
    background: linear-gradient(to right, #101b33 0%, #1f3054 100%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(1):after, .doc-img.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.image > a {
    background-size: cover;
    background-repeat: no-repeat;
}

.doc-img.background-color.image > a[data-value="background-img-1"] {
    background-image: url("../images/nav-bg/body-bg-1.jpg");
}

.doc-img.background-color.image > a[data-value="background-img-1"] > span:nth-child(1):after, .doc-img.background-color.image > a[data-value="background-img-1"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.image > a[data-value="background-img-1"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.image > a[data-value="background-img-1"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.image > a[data-value="background-img-2"] {
    background-image: url("../images/nav-bg/body-bg-2.jpg");
}

.doc-img.background-color.image > a[data-value="background-img-2"] > span:nth-child(1):after, .doc-img.background-color.image > a[data-value="background-img-2"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.image > a[data-value="background-img-2"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.image > a[data-value="background-img-2"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.image > a[data-value="background-img-3"] {
    background-image: url("../images/nav-bg/body-bg-3.jpg");
}

.doc-img.background-color.image > a[data-value="background-img-3"] > span:nth-child(1):after, .doc-img.background-color.image > a[data-value="background-img-3"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.image > a[data-value="background-img-3"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.image > a[data-value="background-img-3"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.image > a[data-value="background-img-4"] {
    background-image: url("../images/nav-bg/body-bg-4.jpg");
}

.doc-img.background-color.image > a[data-value="background-img-4"] > span:nth-child(1):after, .doc-img.background-color.image > a[data-value="background-img-4"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.image > a[data-value="background-img-4"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.image > a[data-value="background-img-4"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.image > a[data-value="background-img-5"] {
    background-image: url("../images/nav-bg/body-bg-5.jpg");
}

.doc-img.background-color.image > a[data-value="background-img-5"] > span:nth-child(1):after, .doc-img.background-color.image > a[data-value="background-img-5"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.image > a[data-value="background-img-5"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.image > a[data-value="background-img-5"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

.doc-img.background-color.image > a[data-value="background-img-6"] {
    background-image: url("../images/nav-bg/body-bg-6.jpg");
}

.doc-img.background-color.image > a[data-value="background-img-6"] > span:nth-child(1):after, .doc-img.background-color.image > a[data-value="background-img-6"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.image > a[data-value="background-img-6"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.image > a[data-value="background-img-6"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #ecf0f5 0%);
}

/* ===================================================================================
 ==========================    Diffrent Layout Styles Start     ====================
 ===================================================================================
 ====== [ light menu style start ] ======== */
.pcoded-navbar.menu-light {
    background-color: #fff;
    color: #535763;
}

.pcoded-navbar.menu-light .header-logo {
    background-color: #101b33;
}

.pcoded-navbar.menu-light .header-logo .logo-dark {
    display: none;
}

.pcoded-navbar.menu-light .header-logo .logo-main {
    display: block;
}

.pcoded-navbar.menu-light .sidenav-horizontal-next,
  .pcoded-navbar.menu-light .sidenav-horizontal-prev {
    background: #fff;
}

.pcoded-navbar.menu-light .main-menu-header + div .list-inline {
    border-top-color: rgba(151, 167, 193, 0.5);
    border-bottom-color: rgba(151, 167, 193, 0.5);
}

.pcoded-navbar.menu-light .mobile-menu span {
    background-color: rgba(255, 255, 255, 0.8);
}

.pcoded-navbar.menu-light .mobile-menu span:after, .pcoded-navbar.menu-light .mobile-menu span:before {
    background-color: rgba(255, 255, 255, 0.8);
}

.pcoded-navbar.menu-light .mobile-menu.on span {
    background-color: transparent;
}

.pcoded-navbar.menu-light .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li + li > a {
    border-top: 1px solid rgba(151, 167, 193, 0.5);
}

.pcoded-navbar.menu-light .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li.active > a:before, .pcoded-navbar.menu-light .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li.pcoded-trigger > a:before, .pcoded-navbar.menu-light .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li:hover > a:before {
    color: #4680ff;
}

.pcoded-navbar.menu-light .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li + li > a {
    border-top-color: #ededed;
}

.pcoded-navbar.menu-light .pcoded-submenu {
    background: #fff;
}

.pcoded-navbar.menu-light a {
    color: #535763;
}

.pcoded-navbar.menu-light.navbar-collapsed .pcoded-menu-caption:after {
    background: rgba(0, 0, 0, 0.1);
}

.pcoded-navbar.menu-light.navbar-collapsed:hover .pcoded-menu-caption:after {
    background: transparent;
}

.pcoded-navbar.menu-light .pcoded-menu-caption {
    color: #535763;
}

.pcoded-navbar.menu-light .pcoded-inner-navbar li.active > a, .pcoded-navbar.menu-light .pcoded-inner-navbar li.pcoded-trigger > a, .pcoded-navbar.menu-light .pcoded-inner-navbar li:hover > a {
    color: #4680ff;
    background: transparent;
}

.pcoded-navbar.menu-light .pcoded-inner-navbar > li.active > a, .pcoded-navbar.menu-light .pcoded-inner-navbar > li.pcoded-trigger > a {
    background: #4680ff;
    color: #fff;
}

.pcoded-navbar.menu-light.theme-horizontal .pcoded-inner-navbar > li.active a, .pcoded-navbar.menu-light.theme-horizontal .pcoded-inner-navbar > li.pcoded-trigger a, .pcoded-navbar.menu-light.theme-horizontal .pcoded-inner-navbar > li:hover a {
    color: #535763;
    background: transparent;
}

.pcoded-navbar.menu-light.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.active:before, .pcoded-navbar.menu-light.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.pcoded-trigger:before {
    color: #fff;
}

/* ====== [ light menu style end ] ======== */
/* ====== [ Header color start ] ======== */
.pcoded-header[class*="header-"] .mobile-menu span {
    background-color: rgba(255, 255, 255, 0.8);
}

.pcoded-header[class*="header-"] .mobile-menu span:after, .pcoded-header[class*="header-"] .mobile-menu span:before {
    background-color: rgba(255, 255, 255, 0.8);
}

.pcoded-header[class*="header-"] .mobile-menu:hover span {
    background-color: #fff;
}

.pcoded-header[class*="header-"] .mobile-menu:hover span:after, .pcoded-header[class*="header-"] .mobile-menu:hover span:before {
    background-color: #fff;
}

@media only screen and (min-width: 992px) {
    .pcoded-header[class*="header-"] .page-header .breadcrumb-item + .breadcrumb-item::before,
  .pcoded-header[class*="header-"] .page-header .page-header-title + .breadcrumb > .breadcrumb-item a,
  .pcoded-header[class*="header-"] .page-header h5 {
        color: #fff;
    }
}

.pcoded-header.header-blue {
    background: #4680ff;
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-blue:not(.headerpos-fixed) {
    background: transparent;
}

.pcoded-header.header-blue .profile-notification li > a {
    color: #373a3c;
}

.pcoded-header.header-blue .profile-notification li.active, .pcoded-header.header-blue .profile-notification li:active, .pcoded-header.header-blue .profile-notification li:focus, .pcoded-header.header-blue .profile-notification li:hover {
    background: rgba(70, 128, 255, 0.1);
}

.pcoded-header.header-blue .profile-notification li.active > a, .pcoded-header.header-blue .profile-notification li:active > a, .pcoded-header.header-blue .profile-notification li:focus > a, .pcoded-header.header-blue .profile-notification li:hover > a {
    background: transparent;
}

.pcoded-header.header-blue .dropdown-menu {
    color: #373a3c;
}

.pcoded-header.header-blue .dropdown-menu a {
    color: #373a3c;
}

.pcoded-header.header-blue .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-header.header-blue .dropdown-menu > li.active, .pcoded-header.header-blue .dropdown-menu > li:active, .pcoded-header.header-blue .dropdown-menu > li:focus, .pcoded-header.header-blue .dropdown-menu > li:hover {
    background: rgba(70, 128, 255, 0.1);
    color: #373a3c;
}

.pcoded-header.header-blue .dropdown-menu > li.active > a, .pcoded-header.header-blue .dropdown-menu > li:active > a, .pcoded-header.header-blue .dropdown-menu > li:focus > a, .pcoded-header.header-blue .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-header.header-blue .input-group .input-group-text,
  .pcoded-header.header-blue a,
  .pcoded-header.header-blue dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-blue .input-group .input-group-text:hover,
    .pcoded-header.header-blue a:hover,
    .pcoded-header.header-blue dropdown-toggle:hover {
    color: #fff;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-blue .input-group .input-group-text,
      .pcoded-header.header-blue a,
      .pcoded-header.header-blue dropdown-toggle {
        color: #535763;
    }

    .pcoded-header.header-blue .input-group .input-group-text:hover,
        .pcoded-header.header-blue a:hover,
        .pcoded-header.header-blue dropdown-toggle:hover {
        color: #3c3f47;
    }
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-blue .m-header > a {
        color: #fff;
    }
}

.pcoded-header.header-blue .main-search .search-close > .input-group-text {
    color: #4680ff;
}

.pcoded-header.header-blue .main-search.open .input-group {
    background: rgba(255, 255, 255, 0.25);
    border: 0 solid rgba(255, 255, 255, 0.25);
    padding: 2px 2px 2px 20px;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-blue .main-search.open .input-group {
        background: #ecf0f5;
    }
}

@media only screen and (min-width: 992px) {
    .pcoded-header.header-blue .main-search.open .input-group .form-control {
        color: #fff;
    }

    .pcoded-header.header-blue .main-search.open .input-group .form-control::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .pcoded-header.header-blue .main-search.open .input-group .form-control:-ms-input-placeholder {
        color: #fff;
    }

    .pcoded-header.header-blue .main-search.open .input-group .form-control::-webkit-input-placeholder {
        color: #fff;
    }
}

.pcoded-header.header-blue .main-search.open .input-group .search-btn {
    background: #4680ff;
    border-color: #4680ff;
}

.pcoded-header.header-blue .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header.header-blue .dropdown .notification .noti-head a {
    color: #fff;
}

.pcoded-header.header-blue .dropdown .notification .noti-body li.notification:hover {
    background: rgba(70, 128, 255, 0.1);
}

.pcoded-header.header-blue .dropdown .profile-notification .pro-head {
    color: #fff;
}

.pcoded-header.header-blue .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-header.header-blue .b-bg {
    background: #fff;
    color: #4680ff;
}

.pcoded-header.header-red {
    background: #ff5252;
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-red:not(.headerpos-fixed) {
    background: transparent;
}

.pcoded-header.header-red .profile-notification li > a {
    color: #373a3c;
}

.pcoded-header.header-red .profile-notification li.active, .pcoded-header.header-red .profile-notification li:active, .pcoded-header.header-red .profile-notification li:focus, .pcoded-header.header-red .profile-notification li:hover {
    background: rgba(255, 82, 82, 0.1);
}

.pcoded-header.header-red .profile-notification li.active > a, .pcoded-header.header-red .profile-notification li:active > a, .pcoded-header.header-red .profile-notification li:focus > a, .pcoded-header.header-red .profile-notification li:hover > a {
    background: transparent;
}

.pcoded-header.header-red .dropdown-menu {
    color: #373a3c;
}

.pcoded-header.header-red .dropdown-menu a {
    color: #373a3c;
}

.pcoded-header.header-red .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-header.header-red .dropdown-menu > li.active, .pcoded-header.header-red .dropdown-menu > li:active, .pcoded-header.header-red .dropdown-menu > li:focus, .pcoded-header.header-red .dropdown-menu > li:hover {
    background: rgba(255, 82, 82, 0.1);
    color: #373a3c;
}

.pcoded-header.header-red .dropdown-menu > li.active > a, .pcoded-header.header-red .dropdown-menu > li:active > a, .pcoded-header.header-red .dropdown-menu > li:focus > a, .pcoded-header.header-red .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-header.header-red .input-group .input-group-text,
  .pcoded-header.header-red a,
  .pcoded-header.header-red dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-red .input-group .input-group-text:hover,
    .pcoded-header.header-red a:hover,
    .pcoded-header.header-red dropdown-toggle:hover {
    color: #fff;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-red .input-group .input-group-text,
      .pcoded-header.header-red a,
      .pcoded-header.header-red dropdown-toggle {
        color: #535763;
    }

    .pcoded-header.header-red .input-group .input-group-text:hover,
        .pcoded-header.header-red a:hover,
        .pcoded-header.header-red dropdown-toggle:hover {
        color: #3c3f47;
    }
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-red .m-header > a {
        color: #fff;
    }
}

.pcoded-header.header-red .main-search .search-close > .input-group-text {
    color: #ff5252;
}

.pcoded-header.header-red .main-search.open .input-group {
    background: rgba(255, 255, 255, 0.25);
    border: 0 solid rgba(255, 255, 255, 0.25);
    padding: 2px 2px 2px 20px;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-red .main-search.open .input-group {
        background: #ecf0f5;
    }
}

@media only screen and (min-width: 992px) {
    .pcoded-header.header-red .main-search.open .input-group .form-control {
        color: #fff;
    }

    .pcoded-header.header-red .main-search.open .input-group .form-control::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .pcoded-header.header-red .main-search.open .input-group .form-control:-ms-input-placeholder {
        color: #fff;
    }

    .pcoded-header.header-red .main-search.open .input-group .form-control::-webkit-input-placeholder {
        color: #fff;
    }
}

.pcoded-header.header-red .main-search.open .input-group .search-btn {
    background: #ff5252;
    border-color: #ff5252;
}

.pcoded-header.header-red .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header.header-red .dropdown .notification .noti-head a {
    color: #fff;
}

.pcoded-header.header-red .dropdown .notification .noti-body li.notification:hover {
    background: rgba(255, 82, 82, 0.1);
}

.pcoded-header.header-red .dropdown .profile-notification .pro-head {
    color: #fff;
}

.pcoded-header.header-red .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-header.header-red .b-bg {
    background: #fff;
    color: #ff5252;
}

.pcoded-header.header-purple {
    background: #536dfe;
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-purple:not(.headerpos-fixed) {
    background: transparent;
}

.pcoded-header.header-purple .profile-notification li > a {
    color: #373a3c;
}

.pcoded-header.header-purple .profile-notification li.active, .pcoded-header.header-purple .profile-notification li:active, .pcoded-header.header-purple .profile-notification li:focus, .pcoded-header.header-purple .profile-notification li:hover {
    background: rgba(83, 109, 254, 0.1);
}

.pcoded-header.header-purple .profile-notification li.active > a, .pcoded-header.header-purple .profile-notification li:active > a, .pcoded-header.header-purple .profile-notification li:focus > a, .pcoded-header.header-purple .profile-notification li:hover > a {
    background: transparent;
}

.pcoded-header.header-purple .dropdown-menu {
    color: #373a3c;
}

.pcoded-header.header-purple .dropdown-menu a {
    color: #373a3c;
}

.pcoded-header.header-purple .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-header.header-purple .dropdown-menu > li.active, .pcoded-header.header-purple .dropdown-menu > li:active, .pcoded-header.header-purple .dropdown-menu > li:focus, .pcoded-header.header-purple .dropdown-menu > li:hover {
    background: rgba(83, 109, 254, 0.1);
    color: #373a3c;
}

.pcoded-header.header-purple .dropdown-menu > li.active > a, .pcoded-header.header-purple .dropdown-menu > li:active > a, .pcoded-header.header-purple .dropdown-menu > li:focus > a, .pcoded-header.header-purple .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-header.header-purple .input-group .input-group-text,
  .pcoded-header.header-purple a,
  .pcoded-header.header-purple dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-purple .input-group .input-group-text:hover,
    .pcoded-header.header-purple a:hover,
    .pcoded-header.header-purple dropdown-toggle:hover {
    color: #fff;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-purple .input-group .input-group-text,
      .pcoded-header.header-purple a,
      .pcoded-header.header-purple dropdown-toggle {
        color: #535763;
    }

    .pcoded-header.header-purple .input-group .input-group-text:hover,
        .pcoded-header.header-purple a:hover,
        .pcoded-header.header-purple dropdown-toggle:hover {
        color: #3c3f47;
    }
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-purple .m-header > a {
        color: #fff;
    }
}

.pcoded-header.header-purple .main-search .search-close > .input-group-text {
    color: #536dfe;
}

.pcoded-header.header-purple .main-search.open .input-group {
    background: rgba(255, 255, 255, 0.25);
    border: 0 solid rgba(255, 255, 255, 0.25);
    padding: 2px 2px 2px 20px;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-purple .main-search.open .input-group {
        background: #ecf0f5;
    }
}

@media only screen and (min-width: 992px) {
    .pcoded-header.header-purple .main-search.open .input-group .form-control {
        color: #fff;
    }

    .pcoded-header.header-purple .main-search.open .input-group .form-control::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .pcoded-header.header-purple .main-search.open .input-group .form-control:-ms-input-placeholder {
        color: #fff;
    }

    .pcoded-header.header-purple .main-search.open .input-group .form-control::-webkit-input-placeholder {
        color: #fff;
    }
}

.pcoded-header.header-purple .main-search.open .input-group .search-btn {
    background: #536dfe;
    border-color: #536dfe;
}

.pcoded-header.header-purple .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header.header-purple .dropdown .notification .noti-head a {
    color: #fff;
}

.pcoded-header.header-purple .dropdown .notification .noti-body li.notification:hover {
    background: rgba(83, 109, 254, 0.1);
}

.pcoded-header.header-purple .dropdown .profile-notification .pro-head {
    color: #fff;
}

.pcoded-header.header-purple .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-header.header-purple .b-bg {
    background: #fff;
    color: #536dfe;
}

.pcoded-header.header-info {
    background: #00bcd4;
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-info:not(.headerpos-fixed) {
    background: transparent;
}

.pcoded-header.header-info .profile-notification li > a {
    color: #373a3c;
}

.pcoded-header.header-info .profile-notification li.active, .pcoded-header.header-info .profile-notification li:active, .pcoded-header.header-info .profile-notification li:focus, .pcoded-header.header-info .profile-notification li:hover {
    background: rgba(0, 188, 212, 0.1);
}

.pcoded-header.header-info .profile-notification li.active > a, .pcoded-header.header-info .profile-notification li:active > a, .pcoded-header.header-info .profile-notification li:focus > a, .pcoded-header.header-info .profile-notification li:hover > a {
    background: transparent;
}

.pcoded-header.header-info .dropdown-menu {
    color: #373a3c;
}

.pcoded-header.header-info .dropdown-menu a {
    color: #373a3c;
}

.pcoded-header.header-info .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-header.header-info .dropdown-menu > li.active, .pcoded-header.header-info .dropdown-menu > li:active, .pcoded-header.header-info .dropdown-menu > li:focus, .pcoded-header.header-info .dropdown-menu > li:hover {
    background: rgba(0, 188, 212, 0.1);
    color: #373a3c;
}

.pcoded-header.header-info .dropdown-menu > li.active > a, .pcoded-header.header-info .dropdown-menu > li:active > a, .pcoded-header.header-info .dropdown-menu > li:focus > a, .pcoded-header.header-info .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-header.header-info .input-group .input-group-text,
  .pcoded-header.header-info a,
  .pcoded-header.header-info dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-info .input-group .input-group-text:hover,
    .pcoded-header.header-info a:hover,
    .pcoded-header.header-info dropdown-toggle:hover {
    color: #fff;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-info .input-group .input-group-text,
      .pcoded-header.header-info a,
      .pcoded-header.header-info dropdown-toggle {
        color: #535763;
    }

    .pcoded-header.header-info .input-group .input-group-text:hover,
        .pcoded-header.header-info a:hover,
        .pcoded-header.header-info dropdown-toggle:hover {
        color: #3c3f47;
    }
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-info .m-header > a {
        color: #fff;
    }
}

.pcoded-header.header-info .main-search .search-close > .input-group-text {
    color: #00bcd4;
}

.pcoded-header.header-info .main-search.open .input-group {
    background: rgba(255, 255, 255, 0.25);
    border: 0 solid rgba(255, 255, 255, 0.25);
    padding: 2px 2px 2px 20px;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-info .main-search.open .input-group {
        background: #ecf0f5;
    }
}

@media only screen and (min-width: 992px) {
    .pcoded-header.header-info .main-search.open .input-group .form-control {
        color: #fff;
    }

    .pcoded-header.header-info .main-search.open .input-group .form-control::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .pcoded-header.header-info .main-search.open .input-group .form-control:-ms-input-placeholder {
        color: #fff;
    }

    .pcoded-header.header-info .main-search.open .input-group .form-control::-webkit-input-placeholder {
        color: #fff;
    }
}

.pcoded-header.header-info .main-search.open .input-group .search-btn {
    background: #00bcd4;
    border-color: #00bcd4;
}

.pcoded-header.header-info .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header.header-info .dropdown .notification .noti-head a {
    color: #fff;
}

.pcoded-header.header-info .dropdown .notification .noti-body li.notification:hover {
    background: rgba(0, 188, 212, 0.1);
}

.pcoded-header.header-info .dropdown .profile-notification .pro-head {
    color: #fff;
}

.pcoded-header.header-info .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-header.header-info .b-bg {
    background: #fff;
    color: #00bcd4;
}

.pcoded-header.header-green {
    background: #9ccc65;
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-green:not(.headerpos-fixed) {
    background: transparent;
}

.pcoded-header.header-green .profile-notification li > a {
    color: #373a3c;
}

.pcoded-header.header-green .profile-notification li.active, .pcoded-header.header-green .profile-notification li:active, .pcoded-header.header-green .profile-notification li:focus, .pcoded-header.header-green .profile-notification li:hover {
    background: rgba(156, 204, 101, 0.1);
}

.pcoded-header.header-green .profile-notification li.active > a, .pcoded-header.header-green .profile-notification li:active > a, .pcoded-header.header-green .profile-notification li:focus > a, .pcoded-header.header-green .profile-notification li:hover > a {
    background: transparent;
}

.pcoded-header.header-green .dropdown-menu {
    color: #373a3c;
}

.pcoded-header.header-green .dropdown-menu a {
    color: #373a3c;
}

.pcoded-header.header-green .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-header.header-green .dropdown-menu > li.active, .pcoded-header.header-green .dropdown-menu > li:active, .pcoded-header.header-green .dropdown-menu > li:focus, .pcoded-header.header-green .dropdown-menu > li:hover {
    background: rgba(156, 204, 101, 0.1);
    color: #373a3c;
}

.pcoded-header.header-green .dropdown-menu > li.active > a, .pcoded-header.header-green .dropdown-menu > li:active > a, .pcoded-header.header-green .dropdown-menu > li:focus > a, .pcoded-header.header-green .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-header.header-green .input-group .input-group-text,
  .pcoded-header.header-green a,
  .pcoded-header.header-green dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-green .input-group .input-group-text:hover,
    .pcoded-header.header-green a:hover,
    .pcoded-header.header-green dropdown-toggle:hover {
    color: #fff;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-green .input-group .input-group-text,
      .pcoded-header.header-green a,
      .pcoded-header.header-green dropdown-toggle {
        color: #535763;
    }

    .pcoded-header.header-green .input-group .input-group-text:hover,
        .pcoded-header.header-green a:hover,
        .pcoded-header.header-green dropdown-toggle:hover {
        color: #3c3f47;
    }
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-green .m-header > a {
        color: #fff;
    }
}

.pcoded-header.header-green .main-search .search-close > .input-group-text {
    color: #9ccc65;
}

.pcoded-header.header-green .main-search.open .input-group {
    background: rgba(255, 255, 255, 0.25);
    border: 0 solid rgba(255, 255, 255, 0.25);
    padding: 2px 2px 2px 20px;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-green .main-search.open .input-group {
        background: #ecf0f5;
    }
}

@media only screen and (min-width: 992px) {
    .pcoded-header.header-green .main-search.open .input-group .form-control {
        color: #fff;
    }

    .pcoded-header.header-green .main-search.open .input-group .form-control::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .pcoded-header.header-green .main-search.open .input-group .form-control:-ms-input-placeholder {
        color: #fff;
    }

    .pcoded-header.header-green .main-search.open .input-group .form-control::-webkit-input-placeholder {
        color: #fff;
    }
}

.pcoded-header.header-green .main-search.open .input-group .search-btn {
    background: #9ccc65;
    border-color: #9ccc65;
}

.pcoded-header.header-green .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header.header-green .dropdown .notification .noti-head a {
    color: #fff;
}

.pcoded-header.header-green .dropdown .notification .noti-body li.notification:hover {
    background: rgba(156, 204, 101, 0.1);
}

.pcoded-header.header-green .dropdown .profile-notification .pro-head {
    color: #fff;
}

.pcoded-header.header-green .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-header.header-green .b-bg {
    background: #fff;
    color: #9ccc65;
}

.pcoded-header.header-dark {
    background: #101b33;
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-dark:not(.headerpos-fixed) {
    background: transparent;
}

.pcoded-header.header-dark .profile-notification li > a {
    color: #373a3c;
}

.pcoded-header.header-dark .profile-notification li.active, .pcoded-header.header-dark .profile-notification li:active, .pcoded-header.header-dark .profile-notification li:focus, .pcoded-header.header-dark .profile-notification li:hover {
    background: rgba(16, 27, 51, 0.1);
}

.pcoded-header.header-dark .profile-notification li.active > a, .pcoded-header.header-dark .profile-notification li:active > a, .pcoded-header.header-dark .profile-notification li:focus > a, .pcoded-header.header-dark .profile-notification li:hover > a {
    background: transparent;
}

.pcoded-header.header-dark .dropdown-menu {
    color: #373a3c;
}

.pcoded-header.header-dark .dropdown-menu a {
    color: #373a3c;
}

.pcoded-header.header-dark .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-header.header-dark .dropdown-menu > li.active, .pcoded-header.header-dark .dropdown-menu > li:active, .pcoded-header.header-dark .dropdown-menu > li:focus, .pcoded-header.header-dark .dropdown-menu > li:hover {
    background: rgba(16, 27, 51, 0.1);
    color: #373a3c;
}

.pcoded-header.header-dark .dropdown-menu > li.active > a, .pcoded-header.header-dark .dropdown-menu > li:active > a, .pcoded-header.header-dark .dropdown-menu > li:focus > a, .pcoded-header.header-dark .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-header.header-dark .input-group .input-group-text,
  .pcoded-header.header-dark a,
  .pcoded-header.header-dark dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-dark .input-group .input-group-text:hover,
    .pcoded-header.header-dark a:hover,
    .pcoded-header.header-dark dropdown-toggle:hover {
    color: #fff;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-dark .input-group .input-group-text,
      .pcoded-header.header-dark a,
      .pcoded-header.header-dark dropdown-toggle {
        color: #535763;
    }

    .pcoded-header.header-dark .input-group .input-group-text:hover,
        .pcoded-header.header-dark a:hover,
        .pcoded-header.header-dark dropdown-toggle:hover {
        color: #3c3f47;
    }
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-dark .m-header > a {
        color: #fff;
    }
}

.pcoded-header.header-dark .main-search .search-close > .input-group-text {
    color: #101b33;
}

.pcoded-header.header-dark .main-search.open .input-group {
    background: rgba(255, 255, 255, 0.25);
    border: 0 solid rgba(255, 255, 255, 0.25);
    padding: 2px 2px 2px 20px;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-dark .main-search.open .input-group {
        background: #ecf0f5;
    }
}

@media only screen and (min-width: 992px) {
    .pcoded-header.header-dark .main-search.open .input-group .form-control {
        color: #fff;
    }

    .pcoded-header.header-dark .main-search.open .input-group .form-control::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .pcoded-header.header-dark .main-search.open .input-group .form-control:-ms-input-placeholder {
        color: #fff;
    }

    .pcoded-header.header-dark .main-search.open .input-group .form-control::-webkit-input-placeholder {
        color: #fff;
    }
}

.pcoded-header.header-dark .main-search.open .input-group .search-btn {
    background: #101b33;
    border-color: #101b33;
}

.pcoded-header.header-dark .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header.header-dark .dropdown .notification .noti-head a {
    color: #fff;
}

.pcoded-header.header-dark .dropdown .notification .noti-body li.notification:hover {
    background: rgba(16, 27, 51, 0.1);
}

.pcoded-header.header-dark .dropdown .profile-notification .pro-head {
    color: #fff;
}

.pcoded-header.header-dark .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-header.header-dark .b-bg {
    background: #fff;
    color: #101b33;
}

body.background-blue {
    background: #4680ff;
}

body.background-blue .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: #4680ff;
}

body.background-red {
    background: #ff5252;
}

body.background-red .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: #ff5252;
}

body.background-purple {
    background: #536dfe;
}

body.background-purple .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: #536dfe;
}

body.background-info {
    background: #00bcd4;
}

body.background-info .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: #00bcd4;
}

body.background-green {
    background: #9ccc65;
}

body.background-green .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: #9ccc65;
}

body.background-dark {
    background: #101b33;
}

body.background-dark .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: #101b33;
}

body.background-grd-blue {
    background: linear-gradient(to right, #4680ff 0%, #00f2fe 100%);
}

body.background-grd-blue .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: linear-gradient(to right, #4680ff 0%, #00f2fe 100%);
}

body.background-grd-red {
    background: linear-gradient(to right, #ff5252 0%, #ff9a44 100%);
}

body.background-grd-red .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: linear-gradient(to right, #ff5252 0%, #ff9a44 100%);
}

body.background-grd-purple {
    background: linear-gradient(to right, #536dfe 0%, #00adff 100%);
}

body.background-grd-purple .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: linear-gradient(to right, #536dfe 0%, #00adff 100%);
}

body.background-grd-info {
    background: linear-gradient(to right, #00bcd4 0%, #22e1ff 100%);
}

body.background-grd-info .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: linear-gradient(to right, #00bcd4 0%, #22e1ff 100%);
}

body.background-grd-green {
    background: linear-gradient(to right, #9ccc65 0%, #00e3ae 100%);
}

body.background-grd-green .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: linear-gradient(to right, #9ccc65 0%, #00e3ae 100%);
}

body.background-grd-dark {
    background: linear-gradient(to right, #101b33 0%, #1f3054 100%);
}

body.background-grd-dark .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: linear-gradient(to right, #101b33 0%, #1f3054 100%);
}

body[class*='background-img-'] {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top right;
    background-attachment: fixed;
}

body[class*='background-img-'] .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top right;
    background-attachment: fixed;
}

body.background-img-1 {
    background-image: url("../images/nav-bg/body-bg-1.jpg");
}

body.background-img-1 .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-image: url("../images/nav-bg/body-bg-1.jpg");
}

body.background-img-2 {
    background-image: url("../images/nav-bg/body-bg-2.jpg");
}

body.background-img-2 .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-image: url("../images/nav-bg/body-bg-2.jpg");
}

body.background-img-3 {
    background-image: url("../images/nav-bg/body-bg-3.jpg");
}

body.background-img-3 .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-image: url("../images/nav-bg/body-bg-3.jpg");
}

body.background-img-4 {
    background-image: url("../images/nav-bg/body-bg-4.jpg");
}

body.background-img-4 .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-image: url("../images/nav-bg/body-bg-4.jpg");
}

body.background-img-5 {
    background-image: url("../images/nav-bg/body-bg-5.jpg");
}

body.background-img-5 .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-image: url("../images/nav-bg/body-bg-5.jpg");
}

body.background-img-6 {
    background-image: url("../images/nav-bg/body-bg-6.jpg");
}

body.background-img-6 .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-image: url("../images/nav-bg/body-bg-6.jpg");
}

/* ====== [ Header color end ] ======== */
/* ====== [ Brand color start ] ======== */
.pcoded-header[class*="brand-"]:not(.brand-default) .mobile-menu span,
.pcoded-header[class*="brand-"]:not(.brand-default) .mobile-menu span:after,
.pcoded-header[class*="brand-"]:not(.brand-default) .mobile-menu span:before {
    background: #fff;
}

.pcoded-header[class*="brand-"]:not(.brand-default) .mobile-menu.on span {
    background: transparent;
}

.pcoded-header[class*="brand-"]:not(.brand-default) .b-bg {
    background: #fff;
    color: #4680ff;
}

.pcoded-header.brand-blue .m-header,
.pcoded-header[class*="header-"].brand-blue .m-header {
    background: #4680ff;
}

.pcoded-header.brand-blue .m-header .b-bg,
  .pcoded-header[class*="header-"].brand-blue .m-header .b-bg {
    background: #fff;
    color: #4680ff;
}

.pcoded-header.brand-red .m-header,
.pcoded-header[class*="header-"].brand-red .m-header {
    background: #ff5252;
}

.pcoded-header.brand-red .m-header .b-bg,
  .pcoded-header[class*="header-"].brand-red .m-header .b-bg {
    background: #fff;
    color: #ff5252;
}

.pcoded-header.brand-purple .m-header,
.pcoded-header[class*="header-"].brand-purple .m-header {
    background: #536dfe;
}

.pcoded-header.brand-purple .m-header .b-bg,
  .pcoded-header[class*="header-"].brand-purple .m-header .b-bg {
    background: #fff;
    color: #536dfe;
}

.pcoded-header.brand-info .m-header,
.pcoded-header[class*="header-"].brand-info .m-header {
    background: #00bcd4;
}

.pcoded-header.brand-info .m-header .b-bg,
  .pcoded-header[class*="header-"].brand-info .m-header .b-bg {
    background: #fff;
    color: #00bcd4;
}

.pcoded-header.brand-green .m-header,
.pcoded-header[class*="header-"].brand-green .m-header {
    background: #9ccc65;
}

.pcoded-header.brand-green .m-header .b-bg,
  .pcoded-header[class*="header-"].brand-green .m-header .b-bg {
    background: #fff;
    color: #9ccc65;
}

.pcoded-header.brand-dark .m-header,
.pcoded-header[class*="header-"].brand-dark .m-header {
    background: #101b33;
}

.pcoded-header.brand-dark .m-header .b-bg,
  .pcoded-header[class*="header-"].brand-dark .m-header .b-bg {
    background: #4680ff;
    color: #fff;
}

.pcoded-header.brand-default .header-logo,
.pcoded-header[class*="header-"].brand-default .header-logo {
    background: #101b33;
}

/* ====== [ Brand color end ] ======== */
/* ====== [ menu fixed start ] ======== */
.pcoded-navbar.menupos-fixed {
    position: fixed;
    height: 100vh;
    min-height: 100vh;
    border-radius: 0;
}

.pcoded-navbar.menupos-fixed .scroll-div.navbar-content {
    height: calc(100% - 50px);
    min-height: calc(100% - 50px);
}

/* ====== [ menu fixed end ] ======== */
/* ====== [ Header Fixed start ] ======== */
.pcoded-header.headerpos-fixed {
    position: fixed;
    top: 0;
}

.pcoded-header.headerpos-fixed ~ .pcoded-main-container {
    padding-top: 50px;
}

.pcoded-header.headerpos-fixed ~ .pcoded-main-container .page-header h5 {
    color: #37474f;
}

.pcoded-header.headerpos-fixed ~ .pcoded-main-container .page-header .page-header-title + .breadcrumb > .breadcrumb-item:before {
    color: rgba(55, 71, 79, 0.8);
}

.pcoded-header.headerpos-fixed ~ .pcoded-main-container .page-header .page-header-title + .breadcrumb > .breadcrumb-item a {
    color: #37474f;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.headerpos-fixed ~ .pcoded-main-container {
        padding-top: 50px;
    }
}

/* ====== [Header Fixed  end ] ======== */
/* ====== [Box start ] ======== */
body.box-layout {
    position: static;
    background-size: auto;
}

body.box-layout .pcoded-header {
    position: relative;
}

body.box-layout .pcoded-header ~ .pcoded-main-container {
    padding-top: 0;
    background: #ecf0f5;
}

body.box-layout .pcoded-navbar {
    position: fixed;
    border-radius: 6px 6px 0 0;
    align-content: space-around;
    height: 100%;
}

body.box-layout .pcoded-navbar.theme-horizontal ~ .pcoded-header {
    position: relative;
}

@media only screen and (max-width: 992px) {
    body.box-layout {
        position: relative;
    }
}

@media only screen and (max-width: 992px) {
    .container {
        padding: 0;
    }
}

/* ====== [ Box end ] ======== */
.dropdown-menu {
    transform-origin: 0 0;
    opacity: 0;
    top: 100% !important;
    transform: scale(0);
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

.dropdown-menu.dropdown-menu-right {
    transform-origin: 100% 0;
    right: 0;
    left: auto !important;
}

.dropdown-menu[x-placement="top-start"] {
    transform-origin: 0 100%;
    bottom: 100% !important;
    top: auto !important;
}

.dropdown-menu.show,
.open > .dropdown-menu {
    display: block;
    opacity: 1;
    -webkit-animation-name: bmd-dropdown-animation;
    animation-name: bmd-dropdown-animation;
    -webkit-animation-duration: 0.3s;
    animation-duration: 0.3s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
    -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

@-webkit-keyframes bmd-dropdown-animation {
    0% {
        opacity: 0;
        transform: scale(0);
    }

    100% {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes bmd-dropdown-animation {
    0% {
        opacity: 0;
        transform: scale(0);
    }

    100% {
        opacity: 1;
        transform: scale(1);
    }
}

.form-control {
    border: none;
    border-bottom: 1px solid #ced4da;
    background: no-repeat center bottom, center calc(100% - 1px);
    background-size: 0 100%, 100% 100%;
    transition: background 0s ease-out;
}

.form-control:focus {
    border-bottom-color: transparent;
    background-size: 100% 100%, 100% 100%;
    transition-duration: 0.3s;
    box-shadow: none;
    background-image: linear-gradient(to top, #4680ff 2px, rgba(70, 128, 255, 0) 2px), linear-gradient(to top, #ced4da 1px, rgba(206, 212, 218, 0) 1px);
}

.form-group {
    position: relative;
}

.form-group .form-control {
    padding-left: 0;
    padding-right: 0;
}

.form-group .floating-label {
    position: absolute;
    top: 11px;
    left: 0;
    font-size: 0.875rem;
    z-index: 1;
    cursor: text;
    transition: all 0.3s ease;
}

.form-group .floating-label + .form-control {
    padding-left: 0;
    padding-right: 0;
    border-radius: 0;
}

.form-group.fill .floating-label {
    top: -10px;
    font-size: 0.75rem;
    color: #4680ff;
}

.spinner-border {
    border-bottom-width: 0;
    border-left-width: 0;
}

.nav-tabs .nav-item {
    margin-bottom: 0;
}

.nav-tabs .nav-link {
    border: none;
    background: no-repeat center bottom, center 100%;
    background-size: 0 100%, 100% 100%;
    transition: background 0.3s ease-out;
    background-image: linear-gradient(to top, #4680ff 2px, rgba(255, 255, 255, 0) 2px);
}

.nav-tabs .nav-link.active {
    background-size: 100% 100%, 100% 100%;
}

.page-item .page-link {
    border-radius: 60px;
    margin: 0 5px;
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 60px;
    border-bottom-left-radius: 60px;
}

.page-item:last-child .page-link {
    border-top-right-radius: 60px;
    border-bottom-right-radius: 60px;
}

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #4680ff;
    border-color: #4680ff;
}

.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6;
}

.pagination-lg .page-link {
    padding: 0.75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: 60px;
    border-bottom-left-radius: 60px;
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: 60px;
    border-bottom-right-radius: 60px;
}

.pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: 60px;
    border-bottom-left-radius: 60px;
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: 60px;
    border-bottom-right-radius: 60px;
}

.has-ripple {
    position: relative;
    overflow: hidden;
    transform: translate3d(0, 0, 0);
}

.ripple {
    display: block;
    position: absolute;
    pointer-events: none;
    border-radius: 50%;
    transform: scale(0);
    background: #fff;
    opacity: 1;
}

.ripple-animate {
    -webkit-animation: ripple;
    animation: ripple;
}

@-webkit-keyframes ripple {
    100% {
        opacity: 0;
        transform: scale(2);
    }
}

@keyframes ripple {
    100% {
        opacity: 0;
        transform: scale(2);
    }
}

.social-card {
    color: #fff;
    overflow: hidden;
}

.social-card .social-icon {
    background-color: #fff;
    border-radius: 5px;
    text-align: center;
    padding: 22px 23px;
}

.social-card .download-icon {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.5);
    position: absolute;
    height: 125px;
    width: 125px;
    right: -125px;
    font-size: 35px;
    padding: 40px 22px;
    border-radius: 50%;
    transition: all 0.3s ease-in-out;
}

.social-card:hover .download-icon {
    right: -60px;
}

.total-card {
    overflow: hidden;
}

.total-card .text-left h4 {
    color: #fff;
    font-weight: 400;
    margin-bottom: 5px;
}

.total-card .text-left p {
    color: #fff;
    font-size: 15px;
}

.table-card .card-body {
    padding-left: 0;
    padding-right: 0;
    padding-top: 0;
}

.table-card .card-body .table > thead > tr > th {
    border-top: 0;
}

.table-card .card-body .table .chk-option {
    vertical-align: middle;
    width: 30px;
    display: inline-block;
}

.table-card .card-body .table .chk-option .checkbox-fade,
    .table-card .card-body .table .chk-option .checkbox-fade .cr,
    .table-card .card-body .table .chk-option .checkbox-zoom,
    .table-card .card-body .table .chk-option .checkbox-zoom .cr {
    margin-right: 0;
}

.table-card .card-body .table label {
    margin-bottom: 0;
}

.table-card .card-body .table tr td:first-child,
  .table-card .card-body .table tr th:first-child {
    padding-left: 20px;
}

.table-card .card-body .table tr td:last-child,
  .table-card .card-body .table tr th:last-child {
    padding-right: 20px;
}

.latest-update-card .card-body {
    padding-top: 0;
}

.latest-update-card .card-body .latest-update-box {
    position: relative;
}

.latest-update-card .card-body .latest-update-box td {
    border-top: none;
}

.latest-update-card .card-body .latest-update-box:after {
    content: "";
    position: absolute;
    background: #e2e5e8;
    height: 100%;
    width: 1px;
    top: 0;
    left: 110px;
    z-index: 1;
}

.latest-update-card .card-body .latest-update-box .update-meta {
    z-index: 2;
    min-width: 160px;
}

.latest-update-card .card-body .latest-update-box .update-meta .update-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    padding: 12px 13px;
    font-size: 16px;
    color: #fff;
    margin-left: 10px;
}

@media only screen and (max-width: 575px) {
    .latest-update-card .card-body .latest-update-box:after {
        display: none;
    }

    .latest-update-card .card-body .latest-update-box .update-meta {
        z-index: 2;
        min-width: 100%;
        text-align: left !important;
        margin-bottom: 15px;
        border-top: 1px solid #f1f1f1;
        padding-top: 15px;
    }
}

.review-card .review-block .cust-img {
    width: 50px;
    height: 50px;
}

.review-card .review-block > div {
    padding-top: 25px;
    padding-bottom: 25px;
    margin-left: 0;
    margin-right: 0;
    padding-left: 5px;
    padding-right: 5px;
}

.review-card .review-block > div:hover {
    background-color: rgba(70, 128, 255, 0.1);
}

.user-card2 .risk-rate {
    display: inline-block;
    margin: 0 auto;
}

.user-card2 .risk-rate span {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    border: 6px dashed #d6d6d6;
    border-top-color: #9ccc65;
    border-bottom-color: transparent;
    padding: 45px;
    display: block;
    position: relative;
}

.user-card2 .risk-rate span:after {
    content: "";
    width: 90px;
    height: 90px;
    background-color: rgba(156, 204, 101, 0.5);
    border-radius: 50%;
    position: absolute;
    top: 15px;
    left: 15px;
    z-index: 1;
}

.user-card2 .risk-rate span b {
    font-size: 20px;
    color: #fff;
    z-index: 2;
    position: relative;
}

.to-do-list {
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.to-do-list i {
    color: #ccc;
    font-size: 17px;
    opacity: 0;
}

.to-do-list:last-child {
    border: none;
    padding: 0;
    margin: 0;
}

.to-do-list:hover i {
    opacity: 1;
    transition: opacity ease-in 0.3s;
}

.to-do-list p {
    display: inline-block;
}

.to-do-label .checkbox-fade {
    display: block;
}

.to-do-label .checkbox-fade .delete_todo {
    float: right;
    font-size: 24px;
    color: #ccc;
}

.to-do-label .check-task {
    display: block;
}

.to-do-label i {
    cursor: pointer;
}

.done-task .captions,
.done-task span {
    color: #919aa3;
    text-decoration: line-through;
}

.trafic-card .progress {
    height: 7px;
}

.trafic-card .progress.blue {
    background-color: rgba(70, 128, 255, 0.5);
}

.trafic-card .progress.green {
    background-color: rgba(156, 204, 101, 0.5);
}

.trafic-card .progress.red {
    background-color: rgba(255, 82, 82, 0.5);
}

.trafic-card .progress.purple {
    background-color: rgba(83, 109, 254, 0.5);
}

.trafic-card .progress.yellow {
    background-color: rgba(255, 186, 87, 0.5);
}

.user-activity-card .u-img {
    position: relative;
}

.user-activity-card .u-img .cover-img {
    width: 40px;
    height: 40px;
}

.user-activity-card .u-img .profile-img {
    width: 20px;
    height: 20px;
    position: absolute;
    bottom: 0;
    right: -5px;
}

.user-Messages-card .u-img {
    position: relative;
}

.user-Messages-card .u-img .profile-img {
    width: 40px;
    height: 40px;
}

.user-Messages-card .u-img .tot-msg {
    width: 15px;
    height: 15px;
    position: absolute;
    bottom: 0;
    right: -5px;
    background-color: #ff5252;
    color: #fff;
    font-size: 10px;
    border-radius: 50%;
    text-align: center;
}

.latest-posts-card .latest-posts-img {
    width: 90px;
    height: 80px;
}

.task-card .task-list {
    position: relative;
}

.task-card .task-list:after {
    content: "";
    position: absolute;
    background: #e2e5e8;
    height: 100%;
    width: 2px;
    top: 0;
    left: 10px;
    z-index: 1;
}

.task-card .task-list:before {
    content: "";
    position: absolute;
    background: #e2e5e8;
    height: 15px;
    width: 15px;
    bottom: -14px;
    left: 3px;
    z-index: 2;
    border-radius: 50%;
}

.task-card .task-list li {
    margin-bottom: 30px;
    padding-left: 30px;
    position: relative;
}

.task-card .task-list li .task-icon {
    position: absolute;
    left: 3px;
    top: 1px;
    border-radius: 50%;
    padding: 2px;
    color: #fff;
    min-width: 15px;
    min-height: 15px;
    z-index: 2;
}

.latest-activity-card .card-body {
    padding-top: 0;
}

.latest-activity-card .card-body .latest-update-box {
    position: relative;
}

.latest-activity-card .card-body .latest-update-box .update-meta {
    z-index: 2;
    min-width: 160px;
}

.latest-activity-card .card-body .latest-update-box .update-meta .update-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    padding: 12px 13px;
    font-size: 16px;
    color: #fff;
    margin-left: 10px;
}

@media only screen and (max-width: 575px) {
    .latest-activity-card .card-body .latest-update-box .update-meta {
        z-index: 2;
        min-width: 100%;
        text-align: left !important;
        margin-bottom: 15px;
        border-top: 1px solid #f1f1f1;
        padding-top: 15px;
    }
}

.feed-card h6 {
    margin-top: 7px;
}

.feed-card .feed-icon {
    color: #fff;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 8px;
}

.latest-activity-card .table td {
    vertical-align: middle;
}

.order-visitor-card {
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

.order-visitor-card h4,
  .order-visitor-card h6,
  .order-visitor-card p {
    transition: all 0.3s ease-in-out;
}

.order-visitor-card:hover {
    background-color: #4680ff;
}

.order-visitor-card:hover h4,
    .order-visitor-card:hover h6,
    .order-visitor-card:hover p {
    color: #fff;
}

.user-card-full {
    overflow: hidden;
}

.user-card-full .user-profile-side {
    border-radius: 5px 0 0 5px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    transition: all 0.3s ease-in-out;
}

.user-card-full .social-link li a i {
    color: #373a3c;
}

.form-icon {
    position: absolute;
    bottom: 8px;
    right: 8px;
}

.form-icon .btn.btn-icon {
    width: 35px;
    height: 35px;
}

.widget-statstic-card {
    position: relative;
    overflow: hidden;
}

.widget-statstic-card .st-icon {
    color: #fff;
    font-size: 23px;
    padding: 40px 40px 20px 20px;
    border-radius: 50%;
    position: absolute;
    top: -30px;
    right: -30px;
    transition: all 0.3s ease-in-out;
}

.widget-statstic-card h2 {
    font-weight: 600;
    display: inline-block;
}

.widget-statstic-card span {
    border-radius: 30px;
    padding: 5px 20px;
    color: #fff;
    font-weight: 600;
}

.widget-statstic-card:hover .st-icon {
    font-size: 50px;
}

.widget-visitor-card {
    overflow: hidden;
    padding: 10px 0;
}

.widget-visitor-card i {
    color: #fff;
    font-size: 80px;
    position: absolute;
    bottom: -10px;
    opacity: 0.3;
    left: -10px;
    transform: rotate(15deg);
    transition: all 0.3s ease-in-out;
}

.widget-visitor-card:hover i {
    transform: rotate(0deg) scale(1.4);
    opacity: 0.5;
}

.app-design .btn {
    padding: 5px 8px;
    font-size: 12px;
    font-weight: 600;
    border-radius: 5px;
}

.app-design .team-section img {
    width: 35px;
    border-radius: 5px;
}

.app-design .progress-box p {
    margin-bottom: 0;
}

.app-design .progress-box .progress {
    width: calc(100% - 80px);
    height: 8px;
    text-align: center;
    margin: 0 auto;
    background-color: #E5E5E5;
    border-radius: 30px;
    position: relative;
    overflow: inherit;
}

.app-design .progress-box .progress .progress-bar {
    border-radius: 30px;
}

.app-design .progress-box .progress .progress-bar label {
    position: absolute;
    top: -24px;
    right: 0;
    font-weight: 600;
    font-size: 13px;
}

.order-card {
    color: #fff;
    overflow: hidden;
}

.order-card .card-icon {
    position: absolute;
    right: -17px;
    font-size: 100px;
    top: 20px;
    opacity: 0.5;
}

.statustic-card .card-body {
    position: relative;
}

.statustic-card .card-body .progress {
    position: absolute;
    bottom: 0;
    width: 100%;
    left: 0;
    height: 5px;
    overflow: visible;
}

.statustic-card .card-body .progress .progress-bar {
    position: relative;
}

.statustic-card .card-body .progress .progress-bar:before {
    content: "";
    height: 5px;
    width: 5px;
    border-radius: 50%;
    position: absolute;
    right: 0;
    background: inherit;
}

.statustic-card .card-body .progress .progress-bar.bg-c-blue:before {
    -webkit-animation: blue-blink-bar 0.5s linear infinite;
    animation: blue-blink-bar 0.5s linear infinite;
}

.statustic-card .card-body .progress .progress-bar.bg-c-green:before {
    -webkit-animation: green-blink-bar 0.5s linear infinite;
    animation: green-blink-bar 0.5s linear infinite;
}

.statustic-card .card-body .progress .progress-bar.bg-c-red:before {
    -webkit-animation: red-blink-bar 0.5s linear infinite;
    animation: red-blink-bar 0.5s linear infinite;
}

.statustic-card .card-body .progress .progress-bar.bg-c-yellow:before {
    -webkit-animation: yellow-blink-bar 0.5s linear infinite;
    animation: yellow-blink-bar 0.5s linear infinite;
}

@-webkit-keyframes blue-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(70, 128, 255, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(70, 128, 255, 0.3);
    }
}

@keyframes blue-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(70, 128, 255, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(70, 128, 255, 0.3);
    }
}

@-webkit-keyframes green-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(156, 204, 101, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(156, 204, 101, 0.3);
    }
}

@keyframes green-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(156, 204, 101, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(156, 204, 101, 0.3);
    }
}

@-webkit-keyframes red-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(255, 82, 82, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(255, 82, 82, 0.3);
    }
}

@keyframes red-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(255, 82, 82, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(255, 82, 82, 0.3);
    }
}

@-webkit-keyframes yellow-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(255, 186, 87, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(255, 186, 87, 0.3);
    }
}

@keyframes yellow-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(255, 186, 87, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(255, 186, 87, 0.3);
    }
}

.statustic-progress-card .progress {
    height: 5px;
}

.quater-card .progress {
    height: 4px;
}

.client-map img {
    vertical-align: top;
    width: 90px;
}

.client-map .client-detail {
    margin-bottom: 20px;
}

.client-map .client-detail img {
    border-radius: 5px;
}

.client-map .client-profile {
    float: left;
}

.client-map .client-contain {
    display: inline-block;
    margin-left: 20px;
}

.client-map .client-contain h5 {
    display: block;
    text-transform: capitalize;
    font-weight: 600;
    font-size: 18px;
    padding-bottom: 10px;
}

.client-map .client-card-box {
    border: 1px solid #ccc;
    border-radius: 5px;
}

.client-map .client-card-box .client-border {
    border-right: 1px solid #ccc;
}

.client-map .client-card-box .client-border-card {
    border-top: 1px solid #ccc;
}

.flat-card .row-table {
    display: table;
    align-items: center;
    table-layout: fixed;
    height: 100%;
    width: 100%;
    margin: 0;
}

.flat-card .row-table:first-child {
    border-bottom: 1px solid #ddd;
}

.flat-card .row-table .br {
    border-right: 1px solid #ccc;
}

.flat-card .row-table i {
    font-size: 28px;
}

.flat-card .row-table span {
    text-transform: uppercase;
    font-size: 12px;
}

.flat-card .row-table h5 {
    display: block;
    margin-bottom: 0.3em;
    margin-right: 0;
}

.flat-card .row-table > [class*=col-] {
    display: table-cell;
    float: none;
    table-layout: fixed;
    vertical-align: middle;
}

.flat-card .row-table > [class*=col-] .row {
    display: flex;
    align-items: center;
}

.flat-card[class*="widget-"] .row-table {
    display: flex;
}

.table-card .card-body {
    padding-left: 0;
    padding-right: 0;
    padding-top: 0;
}

.table-card .card-body .table > thead > tr > th {
    border-top: 0;
}

.table-card .card-body .table tr td:first-child,
  .table-card .card-body .table tr th:first-child {
    padding-left: 25px;
}

.table-card .card-body .table tr td:last-child,
  .table-card .card-body .table tr th:last-child {
    padding-right: 25px;
}

.table-card .card-body .table.without-header tr:first-child td {
    border-top: none;
}

.stastic-slider-full-card .carousel-item {
    transition: transform 12s linear;
}

.statstic-data-card .active.carousel-item-right,
.statstic-data-card .carousel-item-next:not(.carousel-item-left) {
    transform: translateY(100%);
}

.statstic-data-card .active.carousel-item-left,
.statstic-data-card .carousel-item-prev:not(.carousel-item-right) {
    transform: translateY(-100%);
}

.statstic-data-card .card-body {
    border-top: 2px solid transparent;
}

.statstic-data-card .card-body.level-down {
    border-color: #ff5252;
}

.statstic-data-card .card-body.level-up {
    border-color: #9ccc65;
}

.social-widget-card {
    border-top: none;
    color: #fff;
}

.social-widget-card:hover i {
    opacity: 1;
    transform: scale(1.1);
}

.social-widget-card i {
    position: absolute;
    right: 10px;
    bottom: 10px;
    font-size: 48px;
    opacity: 0.4;
    transition: all ease-in 0.3s;
}

.ticket-card .lbl-card {
    border-radius: 50px;
    padding: 5px 15px;
    display: inline-block;
}

.widget-profile-card-1 {
    position: relative;
    margin-bottom: 50px;
}

.widget-profile-card-1 .middle-user {
    position: absolute;
    left: 0;
    right: 0;
    width: 100%;
    margin: 0 auto;
    text-align: center;
    bottom: -60px;
}

.widget-profile-card-1 .middle-user img {
    width: 115px;
    border-radius: 50%;
}

.widget-profile-card-1 ~ .card-footer [class*=col-] {
    border-right: 1px solid #fff;
}

.widget-profile-card-1 ~ .card-footer [class*=col-]:last-child {
    border: none;
}

@media only screen and (max-width: 767px) {
    .widget-profile-card-1 ~ .card-footer [class*=col-]:nth-child(2) {
        border: 0;
    }

    .widget-profile-card-1 ~ .card-footer [class*=col-]:last-child {
        margin-top: 10px;
    }
}

.widget-profile-card-2 img.user-img {
    width: 115px;
}

.widget-profile-card-2 a {
    color: #fff;
    transition: all ease-in 0.3s;
}

.widget-profile-card-2 a:hover {
    opacity: 0.7;
}

.widget-profile-card-3 {
    background-image: url("../images/widget/slider5.jpg");
    background-size: cover;
    padding: 50px 0;
    text-align: center;
}

.widget-profile-card-3 img {
    width: 120px;
    border-radius: 50%;
}

.profile-card {
    position: relative;
    min-height: 410px;
    overflow: hidden;
}

.profile-card img {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
}

.profile-card .card-body {
    text-align: center;
    color: #fff;
    position: absolute;
    bottom: 0;
    text-align: center;
    width: 100%;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.72));
}

.profile-card .card-body h3 {
    font-weight: 600;
}

.profile-card ~ .card-footer [class*="col-"] {
    padding: 10px;
    border-right: 1px solid rgba(255, 255, 255, 0.57);
}

.profile-card ~ .card-footer [class*="col-"] h4 {
    font-size: 18px;
    font-weight: 600;
}

.profile-card ~ .card-footer [class*="col-"]:last-child {
    border: none;
}

.profile-card ~ .card-footer [class*="col-"] span {
    text-transform: uppercase;
}

@media only screen and (max-width: 767px) {
    .profile-card ~ .card-footer [class*="col-"]:nth-child(2) {
        border: none;
    }
}

.blur-user-card {
    color: #fff;
    text-align: center;
    padding-top: 45px;
    background-image: url("../images/widget/blur-bg.png");
    background-size: cover;
}

.blur-user-card h3 {
    margin-top: 10px;
    font-size: 30px;
    font-weight: 600;
}

.blur-user-card p {
    font-size: 18px;
    font-weight: 300;
}

.blur-user-card .blur-footer [class*="col-"] {
    padding: 1em;
    border-right: 1px solid #fff;
    margin-top: 30px;
    margin-bottom: 30px;
}

.blur-user-card .blur-footer [class*="col-"]:last-child {
    border-right: none;
}

@media only screen and (max-width: 767px) {
    .blur-user-card .blur-footer [class*="col-"]:nth-child(2) {
        border: 0;
    }

    .blur-user-card .blur-footer [class*="col-"]:last-child {
        margin-top: 0;
        padding-top: 0;
    }
}

.weather-bg-card {
    position: relative;
}

.weather-bg-card img {
    width: 100%;
}

.weather-bg-card .card-body {
    position: absolute;
    bottom: 20px;
    width: 100%;
    text-align: center;
}

.weather-bg-card h5 {
    color: #fff;
}

.weather-bg-card .card-body.alt {
    position: absolute;
    top: 0;
}

.weather-bg-card .card-body.alt span {
    color: #fff;
}

.weather-bg-card .weather-temp {
    font-size: 70px;
    color: #fff;
}

.weather-bg-card ~ .card-footer {
    border-top: none;
}

@media only screen and (max-width: 575px) {
    .weather-bg-card ~ .card-footer [class*="col-"] {
        margin-bottom: 10px;
    }
}

.new-cust-card img {
    width: 40px;
}

.new-cust-card h6 {
    margin-bottom: 0;
}

.new-cust-card .align-middle {
    position: relative;
}

.new-cust-card .align-middle .status {
    position: absolute;
    right: 0;
    top: 19px;
    font-size: 13px;
}

.new-cust-card .align-middle .status.active {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #9ccc65;
}

.latest-update-card.update-card .card-body .latest-update-box:after {
    left: 19px;
}

.testimonial-card .progress {
    height: 5px;
}

.testimonial-card .review-block .cust-img {
    width: 40px;
    height: 40px;
}

.testimonial-card .review-block > div {
    padding-top: 15px;
    padding-bottom: 9px;
    margin-left: 0;
    margin-right: 0;
    padding-left: 5px;
    padding-right: 5px;
}

.testimonial-card .review-block > div:hover {
    background-color: rgba(70, 128, 255, 0.1);
}

.widget-chat-box .card-header i {
    font-size: 17px;
    color: #263238;
    position: relative;
}

.widget-chat-box .card-header .pop-up:after {
    content: '';
    position: absolute;
    background-color: #ff5252;
    height: 8px;
    width: 8px;
    border-radius: 50px;
    right: -3px;
}

.widget-chat-box .send-chat, .widget-chat-box .receive-chat {
    position: relative;
    background: #dfe9ff;
    padding: 7px;
    border-radius: 0 10px 10px 10px;
    font-size: 13px;
    margin-bottom: 30px;
}

.widget-chat-box .send-chat:before, .widget-chat-box .receive-chat:before {
    content: '';
    position: absolute;
    height: 12px;
    width: 12px;
    border: 6px solid transparent;
    border-top: 6px solid #dfe9ff;
    border-right: 6px solid #dfe9ff;
    left: -12px;
    top: 0;
}

.widget-chat-box .send-chat .time, .widget-chat-box .receive-chat .time {
    position: absolute;
    bottom: -20px;
    left: 0;
}

.widget-chat-box .receive-chat {
    background-color: #4680ff;
    color: #fff;
    border-radius: 10px;
}

.widget-chat-box .receive-chat:before {
    display: none;
}

.widget-chat-box .receive-chat .time {
    color: #666;
}

.widget-chat-box .rc-10 {
    margin-bottom: 10px;
}

.chat-card .msg {
    margin-bottom: 5px;
    display: inline-block;
    padding: 10px;
    position: relative;
}

.chat-card .msg img {
    width: 60px;
    border-radius: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
    margin-right: 10px;
}

.chat-card .received-chat .msg {
    background: #dfe9ff;
    border-radius: 0 5px 5px 5px;
}

.chat-card .received-chat .msg:after {
    content: "";
    position: absolute;
    left: -7px;
    top: -7px;
    transform: rotate(45deg);
    border: 7px solid transparent;
    border-bottom-color: #dfe9ff;
}

.chat-card .send-chat, .chat-card .widget-chat-box .receive-chat, .widget-chat-box .chat-card .receive-chat {
    text-align: right;
}

.chat-card .send-chat .msg, .chat-card .widget-chat-box .receive-chat .msg, .widget-chat-box .chat-card .receive-chat .msg {
    background: #4680ff;
    color: #fff;
    border-radius: 5px 0 5px 5px;
}

.chat-card .send-chat .msg:after, .chat-card .widget-chat-box .receive-chat .msg:after, .widget-chat-box .chat-card .receive-chat .msg:after {
    content: "";
    position: absolute;
    right: -7px;
    top: -7px;
    transform: rotate(45deg);
    border: 7px solid transparent;
    border-right-color: #4680ff;
}

.nav {
    position: relative;
    z-index: 1;
}

.feed-card h6 {
    margin-top: 7px;
    font-size: 14px;
}

.feed-card .feed-icon {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 8px 9px;
}

.mrr-card {
    position: relative;
}

.mrr-card .bottom-chart {
    bottom: 0;
}

.bg-pattern {
    background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 20.5V18H0v-2h20v-2H0v-2h20v-2H0V8h20V6H0V4h20V2H0V0h22v20h2V0h2v20h2V0h2v20h2V0h2v20h2V0h2v20h2v2H20v-1.5zM0 20h2v20H0V20zm4 0h2v20H4V20zm4 0h2v20H8V20zm4 0h2v20h-2V20zm4 0h2v20h-2V20zm4 4h20v2H20v-2zm0 4h20v2H20v-2zm0 4h20v2H20v-2zm0 4h20v2H20v-2z' fill='%234680ff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.samp-bg {
    background: gradient-x-three-colors();
}

.swal-icon--error {
    border-color: #ff5252;
}

.swal-icon--error__line {
    background-color: #ff5252;
}

.swal-icon--warning {
    border-color: #ffba57;
}

.swal-icon--warning__body {
    background-color: #ffba57;
}

.swal-icon--warning__dot {
    background-color: #ffba57;
}

@-webkit-keyframes pulseWarning {
    0% {
        border-color: #ffc471;
    }

    to {
        border-color: #ffba57;
    }
}

@keyframes pulseWarning {
    0% {
        border-color: #ffc471;
    }

    to {
        border-color: #ffba57;
    }
}

.swal-icon--success {
    border-color: #9ccc65;
}

.swal-icon--success__ring {
    border: 4px solid rgba(156, 204, 101, 0.2);
}

.swal-icon--success__line {
    background-color: #9ccc65;
}

.swal-icon--info {
    border-color: #00acc1;
}

.swal-icon--info:after, .swal-icon--info:before {
    background-color: #00acc1;
}

.swal-title {
    color: rgba(0, 0, 0, 0.65);
}

.swal-text {
    color: rgba(0, 0, 0, 0.64);
}

.swal-button {
    background-color: #4680ff;
}

.swal-button:not([disabled]):hover {
    background-color: #2d6eff;
}

.swal-button:active {
    background-color: #2d6eff;
}

.swal-button:focus {
    box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(70, 128, 255, 0.29);
}

.swal-button--cancel {
    color: #555;
    background-color: #efefef;
}

.swal-button--cancel:not([disabled]):hover {
    background-color: #e8e8e8;
}

.swal-button--cancel:active {
    background-color: #d7d7d7;
}

.swal-button--cancel:focus {
    box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, 0.29);
}

.swal-button--danger {
    background-color: #ff5252;
}

.swal-button--danger:not([disabled]):hover {
    background-color: #ff3939;
}

.swal-button--danger:active {
    background-color: #ff3939;
}

.swal-button--danger:focus {
    box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(255, 82, 82, 0.29);
}

.swal-footer {
    text-align: center;
}

.swal-content__input:focus {
    border-color: rgba(70, 128, 255, 0.29);
}

.swal-content__textarea:focus {
    border-color: rgba(70, 128, 255, 0.29);
}

.lb-cancel {
    background: url("../images/loading.gif") no-repeat;
}

.lb-nav a.lb-prev {
    background: url("../images/prev.png") left 48% no-repeat;
}

.lb-nav a.lb-next {
    background: url("../images/next.png") right 48% no-repeat;
}

.lb-data .lb-caption a {
    color: #4680ff;
}

.lb-data .lb-close {
    background: url("../images/close.png") top right no-repeat;
}

.alert-dismissable .close,
.alert-dismissible .close {
    color: inherit;
    text-shadow: none;
}

@-webkit-keyframes progress-bar-stripes {
    from {
        background-position: 40px 0;
    }

    to {
        background-position: 0 0;
    }
}

@keyframes progress-bar-stripes {
    from {
        background-position: 40px 0;
    }

    to {
        background-position: 0 0;
    }
}

.alert-inverse {
    background-color: #333;
    border-color: transparent;
    color: #fff;
}

.alert-inverse .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: #fff;
    text-shadow: none;
}

.alert-inverse .alert-link {
    color: #e6e6e6;
}

.growl-animated.alert-inverse {
    box-shadow: 0 0 5px rgba(51, 51, 51, 0.5);
}

.growl-animated.alert-info {
    box-shadow: 0 0 5px rgba(70, 128, 255, 0.5);
}

.growl-animated.alert-success {
    box-shadow: 0 0 5px rgba(156, 204, 101, 0.5);
}

.growl-animated.alert-warning {
    box-shadow: 0 0 5px rgba(255, 186, 87, 0.5);
}

.growl-animated.alert-danger {
    box-shadow: 0 0 5px rgba(255, 82, 82, 0.5);
}

[data-notify="progressbar"] {
    margin-bottom: 0;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 5px;
}

[ui-pnotify].ui-pnotify.stack-bar-top {
    width: 100%;
}

[ui-pnotify].ui-pnotify.stack-bar-bottom {
    width: 100%;
}

[ui-pnotify].ui-pnotify .brighttheme-notice {
    background-color: #ffeed7;
}

[ui-pnotify].ui-pnotify .brighttheme-notice div,
  [ui-pnotify].ui-pnotify .brighttheme-notice h4 {
    color: #bd6f00;
}

[ui-pnotify].ui-pnotify .brighttheme-info {
    background-color: #c6d8ff;
}

[ui-pnotify].ui-pnotify .brighttheme-info div,
  [ui-pnotify].ui-pnotify .brighttheme-info h4 {
    color: #0036ac;
}

[ui-pnotify].ui-pnotify .brighttheme-success {
    background-color: #daecc5;
}

[ui-pnotify].ui-pnotify .brighttheme-success div,
  [ui-pnotify].ui-pnotify .brighttheme-success h4 {
    color: #4f7226;
}

[ui-pnotify].ui-pnotify .brighttheme-error {
    background-color: #ffd2d2;
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem;
}

[ui-pnotify].ui-pnotify .brighttheme-error div,
  [ui-pnotify].ui-pnotify .brighttheme-error h4 {
    color: danger(#ff5252, 30%);
}

[ui-pnotify].ui-pnotify .brighttheme-icon-notice {
    background-color: #bd6f00;
    color: #ffeed7;
}

[ui-pnotify].ui-pnotify .brighttheme-icon-info {
    background-color: #0036ac;
    color: #c6d8ff;
}

[ui-pnotify].ui-pnotify .brighttheme-icon-success {
    background-color: #4f7226;
    color: #daecc5;
}

[ui-pnotify].ui-pnotify .brighttheme-icon-error {
    width: 0;
    height: 0;
    font-size: 0;
    line-height: 0;
    border-radius: 0;
    border-left: 0.6rem solid transparent;
    border-right: 0.6rem solid transparent;
    border-bottom: 1.2rem solid danger(#ff5252, 30%);
    color: #ffd2d2;
}

[ui-pnotify].ui-pnotify .brighttheme-icon-error:after {
    position: absolute;
    top: 0.1rem;
    left: -.25rem;
    font-size: 0.9rem;
    font-weight: 700;
    line-height: 1.4rem;
    font-family: "Courier New", Courier, monospace;
    content: "!";
}

[ui-pnotify].ui-pnotify .brighttheme {
    border-radius: 0;
}

[ui-pnotify].ui-pnotify .brighttheme.ui-pnotify-container {
    padding: 1.3rem;
}

[ui-pnotify].ui-pnotify-with-icon .brighttheme .ui-pnotify-confirm,
[ui-pnotify].ui-pnotify-with-icon .brighttheme .ui-pnotify-text,
[ui-pnotify].ui-pnotify-with-icon .brighttheme .ui-pnotify-title {
    margin-left: 1.8rem;
}

[dir=rtl] [ui-pnotify].ui-pnotify-with-icon .brighttheme .ui-pnotify-confirm,
[dir=rtl] [ui-pnotify].ui-pnotify-with-icon .brighttheme .ui-pnotify-text,
[dir=rtl] [ui-pnotify].ui-pnotify-with-icon .brighttheme .ui-pnotify-title {
    margin-right: 1.8rem;
    margin-left: 0;
}

[ui-pnotify].ui-pnotify .brighttheme-icon-notice:after {
    content: "!";
}

[ui-pnotify].ui-pnotify .brighttheme-icon-info:after {
    content: "i";
}

[ui-pnotify].ui-pnotify .brighttheme-icon-success:after {
    content: "\002713";
}

[ui-pnotify].ui-pnotify .brighttheme-icon-error:after {
    content: "!";
}

[ui-pnotify].ui-pnotify .brighttheme-icon-closer:after {
    content: "\002715";
}

[ui-pnotify].ui-pnotify .brighttheme-icon-sticker:after {
    top: -1px;
    content: "\002016";
}

[ui-pnotify].ui-pnotify .brighttheme-icon-sticker.brighttheme-icon-stuck:after {
    content: "\00003E";
}

.br-theme-bars-1to10 .br-widget a {
    background-color: #fff9f0;
}

.br-theme-bars-1to10 .br-widget a.br-active, .br-theme-bars-1to10 .br-widget a.br-selected {
    background-color: #ffba57;
}

.br-theme-bars-1to10 .br-widget .br-current-rating {
    color: #ffba57;
}

.br-theme-bars-1to10 .br-readonly a.br-active, .br-theme-bars-1to10 .br-readonly a.br-selected {
    background-color: #ffba57;
}

.br-theme-bars-1to10 .br-readonly .br-current-rating {
    color: #ffe4bd;
}

.br-theme-bars-horizontal .br-widget a {
    background-color: #fff9f0;
}

.br-theme-bars-horizontal .br-widget a.br-active, .br-theme-bars-horizontal .br-widget a.br-selected {
    background-color: #ffba57;
}

.br-theme-bars-horizontal .br-widget .br-current-rating {
    color: #ffba57;
}

.br-theme-bars-horizontal .br-readonly a.br-active, .br-theme-bars-horizontal .br-readonly a.br-selected {
    background-color: #fff9f0;
}

.br-theme-bars-horizontal .br-readonly .br-current-rating {
    color: #fff9f0;
}

.br-theme-bars-movie .br-widget {
    height: auto;
}

.br-theme-bars-movie .br-widget a {
    background-color: #dfe9ff;
}

.br-theme-bars-movie .br-widget a.br-active, .br-theme-bars-movie .br-widget a.br-selected {
    background-color: #4680ff;
}

.br-theme-bars-movie .br-widget .br-current-rating {
    color: #4680ff;
}

.br-theme-bars-movie .br-readonly a.br-active, .br-theme-bars-movie .br-readonly a.br-selected {
    background-color: #acc6ff;
}

.br-theme-bars-movie .br-readonly .br-current-rating {
    color: #acc6ff;
}

.br-theme-bars-pill .br-widget a {
    background-color: white;
    color: #9ccc65;
}

.br-theme-bars-pill .br-widget a.br-active, .br-theme-bars-pill .br-widget a.br-selected {
    background-color: #9ccc65;
}

.br-theme-bars-pill .br-readonly a.br-active, .br-theme-bars-pill .br-readonly a.br-selected {
    background-color: #b5d98b;
}

.br-theme-bars-reversed .br-widget a {
    background-color: #a8f5ff;
    color: #00acc1;
}

.br-theme-bars-reversed .br-widget a.br-active, .br-theme-bars-reversed .br-widget a.br-selected {
    background-color: #00acc1;
}

.br-theme-bars-reversed .br-widget .br-current-rating {
    color: #00acc1;
    width: 100%;
    padding: 0;
    margin-top: 15px;
}

.br-theme-bars-reversed .br-readonly a.br-active, .br-theme-bars-reversed .br-readonly a.br-selected {
    background-color: #00d9f4;
}

.br-theme-bars-reversed .br-readonly .br-current-rating {
    color: #00d9f4;
}

.br-theme-bars-square .br-widget a {
    border: 2px solid #ffd2d2;
    color: #ffd2d2;
}

.br-theme-bars-square .br-widget a.br-active, .br-theme-bars-square .br-widget a.br-selected {
    border: 2px solid #ff5252;
    color: #ff5252;
}

.br-theme-bars-square .br-readonly a.br-active, .br-theme-bars-square .br-readonly a.br-selected {
    border: 2px solid #ff8585;
    color: #ff8585;
}

.br-theme-bootstrap-stars .br-widget a:after {
    color: #e2e8f0;
}

.br-theme-css-stars .br-widget a:after {
    color: #e2e8f0;
}

.br-theme-css-stars .br-widget a.br-active:after, .br-theme-css-stars .br-widget a.br-selected:after {
    color: #ffba57;
}

.br-theme-fontawesome-stars .br-widget a {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 18px;
}

.br-theme-fontawesome-stars .br-widget a:after {
    content: "\f005";
    color: #e2e8f0;
}

.br-theme-fontawesome-stars .br-widget a.br-active:after, .br-theme-fontawesome-stars .br-widget a.br-selected:after {
    color: #ffba57;
}

.br-theme-fontawesome-stars-o .br-widget a {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 18px;
}

.br-theme-fontawesome-stars-o .br-widget a:after {
    content: "\f005";
    color: #e2e8f0;
}

.br-theme-fontawesome-stars-o .br-widget a.br-active:after, .br-theme-fontawesome-stars-o .br-widget a.br-selected:after {
    color: #9ccc65;
}

.br-theme-fontawesome-stars-o .br-widget a.br-fractional:after {
    content: "\f5c0";
    color: #9ccc65;
}

.slider.slider-horizontal .slider-handle.triangle,
.slider.slider-horizontal .slider-tick.triangle {
    border-bottom-color: #4680ff;
}

.slider.slider-vertical .slider-handle.triangle,
.slider.slider-vertical .slider-tick.triangle {
    border-left-color: #4680ff;
    border-right-color: #4680ff;
}

.slider.slider-disabled .slider-handle {
    background-image: linear-gradient(to bottom, #dfdfdf 0, #bebebe 100%);
    background-repeat: repeat-x;
}

.slider.slider-disabled .slider-track {
    background-image: linear-gradient(to bottom, #ecf0f5 0, #ecf0f5 100%);
    background-repeat: repeat-x;
}

.slider-track {
    background-image: linear-gradient(to bottom, #ecf0f5 0, #ecf0f5 100%);
    background-repeat: repeat-x;
}

.slider-selection {
    background-image: linear-gradient(to bottom, #c6d8ff 0, #c6d8ff 100%);
    background-repeat: repeat-x;
}

.slider-selection.tick-slider-selection {
    background-image: linear-gradient(to bottom, #acc6ff 0, #acc6ff 100%);
    background-repeat: repeat-x;
}

.slider-handle {
    background-color: #4680ff;
    background-image: linear-gradient(to bottom, #4680ff 0, #4680ff 100%);
    background-repeat: repeat-x;
}

.slider-tick {
    background-image: linear-gradient(to bottom, #f9f9f9 0, #f5f5f5 100%);
    background-repeat: repeat-x;
}

.slider-tick.in-selection {
    background-image: linear-gradient(to bottom, #acc6ff 0, #acc6ff 100%);
    background-repeat: repeat-x;
}

#ex7-enabled {
    position: relative;
    top: 4px;
    height: 18px;
    width: 18px;
}

#RGB {
    height: 10px;
    background: gray;
}

#RC .slider-selection {
    background: #FF8282;
}

#RC .slider-handle {
    background: red;
}

#GC .slider-selection {
    background: #428041;
}

#GC .slider-handle {
    background: green;
}

#BC .slider-selection {
    background: #8283FF;
}

#BC .slider-handle {
    border-bottom-color: blue;
}

#B,
#G,
#R {
    width: 300px;
}

.slider-handle.custom {
    background: transparent none;
}

.slider-handle.custom::before {
    line-height: 15px;
    font-size: 28px;
    content: '\2605';
    color: #726204;
}

#slider12a .slider-track-high,
#slider12c .slider-track-high {
    background: #9ccc65;
}

#slider12b .slider-track-low {
    background: #ff5252;
}

#slider12c .slider-track-low {
    background: #ff5252;
}

#slider12c .slider-selection {
    background: #ffba57;
}

#slider22 .slider-rangeHighlight {
    background: #f70616;
}

#slider22 .slider-rangeHighlight.category1 {
    background: #FF9900;
}

#slider22 .slider-rangeHighlight.category2 {
    background: #99CC00;
}

.daterangepicker {
    font-family: "Open Sans", sans-serif;
    border: 1px solid rgba(0, 0, 0, 0.15);
    box-shadow: 0 0 25px rgba(70, 128, 255, 0.15);
    background-color: #fff;
}

.daterangepicker .calendar-table {
    border: 1px solid #fff;
    background-color: #fff;
}

.daterangepicker .calendar-table td,
    .daterangepicker .calendar-table th {
    color: #6c757d;
}

.daterangepicker .calendar-table .next span,
    .daterangepicker .calendar-table .prev span {
    border-color: #adb5bd;
}

.daterangepicker td.in-range {
    background-color: #e9f0ff;
    color: #495057;
}

.daterangepicker td.off, .daterangepicker td.off.end-date, .daterangepicker td.off.in-range, .daterangepicker td.off.start-date {
    background-color: #fff;
    color: #373a3c;
    opacity: 0.5;
}

.daterangepicker td.active, .daterangepicker td.active:hover {
    background-color: #4680ff;
    color: #fff;
}

.daterangepicker td.available:hover,
  .daterangepicker th.available:hover {
    background-color: #4680ff;
    color: #fff;
}

.daterangepicker td.available:hover > span,
    .daterangepicker th.available:hover > span {
    border-color: #fff;
}

.daterangepicker:after {
    border-bottom: 6px solid #fff;
}

.daterangepicker:before {
    border-bottom: 7px solid rgba(0, 0, 0, 0.15);
}

.daterangepicker .ranges ul {
    padding-top: 15px;
    padding-bottom: 15px;
}

@media (min-width: 564px) {
    .daterangepicker .ranges ul {
        width: 160px;
    }
}

.daterangepicker .ranges ul li {
    margin: 5px 10px;
    transition: all 0.2s ease-in-out;
}

.daterangepicker .ranges ul li.active {
    background-color: #4680ff;
}

.daterangepicker .ranges ul li:hover {
    box-shadow: 0 15px 8px -9px rgba(0, 0, 0, 0.25);
    background-color: #4680ff;
    color: #fff;
}

.daterangepicker .drp-buttons {
    border-top: 1px solid rgba(0, 0, 0, 0.15);
}

.daterangepicker.show-ranges .drp-calendar.left {
    border-left: 1px solid rgba(0, 0, 0, 0.15);
}

.bootstrap-tagsinput {
    padding: 5px 10px;
    background: #ecf0f5;
    border: 1px solid #e3eaef;
    border-radius: 0.25rem;
    width: 100%;
}

.bootstrap-tagsinput .tag {
    background: #4680ff;
    color: #fff;
    border-radius: 0.25rem;
}

.bootstrap-maxlength {
    background: #4680ff;
    border-radius: 0.25rem;
    padding: 5px 10px;
    color: #fff;
}

.bootstrap-maxlength.label-danger {
    background: #ff5252;
}

.bootstrap-maxlength.label-success {
    background: #9ccc65;
}

.bootstrap-maxlength.label-warning {
    background: #ffba57;
}

.bt-wizard .nav {
    background: #ecf0f5;
}

.bt-wizard .nav .nav-link.active {
    box-shadow: 0px 0px 5px 2px rgba(70, 128, 255, 0.3);
}

.select2-container .select2-selection--single {
    height: calc(1.5em + 0.75rem + 2px);
}

.select2-container .select2-selection--single .select2-selection__rendered {
    display: block;
    padding-left: 8px;
    padding-right: 20px;
}

.select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
    padding-right: 8px;
    padding-left: 20px;
}

.select2-container .select2-selection--multiple {
    min-height: 32px;
}

.select2-container .select2-selection--multiple .select2-selection__rendered {
    padding-left: 8px;
}

.select2-dropdown {
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 3px;
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 3px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: calc(1.5em + 0.75rem + 2px);
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: calc(1.5em + 0.75rem + 2px);
}

.select2-container--default .select2-selection--multiple {
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 3px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #4680ff;
    border: 1px solid #4680ff;
    color: #fff;
    border-radius: 3px;
    padding: 2px 10px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    color: #fff;
    margin-right: 8px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: #fff;
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
    margin-left: 8px;
    margin-right: auto;
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: solid #ced4da 1px;
    outline: 0;
}

.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid #ced4da;
}

.select2-container--default .select2-results__option[aria-selected=true] {
    background-color: #ecf0f5;
}

.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #4680ff;
    color: #fff;
}

.select2-container--classic .select2-selection--single {
    background-color: #f7f7f7;
    border: 1px solid #ced4da;
    border-radius: 3px;
    outline: 0;
}

.select2-container--classic .select2-selection--single:focus {
    border: 1px solid #4680ff;
}

.select2-container--classic .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: calc(1.5em + 0.75rem + 2px);
}

.select2-container--classic .select2-selection--single .select2-selection__arrow {
    background-color: #ecf0f5;
    border-left: 1px solid #ced4da;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    height: calc(1.5em + 0.75rem + 2px);
}

.select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__arrow {
    border-right: 1px solid #ced4da;
    border-radius: 0;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

.select2-container--classic.select2-container--open .select2-selection--single {
    border: 1px solid #4680ff;
}

.select2-container--classic .select2-selection--multiple {
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 3px;
}

.select2-container--classic .select2-selection--multiple:focus {
    border: 1px solid #4680ff;
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice {
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 3px;
}

.select2-container--classic.select2-container--open .select2-selection--multiple {
    border: 1px solid #4680ff;
}

.select2-container--classic .select2-search--dropdown .select2-search__field {
    border: 1px solid #ced4da;
}

.select2-container--classic .select2-results__option--highlighted[aria-selected] {
    background-color: #3875d7;
    color: #fff;
}

.select2-container--classic.select2-container--open .select2-dropdown {
    border-color: #4680ff;
}

/**  =====================
      Data Tables css start
==========================  **/
.table td,
.table th {
    border-top: 1px solid #e2e5e8;
    white-space: nowrap;
    padding: 1.05rem 0.75rem;
}

.table thead th {
    border-bottom: 1px solid #e2e5e8;
    font-size: 13px;
    color: #37474f;
    background: #ecf0f5;
    text-transform: uppercase;
}

.table tbody + tbody {
    border-top: 2px solid #e2e5e8;
}

.table.table-dark thead th {
    background-color: #11171a;
}

.table.dataTable[class*="table-"] thead th {
    background: #ecf0f5;
}

/* Border versions */
.table-bordered {
    border: 1px solid #e2e5e8;
}

.table-bordered td,
  .table-bordered th {
    border: 1px solid #e2e5e8;
}

/* Zebra-striping */
.table-striped tbody tr:nth-of-type(2n+1) {
    background-color: rgba(70, 128, 255, 0.03);
}

/* Hover effect */
.table-hover tbody tr:hover {
    background-color: rgba(70, 128, 255, 0.03);
}

/* Table backgrounds */
.table .thead-dark th {
    color: #fff;
    background-color: #263238;
    border-color: #11171a;
}

.table-dark {
    color: #fff;
    background-color: #263238;
}

.table-dark td,
  .table-dark th,
  .table-dark thead th {
    border-color: #11171a;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: #222d32;
}

.table-dark.table-hover tbody tr:hover {
    background-color: #1c2429;
}

.table-dark thead th {
    color: #fff;
}

/* fixed header position */
table.dataTable.fixedHeader-floating {
    top: 0 !important;
}

@media screen and (max-width: 992px) {
    table.dataTable.fixedHeader-floating {
        display: none !important;
    }
}

@media screen and (max-width: 992px) {
    .fixedHeader-locked {
        display: none !important;
    }
}

/**  =====================
      Foo-table css start
==========================  **/
.footable .pagination > .active > a,
.footable .pagination > .active > span {
    background-color: #4680ff;
    border-color: #4680ff;
}

.footable .pagination > .active > a:focus, .footable .pagination > .active > a:hover,
  .footable .pagination > .active > span:focus,
  .footable .pagination > .active > span:hover {
    background-color: #4680ff;
    border-color: #4680ff;
}

.footable .pagination > li > a,
.footable .pagination > li > span {
    color: #222;
}

.footable-details.table,
.footable.table {
    margin-bottom: 0;
}

table.footable > tfoot > tr.footable-paging > td > span.label {
    margin-bottom: 0;
}

table.footable-paging-center > tfoot > tr.footable-paging > td {
    padding-bottom: 0;
}

.table-columned > tbody > tr > td {
    border: 0;
    border-left: 1px solid #e2e5e8;
}

.table-columned > tbody > tr > th {
    border: 0;
}

/**====== Foo-table css end ======**/
/**======= basic table css start =======**/
.table.table-xl td,
.table.table-xl th {
    padding: 1.25rem 0.75rem;
}

.table.table-lg td,
.table.table-lg th {
    padding: 0.9rem 0.75rem;
}

.table.table-de td,
.table.table-de th {
    padding: 0.75rem 0.75rem;
}

.table.table-sm td,
.table.table-sm th {
    padding: 0.6rem 0.75rem;
}

.table.table-xs td,
.table.table-xs th {
    padding: 0.4rem 0.75rem;
}

/**======= basic table css end ======**/
#row-delete .selected,
#row-select .selected {
    background-color: #4680ff;
    color: #fff;
}

table.dataTable tbody > tr.selected,
table.dataTable tbody > tr > .selected {
    background: #4680ff;
}

table.dataTable tbody > tr.selected table.dataTable tbody > tr > .selected td.select-checkbox:after,
  table.dataTable tbody > tr.selected table.dataTable tbody > tr.selected.select-checkbox:after,
  table.dataTable tbody > tr.selected th.select-checkbox:after,
  table.dataTable tbody > tr > .selected table.dataTable tbody > tr > .selected td.select-checkbox:after,
  table.dataTable tbody > tr > .selected table.dataTable tbody > tr.selected.select-checkbox:after,
  table.dataTable tbody > tr > .selected th.select-checkbox:after {
    text-shadow: 1px 1px #e4f2fe, -1px -1px #e4f2fe, 1px -1px #e4f2fe, -1px 1px #e4f2fe;
}

table.dataTable tbody .selected td.select-checkbox:before,
table.dataTable tbody .selected th.select-checkbox:before {
    border-color: #fff;
}

table.dataTable tbody > tr > .selected td.select-checkbox:after,
table.dataTable tbody > tr > .selected th.select-checkbox:after,
table.dataTable tbody > tr.selected td.select-checkbox:after,
table.dataTable tbody > tr.selected th.select-checkbox:after {
    content: '\2714';
    margin-top: -11px;
    margin-left: -4px;
    text-align: center;
}

div.dt-button-info {
    position: fixed;
    top: 50%;
    left: 50%;
    width: 400px;
    margin-top: -100px;
    margin-left: -200px;
    background-color: #dfe9ff;
    color: #4680ff;
    border: 2px solid #4680ff;
    box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.3);
    border-radius: 3px;
    text-align: center;
    z-index: 21;
}

div.dt-button-info h2 {
    padding: 0.5em;
    margin: 0;
    font-weight: normal;
    color: #fff;
    border-bottom: 1px solid #4680ff;
    background-color: #4680ff;
}

div.dt-button-info > div {
    padding: 1em;
}

.dt-buttons {
    margin-bottom: 5px;
}

table.dataTable tbody td.focus,
table.dataTable tbody th.focus {
    box-shadow: inset 0 0 1px 2px #4680ff;
}

div.dtk-focus-alt table.dataTable tbody td.focus,
div.dtk-focus-alt table.dataTable tbody th.focus {
    box-shadow: inset 0 0 1px 2px #ffba57;
    background: rgba(255, 186, 87, 0.15);
    color: #ffba57;
}

/**====== Data Tables css end ======**/
.highcharts-container {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 100%;
    text-align: left;
    line-height: normal;
    z-index: 0;
    font-size: 12px;
}

.highcharts-root {
    display: block;
}

.highcharts-root text {
    stroke-width: 0;
}

.highcharts-strong {
    font-weight: bold;
}

.highcharts-emphasized {
    font-style: italic;
}

.highcharts-anchor {
    cursor: pointer;
}

.highcharts-background {
    fill: #ffffff;
}

.highcharts-label-box,
.highcharts-plot-background,
.highcharts-plot-border {
    fill: none;
}

.highcharts-button-box {
    fill: inherit;
}

.highcharts-tracker-line {
    stroke-linejoin: round;
    stroke: rgba(192, 192, 192, 0.0001);
    stroke-width: 22;
    fill: none;
}

.highcharts-tracker-area {
    fill: rgba(192, 192, 192, 0.0001);
    stroke-width: 0;
}

/* Titles */
.highcharts-title {
    fill: #333333;
    font-size: 1.5em;
}

.highcharts-subtitle {
    fill: #666666;
}

/* Axes */
.highcharts-axis-line {
    fill: none;
    stroke: #ccd6eb;
}

.highcharts-yaxis .highcharts-axis-line {
    stroke-width: 0;
}

.highcharts-axis-title {
    fill: #666666;
}

.highcharts-axis-labels {
    fill: #666666;
    cursor: default;
    font-size: 0.9em;
}

.highcharts-grid-line {
    fill: none;
    stroke: #e6e6e6;
}

.highcharts-xaxis-grid .highcharts-grid-line {
    stroke-width: 0;
}

.highcharts-tick {
    stroke: #ccd6eb;
}

.highcharts-yaxis .highcharts-tick {
    stroke-width: 0;
}

.highcharts-minor-grid-line {
    stroke: #f2f2f2;
}

.highcharts-crosshair-thin {
    stroke-width: 1px;
    stroke: #cccccc;
}

.highcharts-crosshair-category {
    stroke: #ccd6eb;
    stroke-opacity: 0.25;
}

/* Credits */
.highcharts-credits {
    cursor: pointer;
    fill: #999999;
    font-size: 0.7em;
    transition: fill 250ms, font-size 250ms;
}

.highcharts-credits:hover {
    fill: black;
    font-size: 1em;
}

/* Tooltip */
.highcharts-tooltip {
    cursor: default;
    pointer-events: none;
    white-space: nowrap;
    transition: stroke 150ms;
}

.highcharts-tooltip text {
    fill: #333333;
}

.highcharts-tooltip .highcharts-header {
    font-size: 0.85em;
}

.highcharts-tooltip-box {
    stroke-width: 1px;
    fill: #f7f7f7;
    fill-opacity: 0.85;
}

.highcharts-tooltip-box .highcharts-label-box {
    fill: #f7f7f7;
    fill-opacity: 0.85;
}

.highcharts-selection-marker {
    fill: #4680ff;
    fill-opacity: 0.25;
}

.highcharts-graph {
    fill: none;
    stroke-width: 2px;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.highcharts-state-hover .highcharts-graph {
    stroke-width: 3;
}

.highcharts-state-hover path {
    transition: stroke-width 50;
  /* quick in */
}

.highcharts-state-normal path {
    transition: stroke-width 250ms;
  /* slow out */
}

/* Legend hover affects points and series */
.highcharts-data-labels,
.highcharts-markers,
.highcharts-point,
g.highcharts-series {
    transition: opacity 250ms;
}

.highcharts-legend-point-active .highcharts-point:not(.highcharts-point-hover),
.highcharts-legend-series-active g.highcharts-series:not(.highcharts-series-hover) {
    opacity: 0.2;
}

.highcharts-legend-series-active .highcharts-data-labels:not(.highcharts-series-hover),
.highcharts-legend-series-active .highcharts-markers:not(.highcharts-series-hover) {
    opacity: 0.2;
}

/* Series options */
/* Default colors */
.highcharts-color-0 {
    fill: #4680ff;
    stroke: #4680ff;
}

.highcharts-color-1 {
    fill: #343a40;
    stroke: #343a40;
}

.highcharts-color-2 {
    fill: #9ccc65;
    stroke: #9ccc65;
}

.highcharts-color-3 {
    fill: #ff5252;
    stroke: #ff5252;
}

.highcharts-color-4 {
    fill: #6610f2;
    stroke: #6610f2;
}

.highcharts-color-5 {
    fill: #e83e8c;
    stroke: #e83e8c;
}

.highcharts-color-6 {
    fill: #ffba57;
    stroke: #ffba57;
}

.highcharts-color-7 {
    fill: #20c997;
    stroke: #20c997;
}

.highcharts-color-8 {
    fill: #fd7e14;
    stroke: #fd7e14;
}

.highcharts-color-9 {
    fill: #00acc1;
    stroke: #00acc1;
}

.highcharts-area {
    fill-opacity: 0.75;
    stroke-width: 0;
}

.highcharts-markers {
    stroke-width: 1px;
    stroke: #ffffff;
}

.highcharts-point {
    stroke-width: 1px;
}

.highcharts-dense-data .highcharts-point {
    stroke-width: 0;
}

.highcharts-data-label {
    font-size: 0.9em;
    font-weight: bold;
}

.highcharts-data-label-box {
    fill: none;
    stroke-width: 0;
}

.highcharts-data-label text,
text.highcharts-data-label {
    fill: #333333;
}

.highcharts-data-label-connector {
    fill: none;
}

.highcharts-halo {
    fill-opacity: 0.25;
    stroke-width: 0;
}

.highcharts-markers .highcharts-point-select,
.highcharts-series:not(.highcharts-pie-series) .highcharts-point-select {
    fill: #cccccc;
    stroke: #000000;
}

.highcharts-column-series rect.highcharts-point {
    stroke: #ffffff;
}

.highcharts-column-series .highcharts-point {
    transition: fill-opacity 250ms;
}

.highcharts-column-series .highcharts-point-hover {
    fill-opacity: 0.75;
    transition: fill-opacity 50ms;
}

.highcharts-pie-series .highcharts-point {
    stroke-linejoin: round;
    stroke: #ffffff;
}

.highcharts-pie-series .highcharts-point-hover {
    fill-opacity: 0.75;
    transition: fill-opacity 50ms;
}

.highcharts-funnel-series .highcharts-point,
.highcharts-pyramid-series .highcharts-point {
    stroke-linejoin: round;
    stroke: #ffffff;
}

.highcharts-funnel-series .highcharts-point-hover,
.highcharts-pyramid-series .highcharts-point-hover {
    fill-opacity: 0.75;
    transition: fill-opacity 50ms;
}

.highcharts-funnel-series .highcharts-point-select,
.highcharts-pyramid-series .highcharts-point-select {
    fill: inherit;
    stroke: inherit;
}

.highcharts-solidgauge-series .highcharts-point {
    stroke-width: 0;
}

.highcharts-treemap-series .highcharts-point {
    stroke-width: 1px;
    stroke: #e6e6e6;
    transition: stroke 250ms, fill 250ms, fill-opacity 250ms;
}

.highcharts-treemap-series .highcharts-point-hover {
    stroke: #999999;
    transition: stroke 25ms, fill 25ms, fill-opacity 25ms;
}

.highcharts-treemap-series .highcharts-above-level {
    display: none;
}

.highcharts-treemap-series .highcharts-internal-node {
    fill: none;
}

.highcharts-treemap-series .highcharts-internal-node-interactive {
    fill-opacity: 0.15;
    cursor: pointer;
}

.highcharts-treemap-series .highcharts-internal-node-interactive:hover {
    fill-opacity: 0.75;
}

/* Legend */
.highcharts-legend-box {
    fill: none;
    stroke-width: 0;
}

.highcharts-legend-item > text {
    fill: #333333;
    font-weight: bold;
    font-size: 1em;
    cursor: pointer;
    stroke-width: 0;
}

.highcharts-legend-item:hover text {
    fill: #000000;
}

.highcharts-legend-item-hidden * {
    fill: #cccccc !important;
    stroke: #cccccc !important;
    transition: fill 250ms;
}

.highcharts-legend-nav-active {
    fill: #4680ff;
    cursor: pointer;
}

.highcharts-legend-nav-inactive {
    fill: #cccccc;
}

circle.highcharts-legend-nav-active, circle.highcharts-legend-nav-inactive {
  /* tracker */
    fill: rgba(192, 192, 192, 0.0001);
}

.highcharts-legend-title-box {
    fill: none;
    stroke-width: 0;
}

/* Bubble legend */
.highcharts-bubble-legend-symbol {
    stroke-width: 2;
    fill-opacity: 0.5;
}

.highcharts-bubble-legend-connectors {
    stroke-width: 1;
}

.highcharts-bubble-legend-labels {
    fill: #333333;
}

/* Loading */
.highcharts-loading {
    position: absolute;
    background-color: #ffffff;
    opacity: 0.5;
    text-align: center;
    z-index: 10;
    transition: opacity 250ms;
}

.highcharts-loading-hidden {
    height: 0 !important;
    opacity: 0;
    overflow: hidden;
    transition: opacity 250ms, height 250ms step-end;
}

.highcharts-loading-inner {
    font-weight: bold;
    position: relative;
    top: 45%;
}

/* Plot bands and polar pane backgrounds */
.highcharts-pane,
.highcharts-plot-band {
    fill: #000000;
    fill-opacity: 0.05;
}

.highcharts-plot-line {
    fill: none;
    stroke: #999999;
    stroke-width: 1px;
}

/* Highcharts More and modules */
.highcharts-boxplot-box {
    fill: #ffffff;
}

.highcharts-boxplot-median {
    stroke-width: 2px;
}

.highcharts-bubble-series .highcharts-point {
    fill-opacity: 0.5;
}

.highcharts-errorbar-series .highcharts-point {
    stroke: #000000;
}

.highcharts-gauge-series .highcharts-data-label-box {
    stroke: #cccccc;
    stroke-width: 1px;
}

.highcharts-gauge-series .highcharts-dial {
    fill: #000000;
    stroke-width: 0;
}

.highcharts-polygon-series .highcharts-graph {
    fill: inherit;
    stroke-width: 0;
}

.highcharts-waterfall-series .highcharts-graph {
    stroke: #333333;
    stroke-dasharray: 1, 3;
}

.highcharts-sankey-series .highcharts-point {
    stroke-width: 0;
}

.highcharts-sankey-series .highcharts-link {
    transition: fill 250ms, fill-opacity 250ms;
    fill-opacity: 0.5;
}

.highcharts-sankey-series .highcharts-point-hover.highcharts-link {
    transition: fill 50ms, fill-opacity 50ms;
    fill-opacity: 1;
}

.highcharts-venn-series .highcharts-point {
    fill-opacity: 0.75;
    stroke: #cccccc;
    transition: stroke 250ms, fill-opacity 250ms;
}

.highcharts-venn-series .highcharts-point-hover {
    fill-opacity: 1;
    stroke: #cccccc;
}

/* Highstock */
.highcharts-navigator-mask-outside {
    fill-opacity: 0;
}

.highcharts-navigator-mask-inside {
    fill: #4680ff;
  /* navigator.maskFill option */
    fill-opacity: 0.25;
    cursor: ew-resize;
}

.highcharts-navigator-outline {
    stroke: #cccccc;
    fill: none;
}

.highcharts-navigator-handle {
    stroke: #cccccc;
    fill: #f2f2f2;
    cursor: ew-resize;
}

.highcharts-navigator-series {
    fill: #4680ff;
    stroke: #4680ff;
}

.highcharts-navigator-series .highcharts-graph {
    stroke-width: 1px;
}

.highcharts-navigator-series .highcharts-area {
    fill-opacity: 0.05;
}

.highcharts-navigator-xaxis .highcharts-axis-line {
    stroke-width: 0;
}

.highcharts-navigator-xaxis .highcharts-grid-line {
    stroke-width: 1px;
    stroke: #e6e6e6;
}

.highcharts-navigator-xaxis.highcharts-axis-labels {
    fill: #999999;
}

.highcharts-navigator-yaxis .highcharts-grid-line {
    stroke-width: 0;
}

.highcharts-scrollbar-thumb {
    fill: #cccccc;
    stroke: #cccccc;
    stroke-width: 1px;
}

.highcharts-scrollbar-button {
    fill: #e6e6e6;
    stroke: #cccccc;
    stroke-width: 1px;
}

.highcharts-scrollbar-arrow {
    fill: #666666;
}

.highcharts-scrollbar-rifles {
    stroke: #666666;
    stroke-width: 1px;
}

.highcharts-scrollbar-track {
    fill: #f2f2f2;
    stroke: #f2f2f2;
    stroke-width: 1px;
}

.highcharts-button {
    fill: #f7f7f7;
    stroke: #cccccc;
    cursor: default;
    stroke-width: 1px;
    transition: fill 250ms;
}

.highcharts-button text {
    fill: #333333;
}

.highcharts-button-hover {
    transition: fill 0;
    fill: #e6e6e6;
    stroke: #cccccc;
}

.highcharts-button-hover text {
    fill: #333333;
}

.highcharts-button-pressed {
    font-weight: bold;
    fill: #e6ebf5;
    stroke: #cccccc;
}

.highcharts-button-pressed text {
    fill: #333333;
    font-weight: bold;
}

.highcharts-button-disabled text {
    fill: #333333;
}

.highcharts-range-selector-buttons .highcharts-button {
    stroke-width: 0;
}

.highcharts-range-label rect {
    fill: none;
}

.highcharts-range-label text {
    fill: #666666;
}

.highcharts-range-input {
    stroke-width: 1px;
    stroke: #cccccc;
}

.highcharts-range-input rect {
    fill: none;
}

.highcharts-range-input text {
    fill: #333333;
}

input.highcharts-range-selector {
    position: absolute;
    border: 0;
    width: 1px;
  /* Chrome needs a pixel to see it */
    height: 1px;
    padding: 0;
    text-align: center;
    left: -9em;
  /* #4798 */
}

.highcharts-crosshair-label text {
    fill: #ffffff;
    font-size: 1.1em;
}

.highcharts-crosshair-label .highcharts-label-box {
    fill: inherit;
}

.highcharts-candlestick-series .highcharts-point {
    stroke: #000000;
    stroke-width: 1px;
}

.highcharts-candlestick-series .highcharts-point-up {
    fill: #ffffff;
}

.highcharts-ohlc-series .highcharts-point-hover {
    stroke-width: 3px;
}

.highcharts-flags-series .highcharts-point .highcharts-label-box {
    stroke: #999999;
    fill: #ffffff;
    transition: fill 250ms;
}

.highcharts-flags-series .highcharts-point-hover .highcharts-label-box {
    stroke: #000000;
    fill: #ccd6eb;
}

.highcharts-flags-series .highcharts-point text {
    fill: #000000;
    font-size: 0.9em;
    font-weight: bold;
}

/* Highmaps */
.highcharts-map-series .highcharts-point {
    transition: fill 500ms, fill-opacity 500ms, stroke-width 250ms;
    stroke: #cccccc;
}

.highcharts-map-series .highcharts-point-hover {
    transition: fill 0ms, fill-opacity 0;
    fill-opacity: 0.5;
    stroke-width: 2px;
}

.highcharts-mapline-series .highcharts-point {
    fill: none;
}

.highcharts-heatmap-series .highcharts-point {
    stroke-width: 0;
}

.highcharts-map-navigation {
    font-size: 1.3em;
    font-weight: bold;
    text-align: center;
}

.highcharts-coloraxis {
    stroke-width: 0;
}

.highcharts-coloraxis-marker {
    fill: #999999;
}

.highcharts-null-point {
    fill: #f7f7f7;
}

/* 3d charts */
.highcharts-3d-frame {
    fill: transparent;
}

/* Exporting module */
.highcharts-contextbutton {
    fill: #ffffff;
  /* needed to capture hover */
    stroke: none;
    stroke-linecap: round;
}

.highcharts-contextbutton:hover {
    fill: #e6e6e6;
    stroke: #e6e6e6;
}

.highcharts-button-symbol {
    stroke: #666666;
    stroke-width: 3px;
}

.highcharts-menu {
    border: 1px solid #999999;
    background: #ffffff;
    padding: 5px 0;
    box-shadow: 3px 3px 10px #888;
}

.highcharts-menu-item {
    padding: 0.5em 1em;
    background: none;
    color: #333333;
    cursor: pointer;
    transition: background 250ms, color 250ms;
}

.highcharts-menu-item:hover {
    background: #4680ff;
    color: #ffffff;
}

/* Drilldown module */
.highcharts-drilldown-point {
    cursor: pointer;
}

.highcharts-drilldown-axis-label,
.highcharts-drilldown-data-label text,
text.highcharts-drilldown-data-label {
    cursor: pointer;
    fill: #4680ff;
    font-weight: bold;
    text-decoration: underline;
}

/* No-data module */
.highcharts-no-data text {
    font-weight: bold;
    font-size: 12px;
    fill: #666666;
}

/* Drag-panes module */
.highcharts-axis-resizer {
    cursor: ns-resize;
    stroke: black;
    stroke-width: 2px;
}

/* Bullet type series */
.highcharts-bullet-target {
    stroke-width: 0;
}

/* Lineargauge type series */
.highcharts-lineargauge-target,
.highcharts-lineargauge-target-line {
    stroke-width: 1px;
    stroke: #333333;
}

/* Annotations module */
.highcharts-annotation-label-box {
    stroke-width: 1px;
    stroke: #000000;
    fill: #000000;
    fill-opacity: 0.75;
}

.highcharts-annotation-label text {
    fill: #e6e6e6;
}

/* Gantt */
.highcharts-treegrid-node-collapsed,
.highcharts-treegrid-node-expanded {
    cursor: pointer;
}

.highcharts-point-connecting-path {
    fill: none;
}

.highcharts-grid-axis .highcharts-axis-line,
.highcharts-grid-axis .highcharts-tick {
    stroke-width: 1px;
}

.peity-chart + .peity {
    width: 100%;
    height: 250px;
}

/**  =====================
      Authentication css start
==========================  **/
.auth-wrapper {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    min-width: 100%;
    min-height: 100vh;
    background: #4680ff;
}

@media (min-width: 1200px) {
    .auth-wrapper .container {
        max-width: 1140px;
    }
}

@media (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .auth-wrapper {
        display: block;
        margin: 0 auto;
    }

    .auth-wrapper > .row {
        min-height: 100vh;
    }

    .auth-wrapper > .row > .aut-bg-img {
        min-height: 100vh;
    }
}

.auth-wrapper .saprator {
    position: relative;
    margin: 8px 0;
}

.auth-wrapper .saprator span {
    background: #fff;
    position: relative;
    padding: 0 10px;
    z-index: 5;
    font-size: 20px;
}

.auth-wrapper .saprator:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 0;
    width: 100%;
    height: 1px;
    background: #e2e5e8;
    z-index: 1;
}

.auth-wrapper a,
  .auth-wrapper p > a {
    color: #37474f;
    font-weight: 600;
}

.auth-wrapper .input-group {
    background: transparent;
}

.auth-wrapper .card {
    margin-bottom: 0;
    padding: 8px;
}

.auth-wrapper .card .card-body {
    padding: 20px 25px 20px 40px;
}

@media (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .auth-wrapper .card {
        display: block;
    }
}

.auth-wrapper > div {
    z-index: 5;
}

.auth-wrapper .auth-content {
    position: relative;
    padding: 15px;
    z-index: 5;
}

.auth-wrapper .auth-content:not(.container) {
    width: 400px;
}

.auth-wrapper .auth-content:not(.container) .card-body {
    padding: 40px 35px;
}

@media (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .auth-wrapper .auth-content {
        margin: 0 auto;
    }
}

.auth-wrapper .auth-side-img {
    padding-right: 400px;
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    justify-content: center;
}

@media only screen and (max-width: 991px) {
    .auth-wrapper .auth-side-img {
        display: none;
    }
}

.auth-wrapper .auth-side-form {
    position: relative;
    min-height: 100%;
    background: #fff;
    display: inline-flex;
    align-items: center;
    left: auto;
    float: right;
}

.auth-wrapper .auth-side-form > * {
    position: relative;
    z-index: 5;
}

@media only screen and (max-width: 991px) {
    .auth-wrapper .auth-side-form {
        width: 100%;
        justify-content: center;
    }

    .auth-wrapper .auth-side-form .auth-content:not(.container) {
        max-width: 350px;
    }
}

@media (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .auth-wrapper.aut-bg-img .auth-side-form {
        height: 100vh;
    }
}

@media only screen and (max-width: 767px) {
    .auth-wrapper .card .card-body {
        padding: 30px 15px;
    }
}

.auth-wrapper.offline {
    background-image: none;
}

.auth-wrapper.offline h1 {
    font-size: 87px;
    font-weight: 700;
}

.auth-wrapper.offline:before {
    display: none;
}

.auth-wrapper .card-body .carousel-indicators {
    margin: 15px 0 10px;
    bottom: 0;
}

.auth-wrapper .card-body .carousel-indicators li {
    width: 50px;
    background-color: rgba(70, 128, 255, 0.4);
    border-radius: 5px;
    height: 4px;
}

.auth-wrapper .card-body .carousel-indicators li.active {
    background-color: #4680ff;
}

.auth-wrapper .img-logo-overlay {
    position: absolute;
    top: 40px;
    left: 50px;
}

/* image varient start */
.aut-bg-img {
    background-image: url("../images/auth/img-auth-big.jpg");
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
}

.aut-bg-img .auth-content {
    padding: 70px 40px;
}

/* image varient End */
/**====== Authentication css end ======**/
/**  =====================
      Authentication css start
==========================  **/
.auth-wrapper.maintance {
    background: #ecf0f5;
}

.auth-wrapper.offline {
    background: radial-gradient(#94acbe, #253653);
}

.auth-wrapper.offline .offline-wrapper {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
}

.auth-wrapper.offline .offline-wrapper > svg {
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
}

.auth-wrapper.offline .offline-wrapper .boat-img {
    -webkit-animation: boatanim 12s ease-in-out infinite;
    animation: boatanim 12s ease-in-out infinite;
}

.auth-wrapper.offline .s-img-1,
  .auth-wrapper.offline .s-img-2 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

.auth-wrapper.offline .s-img-1 {
    -webkit-animation: sparcle 3.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
    animation: sparcle 3.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
}

.auth-wrapper.offline .s-img-2 {
    -webkit-animation: sparcle 3.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    animation: sparcle 3.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    -webkit-animation-delay: 1.19s;
    animation-delay: 1.19s;
}

.auth-wrapper.offline .moon {
    background: rgba(255, 255, 255, 0.4);
    position: absolute;
    top: 12%;
    left: 40%;
    width: 150px;
    height: 150px;
    border-radius: 50%;
}

.auth-wrapper.offline .moon:after, .auth-wrapper.offline .moon:before {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    position: absolute;
    top: 0;
    left: 0;
    box-shadow: inset 0 0 20px 5px rgba(255, 255, 255, 0.4);
}

.auth-wrapper.offline .moon:after {
    -webkit-animation: sunwawe 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
    animation: sunwawe 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
}

.auth-wrapper.offline .moon:before {
    -webkit-animation: sunwawe 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    animation: sunwawe 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    -webkit-animation-delay: 1.15s;
    animation-delay: 1.15s;
}

.auth-wrapper.offline .sark .img-sark {
    width: 300px;
    position: absolute;
    right: -200px;
    -webkit-animation: sark 12s ease-in-out infinite;
    animation: sark 12s ease-in-out infinite;
}

.auth-wrapper.offline .sark .bubble {
    background: rgba(255, 255, 255, 0);
    position: absolute;
    top: 12%;
    left: 60%;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    -webkit-animation: bubble 12s ease-in-out infinite;
    animation: bubble 12s ease-in-out infinite;
}

.auth-wrapper.offline .sark .bubble:after, .auth-wrapper.offline .sark .bubble:before {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    position: absolute;
    top: 0;
    left: 0;
    box-shadow: inset 0 0 20px 5px rgba(255, 255, 255, 0.4);
}

.auth-wrapper.offline .sark .bubble:after {
    -webkit-animation: sunwawe 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
    animation: sunwawe 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
}

.auth-wrapper.offline .sark .bubble:before {
    -webkit-animation: sunwawe 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    animation: sunwawe 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    -webkit-animation-delay: 1.15s;
    animation-delay: 1.15s;
}

.auth-wrapper.offline .off-main {
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
}

.auth-wrapper.offline .off-main .off-content {
    position: absolute;
    width: 100%;
    bottom: 5%;
    left: 0;
    z-index: 5;
}

@media only screen and (max-width: 575px) {
    .auth-wrapper.offline .sark {
        display: none;
    }

    .auth-wrapper.offline .offline-wrapper > svg {
        height: 95%;
    }

    .auth-wrapper.offline .off-main .off-content {
        bottom: 0%;
    }

    .auth-wrapper.offline .off-main .off-content h1 {
        font-size: 45px;
    }

    .auth-wrapper.offline .moon {
        top: 12%;
        width: 50px;
        height: 50px;
    }
}

@-webkit-keyframes bubble {
    0%, 30% {
        opacity: 0;
    }

    31% {
        opacity: 1;
    }

    59% {
        opacity: 1;
    }

    60%, 100% {
        opacity: 0;
    }
}

@keyframes bubble {
    0%, 30% {
        opacity: 0;
    }

    31% {
        opacity: 1;
    }

    59% {
        opacity: 1;
    }

    60%, 100% {
        opacity: 0;
    }
}

@-webkit-keyframes sark {
    0% {
        transform: rotate(-10deg) translate(245px, 46px);
    }

    30% {
        transform: rotate(-13deg) translate(-329px, -80px);
    }

    60% {
        transform: rotate(-13deg) translate(-329px, -80px);
    }

    100% {
        transform: rotate(-26deg) translate(-887px, -80px);
    }
}

@keyframes sark {
    0% {
        transform: rotate(-10deg) translate(245px, 46px);
    }

    30% {
        transform: rotate(-13deg) translate(-329px, -80px);
    }

    60% {
        transform: rotate(-13deg) translate(-329px, -80px);
    }

    100% {
        transform: rotate(-26deg) translate(-887px, -80px);
    }
}

@-webkit-keyframes boatanim {
    0% {
        transform: rotate(-10deg) translate(95px, -14px);
    }

    50% {
        transform: rotate(5deg) translate(-65px, -14px);
    }

    100% {
        transform: rotate(-10deg) translate(95px, -14px);
    }
}

@keyframes boatanim {
    0% {
        transform: rotate(-10deg) translate(95px, -14px);
    }

    50% {
        transform: rotate(5deg) translate(-65px, -14px);
    }

    100% {
        transform: rotate(-10deg) translate(95px, -14px);
    }
}

@-webkit-keyframes sunwawe {
    0% {
        transform: scale(1);
        opacity: 1;
    }

    100% {
        transform: scale(4);
        opacity: 0;
    }
}

@keyframes sunwawe {
    0% {
        transform: scale(1);
        opacity: 1;
    }

    100% {
        transform: scale(4);
        opacity: 0;
    }
}

@-webkit-keyframes sparcle {
    0% {
        opacity: 0.5;
    }

    50% {
        opacity: 0;
    }
}

@keyframes sparcle {
    0% {
        opacity: 0.5;
    }

    50% {
        opacity: 0;
    }
}

/**====== Authentication css end ======**/
/* ===================== to do page start ======================================= */
#task-container ul {
    overflow: hidden;
    padding: 0;
}

#task-container li {
    float: left;
    width: 49%;
    overflow: auto;
    height: auto;
    min-height: 10px;
    background: #fff;
    display: inline-block;
    padding: 20px;
    border: 1px solid #ccc;
    color: #666;
    border-top: 5px solid #4680ff;
    cursor: pointer;
    margin-bottom: 20px;
    margin-right: 2%;
    transition: all 0.3s;
    position: relative;
}

#task-container li:nth-child(2n) {
    margin-right: 0;
}

#task-container li.complete {
    opacity: 1;
    border-top: 9px solid #ff5252;
    transition: all ease-in 0.3s;
}

#task-container li.complete:before {
    background: url("../images/complete.png") no-repeat;
    position: absolute;
    top: 5px;
    right: 5px;
    content: "";
    width: 55px;
    height: 55px;
    background-size: 100%;
}

#task-container li.complete p {
    text-decoration: line-through;
}

@media screen and (max-width: 580px) {
    #task-container li {
        width: 100%;
    }
}

.new-task .to-do-list .cr {
    float: left;
    top: 0;
    margin-right: 16px;
}

.new-task label input[type=checkbox] {
    display: none;
}

.checkbox-fade .cr {
    border-radius: 6px;
    border: 1px solid #e3e3e3;
    cursor: pointer;
    display: inline-block;
    float: left;
    height: 24px;
    margin-right: 0.5em;
    position: relative;
    width: 24px;
    margin-right: 16px;
    top: 0;
}

.task-panel .to-do-label {
    margin-bottom: 15px;
}

.task-panel .to-do-label:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding: 0;
}

.done-task .captions,
.done-task span {
    color: #919aa3;
    text-decoration: line-through;
}

.to-do-list i {
    color: #ccc;
    font-size: 17px;
    opacity: 0;
}

.to-do-list:hover i {
    opacity: 1;
    transition: opacity ease-in 0.3s;
}

.to-do-list h6 {
    display: inline-block;
}

.to-do-list .done-task {
    opacity: 0.7;
}

.to-do-list .done-task > div {
    -webkit-filter: grayscale(0.8);
    filter: grayscale(0.8);
}

.to-do-list .done-task h6,
  .to-do-list .done-task p,
  .to-do-list .done-task span {
    text-decoration: line-through;
}

.to-do-list .checkbox-fade .check-task {
    display: block;
}

.to-do-list .checkbox-fade .to-content {
    display: inline-block;
}

.to-do-list .checkbox-fade .cr {
    border-radius: 6px;
    border: 1px solid #e3e3e3;
    cursor: pointer;
    display: inline-block;
    float: left;
    height: 24px;
    margin-right: 0.5em;
    position: relative;
    width: 24px;
    margin: 0;
    top: 5px;
}

.to-do-list .checkbox-fade .cr .cr-icon {
    color: #fff;
    font-size: 0.8em;
    left: 0;
    line-height: 0;
    position: absolute;
    right: 0;
    text-align: center;
    top: 50%;
}

.to-do-list .checkbox-fade label input[type=checkbox] {
    display: none;
}

.to-do-list .checkbox-fade label input[type=checkbox] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    transition: all 0.3s ease-in;
}

.to-do-list .checkbox-fade label input[type=checkbox]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.to-do-list .checkbox-fade label input[type=checkbox]:checked + .cr {
    background: #4680ff;
    border: 0;
}

new-task .to-do-list .cr {
    float: left;
    top: 0;
    margin-right: 16px;
}

new-task label input[type=checkbox] {
    display: none;
}

/* ===================== to do page end =========================================*/
/* ===================== Gallery-masonry page start ============================= */
.gallery-masonry .card-columns {
    -moz-column-count: 4;
    column-count: 4;
}

@media screen and (max-width: 1400px) {
    .gallery-masonry .card-columns {
        -moz-column-count: 3;
        column-count: 3;
    }
}

@media screen and (max-width: 992px) {
    .gallery-masonry .card-columns {
        -moz-column-count: 2;
        column-count: 2;
    }
}

@media screen and (max-width: 575px) {
    .gallery-masonry .card-columns {
        -moz-column-count: 1;
        column-count: 1;
    }
}

.job-meta-data i {
    margin-right: 5px;
    color: #4680ff;
}

/* ===================== Gallery-masonry page end ============================= */
/* ===================== Task-list page start ============================= */
.task-data img {
    width: 40px;
    box-shadow: none;
}

.task-data i {
    color: #37474f;
}

.task-data .dropdown-toggle:after {
    color: #37474f;
}

.task-board-left .task-right-header-revision,
.task-board-left .task-right-header-status,
.task-board-left .task-right-header-users {
    padding-bottom: 10px;
    padding-top: 10px;
    border-bottom: 1px solid #f1f1f1;
    cursor: pointer;
}

.task-board-left .taskboard-right-progress,
.task-board-left .taskboard-right-revision,
.task-board-left .taskboard-right-users {
    padding-top: 10px;
}

.task-board-left .taskboard-right-progress .progress {
    height: 9px;
    margin-bottom: 25px;
}

.task-board-left .user-box .media-object {
    height: 50px;
    width: 50px;
    cursor: pointer;
}

.task-board-left .user-box .media-left {
    position: relative;
}

.task-board-left .user-box .btn.btn-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-size: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.task-board-left .live-status {
    height: 8px;
    width: 8px;
    position: absolute;
    bottom: 0;
    right: 0;
    border-radius: 100%;
    top: 5px;
}

.filter-bar .navbar {
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    padding: 0.5rem 1rem;
}

@media screen and (max-width: 557px) {
    .filter-bar .navbar .f-text {
        display: block;
        width: 100%;
    }

    .filter-bar .navbar .f-view {
        padding-left: 24px;
    }

    .filter-bar .navbar .f-view span {
        display: block;
        width: 100%;
        margin-bottom: 10px;
    }
}

.filter-bar .label {
    border-radius: 4px;
    font-size: 13px;
    padding: 3px 7px;
}

.filter-bar .task-detail {
    margin-bottom: 5px;
}

.filter-bar .card-task .task-list-table {
    display: inline-block;
}

.filter-bar .card-task .task-list-table img {
    width: 40px;
    box-shadow: none;
}

.filter-bar .card-task .task-list-table i {
    color: #37474f;
}

.filter-bar .card-task .task-board {
    float: right;
    margin-top: 5px;
}

.filter-bar .card-task .task-board .dropdown {
    display: inline-block;
}

.filter-bar .card-task .task-board .btn {
    padding: 4px 10px;
    font-size: 10px;
    margin: 0;
}

.assign-user img,
.task-comment img {
    width: 45px;
    box-shadow: none;
}

/* ===================== Task-list page end ===================================== */
/* ===================== Invoice page start ===================================== */
.invoice-contact {
    display: flex;
    margin-bottom: 30px;
    padding-top: 30px;
    align-items: center;
}

@media screen and (max-width: 767px) {
    .invoice-contact {
        margin-bottom: 0;
    }
}

.invoice-table.table td {
    border: 0;
    padding: 4px 0;
}

.invoive-info {
    display: flex;
    margin-bottom: 30px;
}

.invoive-info h6 {
    margin-bottom: 20px;
    text-transform: uppercase;
}

.invoive-info .invoice-order.table {
    padding-left: 0;
}

.invoive-info .invoice-order.table th {
    border: 0;
    padding: 4px 0;
}

.invoive-info .invoice-order.table th:first-child {
    padding-left: 0;
    width: 80px;
}

.invoice-total.table {
    background: #f3f3f3;
    padding: 30px 0;
}

.invoice-total.table th {
    border: 0;
    padding: 4px 0;
    text-align: right;
}

.invoice-total.table td {
    text-align: right;
}

.invoice-total.table tbody {
    padding-right: 20px;
    float: right;
}

.invoice-summary .label {
    border-radius: 5px;
    padding: 3px 10px;
    font-size: 12px;
}

.invoice-list .btn {
    padding: 5px 10px;
    font-size: 12px;
}

.invoice-list .task-list-table {
    display: inline-block;
}

/* ===================== Invoice page end ======================================= */
/* ==============================================================
                     email-page  Start
====================================================== */
.email-card .tab-content {
    box-shadow: none;
}

.email-card .tab-content .btn {
    border: none;
}

.email-card .tab-content .btn i {
    font-size: 18px;
    line-height: 1.4;
}

.email-card .tab-content .table tr {
    transition: all 0.12s ease-in-out;
}

.email-card .tab-content .table tr td,
    .email-card .tab-content .table tr th {
    padding: 0.65rem 0.75rem;
}

.email-card .tab-content .table tr td .checkbox,
      .email-card .tab-content .table tr th .checkbox {
    padding: 12px 0;
}

.email-card .tab-content .table tr td label,
      .email-card .tab-content .table tr th label {
    margin-bottom: 0;
}

.email-card .tab-content .table tr.unread {
    font-weight: 600;
}

.email-card .tab-content .table tr.read {
    background: rgba(236, 240, 245, 0.7);
}

.email-card .tab-content .table tr:hover {
    background: #ecf0f5;
    box-shadow: 0 1px 3px 0 #e2e5e8;
}

.email-card .tab-content .nav-pills {
    margin-left: 0;
    border-top: 1px solid #e2e5e8;
    padding: 15px 0 0;
}

.email-card .tab-content .nav-pills > li .nav-link {
    border-radius: 0;
    border: none;
    padding: 5px 12px 22px;
    position: relative;
}

.email-card .tab-content .nav-pills > li .nav-link::after {
    content: "";
    width: calc(100% - 24px);
    height: 3px;
    position: absolute;
    left: 12px;
    bottom: 0;
    border-radius: 3px 3px 0 0;
}

.email-card .tab-content .nav-pills > li .nav-link.active {
    background: transparent;
    color: #ff5252;
}

.email-card .tab-content .nav-pills > li .nav-link.active:after {
    background: #ff5252;
}

.email-card .nav-pills {
    padding: 0;
    margin-left: -20px;
}

.email-card .nav-pills > li .nav-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 14px;
    padding: 8px 25px;
    border-radius: 0 20px 20px 0;
    text-transform: capitalize;
    border: 1px solid transparent;
    border-left: none;
    color: #373a3c;
}

.email-card .nav-pills > li .nav-link i {
    padding: 0;
    margin-right: 10px;
    font-size: 16px;
    display: inline-block;
    position: relative;
    top: 2px;
}

.email-card .nav-pills > li .nav-link.active,
  .email-card .nav-pills > li .show > .nav-link {
    font-weight: 600;
    background: rgba(255, 82, 82, 0.1);
    color: #ff5252;
    border-color: rgba(255, 82, 82, 0.1);
}

.email-card .email-more-link {
    font-size: 16px;
}

.email-card .email-more-link i {
    line-height: 1.1;
}

.email-card .mail-body-content a {
    color: #373a3c;
}

.email-card .mail-body-content .mail-attach {
    display: inline-block;
    border: 1px solid #e2e5e8;
    border-radius: 50px;
    padding: 5px 15px;
    margin-top: 10px;
}

.email-card .email-btn .btn {
    border: none;
}

.email-card .email-btn .btn.dropdown-toggle::after {
    display: none;
}

@media screen and (max-width: 767px) {
    .email-card .input-group {
        margin-top: 20px;
    }
}

.email-content {
    border-bottom: 1px solid #e2e5e8;
    padding-bottom: 15px;
}

.email-read {
    display: flex;
    align-items: flex-start;
}

@media screen and (max-width: 575px) {
    .email-read {
        display: inline-block;
    }

    .email-read .photo-table {
        margin-bottom: 10px;
    }

    .email-contant {
        margin: 0 !important;
        padding: 0 !important;
    }
}

/* ==================  email-page  End  =================== */
/* ==============================================================
                     image-cropper  Start
====================================================== */
.docs-buttons .btn {
    margin-bottom: 10px !important;
}

.docs-data .input-group {
    background: transparent;
    margin-bottom: 10px;
}

.docs-data > .input-group > label {
    min-width: 80px;
}

.docs-data .input-group > span {
    min-width: 50px;
}

.img-container {
    min-height: 200px;
    max-height: 516px;
    margin-bottom: 20px;
}

.img-container > img {
    max-width: 100%;
}

@media (min-width: 768px) {
    .img-container {
        min-height: 516px;
    }
}

.docs-preview {
    margin-right: -15px;
}

.docs-preview .img-preview {
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
    overflow: hidden;
}

.docs-preview .img-preview > img {
    max-width: 100%;
}

.docs-preview .preview-lg {
    width: 100% !important;
}

.docs-preview .preview-md {
    width: 139px;
    height: 78px;
}

.docs-preview .preview-sm {
    width: 69px;
    height: 39px;
}

.docs-preview .preview-xs {
    width: 35px;
    height: 20px;
    margin-right: 0;
}

.docs-buttons > .btn,
.docs-buttons > .btn-group,
.docs-buttons > .form-control {
    margin-right: 5px;
}

.docs-toggles > .btn,
.docs-toggles > .btn-group,
.docs-toggles > .dropdown {
    margin-bottom: 10px;
}

.docs-tooltip {
    display: block;
    margin: -6px -12px;
    padding: 6px 12px;
}

.docs-tooltip > .icon {
    margin: 0 -3px;
    vertical-align: top;
}

.tooltip-inner {
    white-space: normal;
}

.btn-upload .tooltip-inner {
    white-space: nowrap;
}

@media (max-width: 400px) {
    .btn-group-crop {
        margin-right: -15px !important;
    }

    .btn-group-crop > .btn {
        padding-left: 5px;
        padding-right: 5px;
    }

    .btn-group-crop .docs-tooltip {
        margin-left: -5px;
        margin-right: -5px;
        padding-left: 5px;
        padding-right: 5px;
    }
}

.docs-options .dropdown-menu {
    width: 100%;
}

.docs-options .dropdown-menu > li {
    padding: 3px 20px;
    font-size: 14px;
}

.docs-options .dropdown-menu > li:hover {
    background-color: #f7f7f7;
}

.docs-options .dropdown-menu > li > label {
    display: block;
}

.docs-cropped .modal-body {
    text-align: center;
}

.docs-cropped .modal-body > canvas,
  .docs-cropped .modal-body > img {
    max-width: 100%;
}

.card-block .docs-options .dropdown-menu {
    top: inherit;
}

/* ==================  image-cropper end  ======================================= */
/**  =====================
      Help Desk Application css start
==========================  **/
.hd-body .excerpt {
    padding: 15px;
    background: #ecf0f5;
    border: 1px solid #e2e5e8;
}

.hd-body .ticket-customer,
.hd-body .ticket-type-icon {
    display: block;
    text-transform: capitalize;
}

.hd-body:hover .hover-blk {
    transform: scale(1);
}

.sm-view .card-body .excerpt,
.sm-view .card-body ul.list-inline {
    display: none;
}

.md-view .excerpt {
    display: none;
}

.md-view .col-auto ul li:nth-child(1),
.md-view .col-auto ul li:nth-child(3),
.sm-view .col-auto ul li:nth-child(1),
.sm-view .col-auto ul li:nth-child(3) {
    display: none;
}

.hover-blk {
    background: #fff;
    width: 270px;
    left: calc(100% + 10px);
    transform: scale(0);
    z-index: 5;
    transition: all 0.1s ease-out;
}

.hover-blk .img-txt p {
    display: inline-block;
}

.topic-name h1 {
    float: left;
    font-weight: normal;
}

.topic-name .btn-star {
    float: right;
}

.dicon-blk {
    top: 0;
    right: 0;
}

.dicon-blk li {
    display: inline-block;
}

.hd-detail .col-right .edit-del {
    opacity: 0;
}

.hd-detail .col-right .edit-del i {
    opacity: 0.2;
}

.hd-detail .col-right .edit-del i:hover {
    opacity: 1;
}

.hd-detail:hover .edit-del {
    opacity: 1;
}

.hdd-user i {
    bottom: 0;
}

.ticket-block .hd-body {
    border-left: 3px solid #ccc;
}

.ticket-block .col.border-right {
    border-color: #ccc !important;
}

.ticket-block .ticket-type-icon {
    font-weight: 500;
    color: #111;
}

.ticket-block .excerpt h6 {
    color: #686c71;
    font-weight: 500;
}

.ticket-block .excerpt h6 a {
    color: #686c71;
}

.ticket-block .excerpt h6 a:hover {
    text-decoration: underline !important;
    color: #111;
}

.ticket-block.open-tic .hd-body {
    border-color: #ea394a;
}

.ticket-block.close-tic .hd-body {
    border-color: #5AC17F;
}

.right-col .card-footer label {
    font-weight: 500;
}

.q-view {
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 1030;
    top: 0;
    right: 0;
    visibility: hidden;
}

.q-view .overlay {
    background-color: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.q-view .content {
    width: 585px;
    height: 100vh;
    z-index: 5;
    position: absolute;
    top: 0;
    background-color: #fff;
    padding-top: 20px;
    box-shadow: 0 0 100px rgba(0, 0, 0, 0.3);
    right: -765px;
    transition: right 0.195s ease-in, visibility 0s linear 0.195s;
    min-height: 100vh;
    overflow: auto;
}

.q-view.active {
    visibility: visible;
}

.q-view.active .content {
    right: 0;
    transition: right 0.225s ease-out;
}

.select2-container--default {
    margin-bottom: 10px;
}

.select2-container--default .select2-selection {
    border-color: #e2e5e8;
}

.hdd-right-side {
    width: 495px;
}

.hdd-right-side .hdd-right-inner {
    position: fixed;
    width: 465px;
}

.span-content a {
    padding: 0 7px;
}

.file-btn {
    position: relative;
    overflow: hidden;
}

.file-btn input {
    position: absolute;
    font-size: 50px;
    opacity: 0;
    right: 0;
    top: 0;
}

@media (max-width: 992px) {
    .hd-detail .col-right .edit-del {
        opacity: 1;
    }
}

@media only screen and (max-width: 767px) {
    .hdd-right-side {
        width: 100%;
    }

    .hdd-right-side .hdd-right-inner {
        position: static;
        width: 100%;
    }
}

@media (max-width: 575px) {
    .q-view .content {
        width: 450px;
    }
}

@media (max-width: 380px) {
    .q-view .content {
        width: 300px;
    }
}

/**====== Help Desk Application css start ======**/
.fc-view {
    margin-top: 30px;
}

.none-border .modal-footer {
    border-top: none;
}

.fc-toolbar {
    margin: 15px 0 5px;
}

.fc-toolbar h2 {
    font-size: 1.25rem;
    line-height: 1.875rem;
    text-transform: uppercase;
}

.fc-day-grid-event .fc-time {
    font-weight: 700;
}

.fc-day {
    background: transparent;
}

.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active,
.fc-toolbar .ui-state-hover,
.fc-toolbar button:focus,
.fc-toolbar button:hover {
    z-index: 0;
}

.fc th.fc-widget-header {
    background: #4680ff;
    color: #fff;
    border-color: #4680ff;
    font-size: 13px;
    line-height: 20px;
    padding: 10px 0;
    text-transform: uppercase;
}

.fc-unthemed .fc-divider,
.fc-unthemed .fc-popover,
.fc-unthemed .fc-row,
.fc-unthemed tbody,
.fc-unthemed td,
.fc-unthemed th,
.fc-unthemed thead {
    border-color: #f0f2f3;
}

.fc-today-button,
.fc-button {
    background: #f0f2f3;
    border: none;
    color: #343a40;
    text-shadow: none;
    text-transform: capitalize;
    box-shadow: none;
    border-radius: 3px;
    margin: 0.375rem 0.75rem;
    padding: 0.375rem 0.75rem !important;
    height: auto !important;
}

.fc-text-arrow {
    font-family: inherit;
    font-size: 1rem;
}

.fc-state-hover {
    background: #e9ecef;
}

.fc-state-highlight {
    background: #dee2e6;
}

.fc-state-active,
.fc-state-disabled,
.fc-state-down {
    background-color: #4680ff;
    color: #fff;
    text-shadow: none;
}

.fc-cell-overlay {
    background: #dee2e6;
}

.fc-unthemed td.fc-today {
    background: #f8f9fa;
}

.fc-unthemed .fc-divider,
.fc-unthemed .fc-list-heading td,
.fc-unthemed .fc-popover .fc-header {
    background: #f8f9fa;
}

.fc-event,
.fc-event:not([href]) {
    background-color: #4680ff;
    border-color: #4680ff;
    color: #fff;
    padding: 5px 10px;
    border-radius: 2px;
    margin-bottom: 5px;
    cursor: move;
}

.external-event {
    cursor: move;
    margin: 10px 0;
    padding: 8px 10px;
    color: #fff;
}

.fc-basic-view td.fc-week-number span {
    padding-right: 8px;
}

.fc-basic-view td.fc-day-number {
    padding-right: 8px;
}

.fc-basic-view .fc-content {
    color: #fff;
}

.fc-time-grid-event .fc-content {
    color: #fff;
}

.fc-today-button,
.fc .fc-button-group > * {
    margin-bottom: 4px;
    margin-left: 10px;
    border-radius: 2px;
    font-size: 1rem;
}

.fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
    float: right;
    height: 20px;
    width: 20px;
    text-align: center;
    line-height: 20px;
    background-color: #f0f2f3;
    border-radius: 2px;
    margin: 5px;
    font-size: 12px;
    border: 1px solid #ebedef;
}

.fc-scroller {
    overflow: visible !important;
    height: auto !important;
}

@media (max-width: 767.98px) {
    .fc-toolbar .fc-center,
  .fc-toolbar .fc-left,
  .fc-toolbar .fc-right {
        float: none;
        display: block;
        clear: both;
        margin: 10px 0;
    }

    .fc .fc-toolbar > * > * {
        float: none;
    }

    .fc-today-button {
        display: none;
    }
}

/**  =====================
      Icon layouts css start
==========================  **/
.i-main .i-block {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 70px;
    height: 70px;
    margin: 5px;
    border: 1px solid #f1f1f1;
    position: relative;
    cursor: pointer;
}

.i-main .i-block i {
    font-size: 30px;
}

.i-main .i-block label {
    margin-bottom: 0;
    display: none;
}

.i-main .i-block span.ic-badge {
    position: absolute;
    bottom: 0;
    right: 0;
}

.i-main .i-block .flag-icon-background {
    width: 40px;
    height: 40px;
}

.sample-icon .i-block {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 70px;
    height: 70px;
    margin: 5px;
    border-radius: 50%;
    border: 1px solid #f1f1f1;
    position: relative;
    cursor: pointer;
}

.sample-icon .i-block i {
    font-size: 28px;
}

.sample-icon .i-block:nth-child(1) {
    border-color: #4680ff;
    background: rgba(70, 128, 255, 0.1);
}

.sample-icon .i-block:nth-child(1) i {
    color: #4680ff;
}

.sample-icon .i-block:nth-child(2) {
    border-color: #6610f2;
    background: rgba(102, 16, 242, 0.1);
}

.sample-icon .i-block:nth-child(2) i {
    color: #6610f2;
}

.sample-icon .i-block:nth-child(3) {
    border-color: #6f42c1;
    background: rgba(111, 66, 193, 0.1);
}

.sample-icon .i-block:nth-child(3) i {
    color: #6f42c1;
}

.sample-icon .i-block:nth-child(4) {
    border-color: #e83e8c;
    background: rgba(232, 62, 140, 0.1);
}

.sample-icon .i-block:nth-child(4) i {
    color: #e83e8c;
}

.sample-icon .i-block:nth-child(5) {
    border-color: #ff5252;
    background: rgba(255, 82, 82, 0.1);
}

.sample-icon .i-block:nth-child(5) i {
    color: #ff5252;
}

.sample-icon .i-block:nth-child(6) {
    border-color: #fd7e14;
    background: rgba(253, 126, 20, 0.1);
}

.sample-icon .i-block:nth-child(6) i {
    color: #fd7e14;
}

.sample-icon .i-block:nth-child(7) {
    border-color: #ffba57;
    background: rgba(255, 186, 87, 0.1);
}

.sample-icon .i-block:nth-child(7) i {
    color: #ffba57;
}

.sample-icon .i-block:nth-child(8) {
    border-color: #9ccc65;
    background: rgba(156, 204, 101, 0.1);
}

.sample-icon .i-block:nth-child(8) i {
    color: #9ccc65;
}

.sample-icon .i-block:nth-child(9) {
    border-color: #20c997;
    background: rgba(32, 201, 151, 0.1);
}

.sample-icon .i-block:nth-child(9) i {
    color: #20c997;
}

.sample-icon .i-block:nth-child(10) {
    border-color: #00acc1;
    background: rgba(0, 172, 193, 0.1);
}

.sample-icon .i-block:nth-child(10) i {
    color: #00acc1;
}

.sample-icon .i-block:nth-child(11) {
    border-color: #4680ff;
    background: rgba(70, 128, 255, 0.1);
}

.sample-icon .i-block:nth-child(11) i {
    color: #4680ff;
}

.sample-icon .i-block:nth-child(12) {
    border-color: #6610f2;
    background: rgba(102, 16, 242, 0.1);
}

.sample-icon .i-block:nth-child(12) i {
    color: #6610f2;
}

.sample-icon .i-block:nth-child(13) {
    border-color: #6f42c1;
    background: rgba(111, 66, 193, 0.1);
}

.sample-icon .i-block:nth-child(13) i {
    color: #6f42c1;
}

.sample-icon .i-block:nth-child(14) {
    border-color: #e83e8c;
    background: rgba(232, 62, 140, 0.1);
}

.sample-icon .i-block:nth-child(14) i {
    color: #e83e8c;
}

.sample-icon .i-block:nth-child(15) {
    border-color: #ff5252;
    background: rgba(255, 82, 82, 0.1);
}

.sample-icon .i-block:nth-child(15) i {
    color: #ff5252;
}

.sample-icon .i-block:nth-child(16) {
    border-color: #fd7e14;
    background: rgba(253, 126, 20, 0.1);
}

.sample-icon .i-block:nth-child(16) i {
    color: #fd7e14;
}

.sample-icon .i-block:nth-child(17) {
    border-color: #ffba57;
    background: rgba(255, 186, 87, 0.1);
}

.sample-icon .i-block:nth-child(17) i {
    color: #ffba57;
}

.sample-icon .i-block:nth-child(18) {
    border-color: #9ccc65;
    background: rgba(156, 204, 101, 0.1);
}

.sample-icon .i-block:nth-child(18) i {
    color: #9ccc65;
}

.sample-icon .i-block:nth-child(19) {
    border-color: #20c997;
    background: rgba(32, 201, 151, 0.1);
}

.sample-icon .i-block:nth-child(19) i {
    color: #20c997;
}

.sample-icon .i-block:nth-child(20) {
    border-color: #00acc1;
    background: rgba(0, 172, 193, 0.1);
}

.sample-icon .i-block:nth-child(20) i {
    color: #00acc1;
}

.sample-icon .i-block:nth-child(21) {
    border-color: #4680ff;
    background: rgba(70, 128, 255, 0.1);
}

.sample-icon .i-block:nth-child(21) i {
    color: #4680ff;
}

.sample-icon .i-block:nth-child(22) {
    border-color: #6610f2;
    background: rgba(102, 16, 242, 0.1);
}

.sample-icon .i-block:nth-child(22) i {
    color: #6610f2;
}

.sample-icon .i-block:nth-child(23) {
    border-color: #6f42c1;
    background: rgba(111, 66, 193, 0.1);
}

.sample-icon .i-block:nth-child(23) i {
    color: #6f42c1;
}

.sample-icon .i-block:nth-child(24) {
    border-color: #e83e8c;
    background: rgba(232, 62, 140, 0.1);
}

.sample-icon .i-block:nth-child(24) i {
    color: #e83e8c;
}

.sample-icon .i-block:nth-child(25) {
    border-color: #ff5252;
    background: rgba(255, 82, 82, 0.1);
}

.sample-icon .i-block:nth-child(25) i {
    color: #ff5252;
}

.sample-icon .i-block:nth-child(26) {
    border-color: #fd7e14;
    background: rgba(253, 126, 20, 0.1);
}

.sample-icon .i-block:nth-child(26) i {
    color: #fd7e14;
}

.sample-icon .i-block:nth-child(27) {
    border-color: #ffba57;
    background: rgba(255, 186, 87, 0.1);
}

.sample-icon .i-block:nth-child(27) i {
    color: #ffba57;
}

.sample-icon .i-block:nth-child(28) {
    border-color: #9ccc65;
    background: rgba(156, 204, 101, 0.1);
}

.sample-icon .i-block:nth-child(28) i {
    color: #9ccc65;
}

.sample-icon .i-block:nth-child(29) {
    border-color: #20c997;
    background: rgba(32, 201, 151, 0.1);
}

.sample-icon .i-block:nth-child(29) i {
    color: #20c997;
}

.sample-icon .i-block:nth-child(30) {
    border-color: #00acc1;
    background: rgba(0, 172, 193, 0.1);
}

.sample-icon .i-block:nth-child(30) i {
    color: #00acc1;
}

.sample-icon .i-block:nth-child(31) {
    border-color: #4680ff;
    background: rgba(70, 128, 255, 0.1);
}

.sample-icon .i-block:nth-child(31) i {
    color: #4680ff;
}

.sample-icon .i-block:nth-child(32) {
    border-color: #6610f2;
    background: rgba(102, 16, 242, 0.1);
}

.sample-icon .i-block:nth-child(32) i {
    color: #6610f2;
}

.sample-icon .i-block:nth-child(33) {
    border-color: #6f42c1;
    background: rgba(111, 66, 193, 0.1);
}

.sample-icon .i-block:nth-child(33) i {
    color: #6f42c1;
}

.sample-icon .i-block:nth-child(34) {
    border-color: #e83e8c;
    background: rgba(232, 62, 140, 0.1);
}

.sample-icon .i-block:nth-child(34) i {
    color: #e83e8c;
}

.sample-icon .i-block:nth-child(35) {
    border-color: #ff5252;
    background: rgba(255, 82, 82, 0.1);
}

.sample-icon .i-block:nth-child(35) i {
    color: #ff5252;
}

.sample-icon .i-block:nth-child(36) {
    border-color: #fd7e14;
    background: rgba(253, 126, 20, 0.1);
}

.sample-icon .i-block:nth-child(36) i {
    color: #fd7e14;
}

.sample-icon .i-block:nth-child(37) {
    border-color: #ffba57;
    background: rgba(255, 186, 87, 0.1);
}

.sample-icon .i-block:nth-child(37) i {
    color: #ffba57;
}

.sample-icon .i-block:nth-child(38) {
    border-color: #9ccc65;
    background: rgba(156, 204, 101, 0.1);
}

.sample-icon .i-block:nth-child(38) i {
    color: #9ccc65;
}

.sample-icon .i-block:nth-child(39) {
    border-color: #20c997;
    background: rgba(32, 201, 151, 0.1);
}

.sample-icon .i-block:nth-child(39) i {
    color: #20c997;
}

.sample-icon .i-block:nth-child(40) {
    border-color: #00acc1;
    background: rgba(0, 172, 193, 0.1);
}

.sample-icon .i-block:nth-child(40) i {
    color: #00acc1;
}

/**====== Icon layouts css end ======**/
/**  =====================
      user card css start
==========================  **/
.user-card .cover-img-block {
    position: relative;
}

.user-card .cover-img-block .change-cover {
    position: absolute;
    top: 30px;
    left: 30px;
    z-index: 5;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.user-card .cover-img-block .change-cover .dropdown-toggle {
    color: #fff;
    background: rgba(0, 0, 0, 0.6);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.user-card .cover-img-block .change-cover .dropdown-toggle:after {
    display: none;
}

.user-card .cover-img-block .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    z-index: 1;
    background: rgba(0, 0, 0, 0.4);
    transition: all 0.3s ease-in-out;
}

.user-card .cover-img-block:hover .change-cover,
  .user-card .cover-img-block:hover .overlay {
    opacity: 1;
}

.user-card .user-about-block {
    margin-top: -30px;
}

.user-card .user-about-block img {
    box-shadow: 0 0 0 5px #fff;
}

.user-card .user-about-block .certificated-badge {
    position: absolute;
    bottom: -5px;
    right: -5px;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    background: #fff;
    padding: 5px 3px;
}

.user-card .user-about-block .certificated-badge .bg-icon {
    font-size: 22px;
}

.user-card .user-about-block .certificated-badge .front-icon {
    font-size: 11px;
    position: absolute;
    top: 11px;
    left: 9px;
}

.user-card .hover-data {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(36, 46, 62, 0.92);
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: scale(0);
    transition: all 0.3s ease-in-out;
}

.user-card:hover .hover-data {
    transform: scale(1);
}

.user-card .change-profile .dropdown-toggle::after {
    display: none;
}

.user-card .change-profile .profile-dp {
    position: relative;
    overflow: hidden;
    padding: 5px;
    width: 110px;
    height: 110px;
    border-radius: 50%;
}

.user-card .change-profile .profile-dp .overlay {
    position: absolute;
    top: 5px;
    left: 5px;
    width: calc(100% - 10px);
    height: calc(100% - 10px);
    border-radius: 50%;
    opacity: 0;
    z-index: 1;
    overflow: hidden;
    background: rgba(0, 0, 0, 0.4);
    transition: all 0.3s ease-in-out;
}

.user-card .change-profile .profile-dp .overlay span {
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    position: absolute;
    bottom: 0;
    width: 100%;
    text-align: center;
    border-top: 1px solid rgba(255, 255, 255, 0.4);
    padding: 0 0 5px;
}

.user-card .change-profile .profile-dp:hover .overlay {
    opacity: 1;
}

@media only screen and (max-width: 992px) {
    .user-card .user-about-block {
        margin-top: -10px;
    }

    .user-card .wid-80 {
        width: 60px;
    }

    .user-card .change-profile .profile-dp {
        width: 90px;
        height: 90px;
    }

    .user-card.user-card-2.shape-right .cover-img-block {
        -webkit-clip-path: none;
        clip-path: none;
    }

    .user-card .cover-img-block .change-cover .dropdown-toggle {
        padding: 5px 7px;
    }
}

.user-card-2 .cover-img-block {
    -webkit-clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 80%);
    clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 80%);
}

.user-card-2.shape-right .cover-img-block {
    -webkit-clip-path: polygon(0 0, 100% 0%, 100% 80%, 0% 100%);
    clip-path: polygon(0 0, 100% 0%, 100% 80%, 0% 100%);
}

.user-card-2.shape-center .cover-img-block {
    -webkit-clip-path: polygon(0 0, 100% 0%, 100% 80%, 50% 100%, 0% 80%);
    clip-path: polygon(0 0, 100% 0%, 100% 80%, 50% 100%, 0% 80%);
}

.user-card-3 .certificated-badge {
    position: absolute;
    bottom: 5px;
    right: 5px;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    background: #fff;
    padding: 5px 3px;
}

.user-card-3 .certificated-badge .bg-icon {
    font-size: 30px;
}

.user-card-3 .certificated-badge .front-icon {
    font-size: 14px;
    position: absolute;
    top: 14px;
    left: 13px;
}

.user-card-3 .social-top-link {
    position: absolute;
    top: 20px;
    left: 20px;
}

.user-card-3.social-hover .social-top-link {
    top: 20px;
    left: 20px;
    overflow: hidden;
}

.user-card-3.social-hover .social-top-link .btn,
  .user-card-3.social-hover .social-top-link li {
    margin-left: -100px;
    transition: all 0.2s ease-in-out;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(1),
    .user-card-3.social-hover .social-top-link li:nth-child(1) {
    transition-delay: 0.05s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(2),
    .user-card-3.social-hover .social-top-link li:nth-child(2) {
    transition-delay: 0.1s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(3),
    .user-card-3.social-hover .social-top-link li:nth-child(3) {
    transition-delay: 0.15s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(4),
    .user-card-3.social-hover .social-top-link li:nth-child(4) {
    transition-delay: 0.2s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(5),
    .user-card-3.social-hover .social-top-link li:nth-child(5) {
    transition-delay: 0.25s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(6),
    .user-card-3.social-hover .social-top-link li:nth-child(6) {
    transition-delay: 0.3s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(7),
    .user-card-3.social-hover .social-top-link li:nth-child(7) {
    transition-delay: 0.35s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(8),
    .user-card-3.social-hover .social-top-link li:nth-child(8) {
    transition-delay: 0.4s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(9),
    .user-card-3.social-hover .social-top-link li:nth-child(9) {
    transition-delay: 0.45s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(10),
    .user-card-3.social-hover .social-top-link li:nth-child(10) {
    transition-delay: 0.5s;
}

.user-card-3.social-hover:hover .social-top-link .btn,
.user-card-3.social-hover:hover .social-top-link li {
    margin-left: 0;
}

.user-profile {
    margin-top: -25px;
    margin-left: -25px;
    margin-right: -25px;
    background: #fff;
}

.user-profile .card-body {
    position: relative;
    z-index: 1;
    box-shadow: 0 2px 4px -2px rgba(54, 80, 138, 0.3);
}

.user-profile .card-body .overlay > span {
    cursor: pointer;
}

.user-profile .cover-img-block:hover > img {
    -webkit-filter: grayscale(1) blur(1px);
    filter: grayscale(1) blur(1px);
}

.user-profile .profile-dp .overlay {
    text-align: left;
}

.user-profile .user-about-block .certificated-badge {
    bottom: 8px;
    right: 0;
    z-index: 2;
}

.user-profile .profile-tabs {
    border-bottom: 0;
    margin-top: 30px;
}

.user-profile .profile-tabs .nav-item {
    margin-bottom: -0px;
}

.user-profile .profile-tabs .nav-item .nav-link {
    position: relative;
}

.user-profile .profile-tabs .nav-item .nav-link:after {
    content: "";
    background: #4680ff;
    position: absolute;
    transition: all 0.3s ease-in-out;
    left: 50%;
    right: 50%;
    bottom: -1px;
    height: 2px;
    border-radius: 2px 2px 0 0;
}

.user-profile .profile-tabs .nav-link:hover {
    border-color: transparent;
}

.user-profile .profile-tabs .nav-item.show .nav-link,
    .user-profile .profile-tabs .nav-link.active {
    border-color: transparent;
}

.user-profile .profile-tabs .nav-item.show .nav-link:after,
      .user-profile .profile-tabs .nav-link.active:after {
    left: 0;
    right: 0;
}

@media only screen and (max-width: 575px) {
    .user-profile {
        margin-top: -30px;
        margin-left: -15px;
        margin-right: -15px;
    }
}

.user-profile-list table {
    border-spacing: 0 10px;
    width: calc(100% - 10px);
    margin: 0 5px;
}

.user-profile-list table tbody tr {
    box-shadow: 0 2px 10px -1px rgba(69, 90, 100, 0.3);
    border-radius: 0.25rem;
    position: relative;
}

.user-profile-list table tbody tr .overlay-edit {
    position: absolute;
    opacity: 0;
    top: 0;
    right: 0;
    background: #4680ff;
    bottom: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.user-profile-list table tbody tr .overlay-edit .btn {
    border-radius: 50%;
    margin: 0 3px;
    width: 35px;
    height: 35px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.user-profile-list table tbody tr:hover {
    box-shadow: 0 0 6px 0 #4680ff;
}

.user-profile-list table tbody tr:hover td {
    cursor: pointer;
    color: #fff;
    background: #4680ff;
}

.user-profile-list table tbody tr:hover td h6 {
    color: #fff;
}

.user-profile-list table tbody tr:hover td .overlay-edit {
    opacity: 1;
}

.user-profile-list table tr td,
  .user-profile-list table tr th {
    vertical-align: middle;
    border: none;
}

.user-profile-list table tr td {
    background: #fff;
    position: relative;
}

.user-profile-list table tr td:first-child {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}

.user-profile-list table tr td:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
}

/**====== user card css end ======**/

	</style>
	
	

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/logo.png" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">ASOB
                                
                                <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="#l" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-hasmenu">
						<button style="background-color:blue;width:250px;color:white;"><a href="{{url('/civiians-portal')}}" class="nav-link "><span class="pcoded-mtext" style="color:white;">Go Back</span></a></button>
					</li>
				</ul>
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="mob-toggler">
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						
						<li>
							<div class="dropdown drp-user">								
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="assets/images/logo.png" class="img-radius" alt="User-Profile-Image">
										<span>My name</span>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<!-- profile header start -->
		<div class="user-profile user-card mb-4">
			<div class="card-header border-0 p-0 pb-0">
				<div class="cover-img-block">
					<!-- <img src="assets/images/profile/cover.jpg" alt="" class="img-fluid"> -->
					<div class="overlay"></div>
					<div class="change-cover">
						<div class="dropdown">
							<a class="drp-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
							<div class="dropdown-menu">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body py-0">
				<div class="user-about-block m-0">
					<div class="row">
						<div class="col-md-4 text-center mt-n5">
							<div class="change-profile text-center">
								<div class="dropdown w-auto d-inline-block">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<div class="profile-dp">
											<div class="position-relative d-inline-block">
												@if($viewcivilians->image)
												<img src="{{asset('civilians/'.$viewcivilians->image)}}" style="border-radius: 100px;" name="image" height="100px" width="100px">
												@endif											
                      </div>
											<div class="overlay">
												<span>Action</span>
											</div>
										</div>
										<div class="certificated-badge">
										</div>
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="{{url('/edit-civilian/'.$viewcivilians->id)}}">Edit</a>
										<a class="dropdown-item" href="{{url('/delete-civilian/'.$viewcivilians->id)}}">Delete</a>
										<a class="dropdown-item" href="{{url('/print-civilian/'.$viewcivilians->id)}}">Print Details</a>
									</div>
								</div>
							</div>
							<h5 class="mb-1">{{$viewcivilians->fname}} {{$viewcivilians->lname}}</h5>
							<p class="mb-2 text-muted">{{$viewcivilians->rank}}</p>
						</div>
						<div class="col-md-8 mt-md-4">
							<div class="row">
								<div class="col-md-6">
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary">Date Of Employment : <b>{{$viewcivilians->employment}}</b></a>
									<div class="clearfix"></div>
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"></i>Civlian Employee</a>
								</div>
								<div class="col-md-6">
									<div class="media">
										<div class="media-body">
											<p class="mb-0 text-muted">Date Of Last Promotion : <b>{{$viewcivilians->promotion}}</b></p>
										</div> 
									</div>
								</div>
							</div>
							<ul class="nav nav-tabs profile-tabs nav-fill" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link text-reset active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Details</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-reset" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Operations</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-reset" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contacts/Emergencies</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-reset" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">Courses</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- profile header end -->

		<!-- profile body start -->
		<div class="row">
			<div class="col-md-8 order-md-2">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Personal details</h5>
							</div>
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">First Name</label>
										<div class="col-sm-9">
											{{$viewcivilians->fname}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Last Name</label>
										<div class="col-sm-9">
											{{$viewcivilians->lname}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Gender</label>
										<div class="col-sm-9">
											{{$viewcivilians->arm}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Birth Date</label>
										<div class="col-sm-9">
											{{$viewcivilians->dob}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Blood Group</label>
										<div class="col-sm-9">
											{{$viewcivilians->blood}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Home Town</label>
										<div class="col-sm-9">
											{{$viewcivilians->hometown}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Home Region</label>
										<div class="col-sm-9">
											{{$viewcivilians->region}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Nationality</label>
										<div class="col-sm-9">
											{{$viewcivilians->nationality}}
										</div>
									</div>
							</div>							
						</div>						
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Internal Operations</h5>
							</div>
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Operations</label>
										<div class="col-sm-9">
											Loading..
										</div>
									</div>
							</div>							
						</div>
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">UN Operations</h5>
							</div>
							<div class="card-body border-top pro-wrk-edit collapse show" id="pro-wrk-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Operations</label>
										<div class="col-sm-9">
											{{$viewcivilians->un}}
										</div>
									</div>
								</form>
							</div>							
						</div>
					</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Spouse Details</h5>
							</div>
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Spouse Name</label>
										<div class="col-sm-9">
											{{$viewcivilians->spouse}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Spouse Contact</label>
										<div class="col-sm-9">
											{{$viewcivilians->sphone}}
										</div>
									</div>
								</form>
							</div>							
						</div>
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Next Of Kin</h5>
							</div>
							<div class="card-body border-top pro-dont-edit collapse show" id="pro-dont-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Next Of Kin(Emergency)</label>
										<div class="col-sm-9">
											{{$viewcivilians->kin}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Emergency Relation</label>
										<div class="col-sm-9">
											{{$viewcivilians->relation}}
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Emergency Contact</label>
										<div class="col-sm-9">
											{{$viewcivilians->kphone}}
										</div>
									</div>
								</form>
							</div>							
						</div>
						
					</div>
					<div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Course Local</h5>
							</div>
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Details</label>
										<div class="col-sm-9">
                                        {{$viewcivilians->course}}
										</div>
									</div>
								</form>
							</div>							
						</div>
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Course Oversea</h5>
							</div>
							<div class="card-body border-top pro-dont-edit collapse show" id="pro-dont-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Details</label>
										<div class="col-sm-9">
											Loading
										</div>
									</div>
								</form>
							</div>							
						</div>						
					</div>
				</div>
			</div>
			<div class="col-md-4 order-md-1">
				<div class="card new-cust-card">
					<div class="card-header">
						<h5>Remarks</h5>
						<div class="card-header-right">
							
						</div>
					</div>
					<div class="cust-scroll" style="height:415px;position:relative;">
						<div class="card-body p-b-0">
							<div class="align-middle m-b-0">
								<div class="d-inline-block">
										<h6>{{$viewcivilians->remarks}}</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- profile body end -->
	</div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
	<script>
         !function(e,t){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=e.document?t(e,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return t(e)}:t(e)}("undefined"!=typeof window?window:this,function(e,t){"use strict";var n=[],r=e.document,i=Object.getPrototypeOf,o=n.slice,s=n.concat,a=n.push,l=n.indexOf,c={},u=c.toString,f=c.hasOwnProperty,p=f.toString,d=p.call(Object),h={},g=function(e){return"function"==typeof e&&"number"!=typeof e.nodeType},m=function(e){return null!=e&&e===e.window},v={type:!0,src:!0,nonce:!0,noModule:!0};function y(e,t,n){var i,o,s=(n=n||r).createElement("script");if(s.text=e,t)for(i in v)(o=t[i]||t.getAttribute&&t.getAttribute(i))&&s.setAttribute(i,o);n.head.appendChild(s).parentNode.removeChild(s)}function b(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?c[u.call(e)]||"object":typeof e}var x="3.4.0",w=function(e,t){return new w.fn.init(e,t)},T=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;function E(e){var t=!!e&&"length"in e&&e.length,n=b(e);return!g(e)&&!m(e)&&("array"===n||0===t||"number"==typeof t&&0<t&&t-1 in e)}w.fn=w.prototype={jquery:x,constructor:w,length:0,toArray:function(){return o.call(this)},get:function(e){return null==e?o.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=w.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return w.each(this,e)},map:function(e){return this.pushStack(w.map(this,function(t,n){return e.call(t,n,t)}))},slice:function(){return this.pushStack(o.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(0<=n&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:a,sort:n.sort,splice:n.splice},w.extend=w.fn.extend=function(){var e,t,n,r,i,o,s=arguments[0]||{},a=1,l=arguments.length,c=!1;for("boolean"==typeof s&&(c=s,s=arguments[a]||{},a++),"object"==typeof s||g(s)||(s={}),a===l&&(s=this,a--);a<l;a++)if(null!=(e=arguments[a]))for(t in e)r=e[t],"__proto__"!==t&&s!==r&&(c&&r&&(w.isPlainObject(r)||(i=Array.isArray(r)))?(n=s[t],o=i&&!Array.isArray(n)?[]:i||w.isPlainObject(n)?n:{},i=!1,s[t]=w.extend(c,o,r)):void 0!==r&&(s[t]=r));return s},w.extend({expando:"jQuery"+(x+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==u.call(e)||(t=i(e))&&("function"!=typeof(n=f.call(t,"constructor")&&t.constructor)||p.call(n)!==d))},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e,t){y(e,{nonce:t&&t.nonce})},each:function(e,t){var n,r=0;if(E(e))for(n=e.length;r<n&&!1!==t.call(e[r],r,e[r]);r++);else for(r in e)if(!1===t.call(e[r],r,e[r]))break;return e},trim:function(e){return null==e?"":(e+"").replace(T,"")},makeArray:function(e,t){var n=t||[];return null!=e&&(E(Object(e))?w.merge(n,"string"==typeof e?[e]:e):a.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:l.call(t,e,n)},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;r<n;r++)e[i++]=t[r];return e.length=i,e},grep:function(e,t,n){for(var r=[],i=0,o=e.length,s=!n;i<o;i++)!t(e[i],i)!==s&&r.push(e[i]);return r},map:function(e,t,n){var r,i,o=0,a=[];if(E(e))for(r=e.length;o<r;o++)null!=(i=t(e[o],o,n))&&a.push(i);else for(o in e)null!=(i=t(e[o],o,n))&&a.push(i);return s.apply([],a)},guid:1,support:h}),"function"==typeof Symbol&&(w.fn[Symbol.iterator]=n[Symbol.iterator]),w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(e,t){c["[object "+t+"]"]=t.toLowerCase()});var C=function(e){var t,n,r,i,o,s,a,l,c,u,f,p,d,h,g,m,v,y,b,x="sizzle"+1*new Date,w=e.document,T=0,E=0,C=le(),S=le(),L=le(),k=le(),A=function(e,t){return e===t&&(f=!0),0},D={}.hasOwnProperty,N=[],H=N.pop,j=N.push,W=N.push,O=N.slice,R=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]===t)return n;return-1},M="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",P="[\\x20\\t\\r\\n\\f]",q="(?:\\\\.|[\\w-]|[^\0-\\xa0])+",Y="\\["+P+"*("+q+")(?:"+P+"*([*^$|!~]?=)"+P+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+q+"))|)"+P+"*\\]",X=":("+q+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+Y+")*)|.*)\\)|)",I=new RegExp(P+"+","g"),B=new RegExp("^"+P+"+|((?:^|[^\\\\])(?:\\\\.)*)"+P+"+$","g"),F=new RegExp("^"+P+"*,"+P+"*"),$=new RegExp("^"+P+"*([>+~]|"+P+")"+P+"*"),_=new RegExp(P+"|>"),U=new RegExp(X),z=new RegExp("^"+q+"$"),V={ID:new RegExp("^#("+q+")"),CLASS:new RegExp("^\\.("+q+")"),TAG:new RegExp("^("+q+"|[*])"),ATTR:new RegExp("^"+Y),PSEUDO:new RegExp("^"+X),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+P+"*(even|odd|(([+-]|)(\\d*)n|)"+P+"*(?:([+-]|)"+P+"*(\\d+)|))"+P+"*\\)|)","i"),bool:new RegExp("^(?:"+M+")$","i"),needsContext:new RegExp("^"+P+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+P+"*((?:-\\d)?\\d*)"+P+"*\\)|)(?=[^-]|$)","i")},K=/HTML$/i,G=/^(?:input|select|textarea|button)$/i,Q=/^h\d$/i,J=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ee=/[+~]/,te=new RegExp("\\\\([\\da-f]{1,6}"+P+"?|("+P+")|.)","ig"),ne=function(e,t,n){var r="0x"+t-65536;return r!=r||n?t:r<0?String.fromCharCode(r+65536):String.fromCharCode(r>>10|55296,1023&r|56320)},re=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,ie=function(e,t){return t?"\0"===e?"�":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},oe=function(){p()},se=xe(function(e){return!0===e.disabled&&"fieldset"===e.nodeName.toLowerCase()},{dir:"parentNode",next:"legend"});try{W.apply(N=O.call(w.childNodes),w.childNodes),N[w.childNodes.length].nodeType}catch(t){W={apply:N.length?function(e,t){j.apply(e,O.call(t))}:function(e,t){for(var n=e.length,r=0;e[n++]=t[r++];);e.length=n-1}}}function ae(e,t,r,i){var o,a,c,u,f,h,v,y=t&&t.ownerDocument,T=t?t.nodeType:9;if(r=r||[],"string"!=typeof e||!e||1!==T&&9!==T&&11!==T)return r;if(!i&&((t?t.ownerDocument||t:w)!==d&&p(t),t=t||d,g)){if(11!==T&&(f=Z.exec(e)))if(o=f[1]){if(9===T){if(!(c=t.getElementById(o)))return r;if(c.id===o)return r.push(c),r}else if(y&&(c=y.getElementById(o))&&b(t,c)&&c.id===o)return r.push(c),r}else{if(f[2])return W.apply(r,t.getElementsByTagName(e)),r;if((o=f[3])&&n.getElementsByClassName&&t.getElementsByClassName)return W.apply(r,t.getElementsByClassName(o)),r}if(n.qsa&&!k[e+" "]&&(!m||!m.test(e))&&(1!==T||"object"!==t.nodeName.toLowerCase())){if(v=e,y=t,1===T&&_.test(e)){for((u=t.getAttribute("id"))?u=u.replace(re,ie):t.setAttribute("id",u=x),a=(h=s(e)).length;a--;)h[a]="#"+u+" "+be(h[a]);v=h.join(","),y=ee.test(e)&&ve(t.parentNode)||t}try{return W.apply(r,y.querySelectorAll(v)),r}catch(t){k(e,!0)}finally{u===x&&t.removeAttribute("id")}}}return l(e.replace(B,"$1"),t,r,i)}function le(){var e=[];return function t(n,i){return e.push(n+" ")>r.cacheLength&&delete t[e.shift()],t[n+" "]=i}}function ce(e){return e[x]=!0,e}function ue(e){var t=d.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function fe(e,t){for(var n=e.split("|"),i=n.length;i--;)r.attrHandle[n[i]]=t}function pe(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(r)return r;if(n)for(;n=n.nextSibling;)if(n===t)return-1;return e?1:-1}function de(e){return function(t){return"input"===t.nodeName.toLowerCase()&&t.type===e}}function he(e){return function(t){var n=t.nodeName.toLowerCase();return("input"===n||"button"===n)&&t.type===e}}function ge(e){return function(t){return"form"in t?t.parentNode&&!1===t.disabled?"label"in t?"label"in t.parentNode?t.parentNode.disabled===e:t.disabled===e:t.isDisabled===e||t.isDisabled!==!e&&se(t)===e:t.disabled===e:"label"in t&&t.disabled===e}}function me(e){return ce(function(t){return t=+t,ce(function(n,r){for(var i,o=e([],n.length,t),s=o.length;s--;)n[i=o[s]]&&(n[i]=!(r[i]=n[i]))})})}function ve(e){return e&&void 0!==e.getElementsByTagName&&e}for(t in n=ae.support={},o=ae.isXML=function(e){var t=e.namespaceURI,n=(e.ownerDocument||e).documentElement;return!K.test(t||n&&n.nodeName||"HTML")},p=ae.setDocument=function(e){var t,i,s=e?e.ownerDocument||e:w;return s!==d&&9===s.nodeType&&s.documentElement&&(h=(d=s).documentElement,g=!o(d),w!==d&&(i=d.defaultView)&&i.top!==i&&(i.addEventListener?i.addEventListener("unload",oe,!1):i.attachEvent&&i.attachEvent("onunload",oe)),n.attributes=ue(function(e){return e.className="i",!e.getAttribute("className")}),n.getElementsByTagName=ue(function(e){return e.appendChild(d.createComment("")),!e.getElementsByTagName("*").length}),n.getElementsByClassName=J.test(d.getElementsByClassName),n.getById=ue(function(e){return h.appendChild(e).id=x,!d.getElementsByName||!d.getElementsByName(x).length}),n.getById?(r.filter.ID=function(e){var t=e.replace(te,ne);return function(e){return e.getAttribute("id")===t}},r.find.ID=function(e,t){if(void 0!==t.getElementById&&g){var n=t.getElementById(e);return n?[n]:[]}}):(r.filter.ID=function(e){var t=e.replace(te,ne);return function(e){var n=void 0!==e.getAttributeNode&&e.getAttributeNode("id");return n&&n.value===t}},r.find.ID=function(e,t){if(void 0!==t.getElementById&&g){var n,r,i,o=t.getElementById(e);if(o){if((n=o.getAttributeNode("id"))&&n.value===e)return[o];for(i=t.getElementsByName(e),r=0;o=i[r++];)if((n=o.getAttributeNode("id"))&&n.value===e)return[o]}return[]}}),r.find.TAG=n.getElementsByTagName?function(e,t){return void 0!==t.getElementsByTagName?t.getElementsByTagName(e):n.qsa?t.querySelectorAll(e):void 0}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){for(;n=o[i++];)1===n.nodeType&&r.push(n);return r}return o},r.find.CLASS=n.getElementsByClassName&&function(e,t){if(void 0!==t.getElementsByClassName&&g)return t.getElementsByClassName(e)},v=[],m=[],(n.qsa=J.test(d.querySelectorAll))&&(ue(function(e){h.appendChild(e).innerHTML="<a id='"+x+"'></a><select id='"+x+"-\r\\' msallowcapture=''><option selected=''></option></select>",e.querySelectorAll("[msallowcapture^='']").length&&m.push("[*^$]="+P+"*(?:''|\"\")"),e.querySelectorAll("[selected]").length||m.push("\\["+P+"*(?:value|"+M+")"),e.querySelectorAll("[id~="+x+"-]").length||m.push("~="),e.querySelectorAll(":checked").length||m.push(":checked"),e.querySelectorAll("a#"+x+"+*").length||m.push(".#.+[+~]")}),ue(function(e){e.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var t=d.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("name","D"),e.querySelectorAll("[name=d]").length&&m.push("name"+P+"*[*^$|!~]?="),2!==e.querySelectorAll(":enabled").length&&m.push(":enabled",":disabled"),h.appendChild(e).disabled=!0,2!==e.querySelectorAll(":disabled").length&&m.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),m.push(",.*:")})),(n.matchesSelector=J.test(y=h.matches||h.webkitMatchesSelector||h.mozMatchesSelector||h.oMatchesSelector||h.msMatchesSelector))&&ue(function(e){n.disconnectedMatch=y.call(e,"*"),y.call(e,"[s!='']:x"),v.push("!=",X)}),m=m.length&&new RegExp(m.join("|")),v=v.length&&new RegExp(v.join("|")),t=J.test(h.compareDocumentPosition),b=t||J.test(h.contains)?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)for(;t=t.parentNode;)if(t===e)return!0;return!1},A=t?function(e,t){if(e===t)return f=!0,0;var r=!e.compareDocumentPosition-!t.compareDocumentPosition;return r||(1&(r=(e.ownerDocument||e)===(t.ownerDocument||t)?e.compareDocumentPosition(t):1)||!n.sortDetached&&t.compareDocumentPosition(e)===r?e===d||e.ownerDocument===w&&b(w,e)?-1:t===d||t.ownerDocument===w&&b(w,t)?1:u?R(u,e)-R(u,t):0:4&r?-1:1)}:function(e,t){if(e===t)return f=!0,0;var n,r=0,i=e.parentNode,o=t.parentNode,s=[e],a=[t];if(!i||!o)return e===d?-1:t===d?1:i?-1:o?1:u?R(u,e)-R(u,t):0;if(i===o)return pe(e,t);for(n=e;n=n.parentNode;)s.unshift(n);for(n=t;n=n.parentNode;)a.unshift(n);for(;s[r]===a[r];)r++;return r?pe(s[r],a[r]):s[r]===w?-1:a[r]===w?1:0}),d},ae.matches=function(e,t){return ae(e,null,null,t)},ae.matchesSelector=function(e,t){if((e.ownerDocument||e)!==d&&p(e),n.matchesSelector&&g&&!k[t+" "]&&(!v||!v.test(t))&&(!m||!m.test(t)))try{var r=y.call(e,t);if(r||n.disconnectedMatch||e.document&&11!==e.document.nodeType)return r}catch(e){k(t,!0)}return 0<ae(t,d,null,[e]).length},ae.contains=function(e,t){return(e.ownerDocument||e)!==d&&p(e),b(e,t)},ae.attr=function(e,t){(e.ownerDocument||e)!==d&&p(e);var i=r.attrHandle[t.toLowerCase()],o=i&&D.call(r.attrHandle,t.toLowerCase())?i(e,t,!g):void 0;return void 0!==o?o:n.attributes||!g?e.getAttribute(t):(o=e.getAttributeNode(t))&&o.specified?o.value:null},ae.escape=function(e){return(e+"").replace(re,ie)},ae.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},ae.uniqueSort=function(e){var t,r=[],i=0,o=0;if(f=!n.detectDuplicates,u=!n.sortStable&&e.slice(0),e.sort(A),f){for(;t=e[o++];)t===e[o]&&(i=r.push(o));for(;i--;)e.splice(r[i],1)}return u=null,e},i=ae.getText=function(e){var t,n="",r=0,o=e.nodeType;if(o){if(1===o||9===o||11===o){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=i(e)}else if(3===o||4===o)return e.nodeValue}else for(;t=e[r++];)n+=i(t);return n},(r=ae.selectors={cacheLength:50,createPseudo:ce,match:V,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(te,ne),e[3]=(e[3]||e[4]||e[5]||"").replace(te,ne),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||ae.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&ae.error(e[0]),e},PSEUDO:function(e){var t,n=!e[6]&&e[2];return V.CHILD.test(e[0])?null:(e[3]?e[2]=e[4]||e[5]||"":n&&U.test(n)&&(t=s(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(te,ne).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=C[e+" "];return t||(t=new RegExp("(^|"+P+")"+e+"("+P+"|$)"))&&C(e,function(e){return t.test("string"==typeof e.className&&e.className||void 0!==e.getAttribute&&e.getAttribute("class")||"")})},ATTR:function(e,t,n){return function(r){var i=ae.attr(r,e);return null==i?"!="===t:!t||(i+="","="===t?i===n:"!="===t?i!==n:"^="===t?n&&0===i.indexOf(n):"*="===t?n&&-1<i.indexOf(n):"$="===t?n&&i.slice(-n.length)===n:"~="===t?-1<(" "+i.replace(I," ")+" ").indexOf(n):"|="===t&&(i===n||i.slice(0,n.length+1)===n+"-"))}},CHILD:function(e,t,n,r,i){var o="nth"!==e.slice(0,3),s="last"!==e.slice(-4),a="of-type"===t;return 1===r&&0===i?function(e){return!!e.parentNode}:function(t,n,l){var c,u,f,p,d,h,g=o!==s?"nextSibling":"previousSibling",m=t.parentNode,v=a&&t.nodeName.toLowerCase(),y=!l&&!a,b=!1;if(m){if(o){for(;g;){for(p=t;p=p[g];)if(a?p.nodeName.toLowerCase()===v:1===p.nodeType)return!1;h=g="only"===e&&!h&&"nextSibling"}return!0}if(h=[s?m.firstChild:m.lastChild],s&&y){for(b=(d=(c=(u=(f=(p=m)[x]||(p[x]={}))[p.uniqueID]||(f[p.uniqueID]={}))[e]||[])[0]===T&&c[1])&&c[2],p=d&&m.childNodes[d];p=++d&&p&&p[g]||(b=d=0)||h.pop();)if(1===p.nodeType&&++b&&p===t){u[e]=[T,d,b];break}}else if(y&&(b=d=(c=(u=(f=(p=t)[x]||(p[x]={}))[p.uniqueID]||(f[p.uniqueID]={}))[e]||[])[0]===T&&c[1]),!1===b)for(;(p=++d&&p&&p[g]||(b=d=0)||h.pop())&&((a?p.nodeName.toLowerCase()!==v:1!==p.nodeType)||!++b||(y&&((u=(f=p[x]||(p[x]={}))[p.uniqueID]||(f[p.uniqueID]={}))[e]=[T,b]),p!==t)););return(b-=i)===r||b%r==0&&0<=b/r}}},PSEUDO:function(e,t){var n,i=r.pseudos[e]||r.setFilters[e.toLowerCase()]||ae.error("unsupported pseudo: "+e);return i[x]?i(t):1<i.length?(n=[e,e,"",t],r.setFilters.hasOwnProperty(e.toLowerCase())?ce(function(e,n){for(var r,o=i(e,t),s=o.length;s--;)e[r=R(e,o[s])]=!(n[r]=o[s])}):function(e){return i(e,0,n)}):i}},pseudos:{not:ce(function(e){var t=[],n=[],r=a(e.replace(B,"$1"));return r[x]?ce(function(e,t,n,i){for(var o,s=r(e,null,i,[]),a=e.length;a--;)(o=s[a])&&(e[a]=!(t[a]=o))}):function(e,i,o){return t[0]=e,r(t,null,o,n),t[0]=null,!n.pop()}}),has:ce(function(e){return function(t){return 0<ae(e,t).length}}),contains:ce(function(e){return e=e.replace(te,ne),function(t){return-1<(t.textContent||i(t)).indexOf(e)}}),lang:ce(function(e){return z.test(e||"")||ae.error("unsupported lang: "+e),e=e.replace(te,ne).toLowerCase(),function(t){var n;do{if(n=g?t.lang:t.getAttribute("xml:lang")||t.getAttribute("lang"))return(n=n.toLowerCase())===e||0===n.indexOf(e+"-")}while((t=t.parentNode)&&1===t.nodeType);return!1}}),target:function(t){var n=e.location&&e.location.hash;return n&&n.slice(1)===t.id},root:function(e){return e===h},focus:function(e){return e===d.activeElement&&(!d.hasFocus||d.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:ge(!1),disabled:ge(!0),checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,!0===e.selected},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeType<6)return!1;return!0},parent:function(e){return!r.pseudos.empty(e)},header:function(e){return Q.test(e.nodeName)},input:function(e){return G.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||"text"===t.toLowerCase())},first:me(function(){return[0]}),last:me(function(e,t){return[t-1]}),eq:me(function(e,t,n){return[n<0?n+t:n]}),even:me(function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e}),odd:me(function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e}),lt:me(function(e,t,n){for(var r=n<0?n+t:t<n?t:n;0<=--r;)e.push(r);return e}),gt:me(function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e})}}).pseudos.nth=r.pseudos.eq,{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})r.pseudos[t]=de(t);for(t in{submit:!0,reset:!0})r.pseudos[t]=he(t);function ye(){}function be(e){for(var t=0,n=e.length,r="";t<n;t++)r+=e[t].value;return r}function xe(e,t,n){var r=t.dir,i=t.next,o=i||r,s=n&&"parentNode"===o,a=E++;return t.first?function(t,n,i){for(;t=t[r];)if(1===t.nodeType||s)return e(t,n,i);return!1}:function(t,n,l){var c,u,f,p=[T,a];if(l){for(;t=t[r];)if((1===t.nodeType||s)&&e(t,n,l))return!0}else for(;t=t[r];)if(1===t.nodeType||s)if(u=(f=t[x]||(t[x]={}))[t.uniqueID]||(f[t.uniqueID]={}),i&&i===t.nodeName.toLowerCase())t=t[r]||t;else{if((c=u[o])&&c[0]===T&&c[1]===a)return p[2]=c[2];if((u[o]=p)[2]=e(t,n,l))return!0}return!1}}function we(e){return 1<e.length?function(t,n,r){for(var i=e.length;i--;)if(!e[i](t,n,r))return!1;return!0}:e[0]}function Te(e,t,n,r,i){for(var o,s=[],a=0,l=e.length,c=null!=t;a<l;a++)(o=e[a])&&(n&&!n(o,r,i)||(s.push(o),c&&t.push(a)));return s}function Ee(e,t,n,r,i,o){return r&&!r[x]&&(r=Ee(r)),i&&!i[x]&&(i=Ee(i,o)),ce(function(o,s,a,l){var c,u,f,p=[],d=[],h=s.length,g=o||function(e,t,n){for(var r=0,i=t.length;r<i;r++)ae(e,t[r],n);return n}(t||"*",a.nodeType?[a]:a,[]),m=!e||!o&&t?g:Te(g,p,e,a,l),v=n?i||(o?e:h||r)?[]:s:m;if(n&&n(m,v,a,l),r)for(c=Te(v,d),r(c,[],a,l),u=c.length;u--;)(f=c[u])&&(v[d[u]]=!(m[d[u]]=f));if(o){if(i||e){if(i){for(c=[],u=v.length;u--;)(f=v[u])&&c.push(m[u]=f);i(null,v=[],c,l)}for(u=v.length;u--;)(f=v[u])&&-1<(c=i?R(o,f):p[u])&&(o[c]=!(s[c]=f))}}else v=Te(v===s?v.splice(h,v.length):v),i?i(null,s,v,l):W.apply(s,v)})}function Ce(e){for(var t,n,i,o=e.length,s=r.relative[e[0].type],a=s||r.relative[" "],l=s?1:0,u=xe(function(e){return e===t},a,!0),f=xe(function(e){return-1<R(t,e)},a,!0),p=[function(e,n,r){var i=!s&&(r||n!==c)||((t=n).nodeType?u(e,n,r):f(e,n,r));return t=null,i}];l<o;l++)if(n=r.relative[e[l].type])p=[xe(we(p),n)];else{if((n=r.filter[e[l].type].apply(null,e[l].matches))[x]){for(i=++l;i<o&&!r.relative[e[i].type];i++);return Ee(1<l&&we(p),1<l&&be(e.slice(0,l-1).concat({value:" "===e[l-2].type?"*":""})).replace(B,"$1"),n,l<i&&Ce(e.slice(l,i)),i<o&&Ce(e=e.slice(i)),i<o&&be(e))}p.push(n)}return we(p)}return ye.prototype=r.filters=r.pseudos,r.setFilters=new ye,s=ae.tokenize=function(e,t){var n,i,o,s,a,l,c,u=S[e+" "];if(u)return t?0:u.slice(0);for(a=e,l=[],c=r.preFilter;a;){for(s in n&&!(i=F.exec(a))||(i&&(a=a.slice(i[0].length)||a),l.push(o=[])),n=!1,(i=$.exec(a))&&(n=i.shift(),o.push({value:n,type:i[0].replace(B," ")}),a=a.slice(n.length)),r.filter)!(i=V[s].exec(a))||c[s]&&!(i=c[s](i))||(n=i.shift(),o.push({value:n,type:s,matches:i}),a=a.slice(n.length));if(!n)break}return t?a.length:a?ae.error(e):S(e,l).slice(0)},a=ae.compile=function(e,t){var n,i,o,a,l,u,f=[],h=[],m=L[e+" "];if(!m){for(t||(t=s(e)),n=t.length;n--;)(m=Ce(t[n]))[x]?f.push(m):h.push(m);(m=L(e,(i=h,a=0<(o=f).length,l=0<i.length,u=function(e,t,n,s,u){var f,h,m,v=0,y="0",b=e&&[],x=[],w=c,E=e||l&&r.find.TAG("*",u),C=T+=null==w?1:Math.random()||.1,S=E.length;for(u&&(c=t===d||t||u);y!==S&&null!=(f=E[y]);y++){if(l&&f){for(h=0,t||f.ownerDocument===d||(p(f),n=!g);m=i[h++];)if(m(f,t||d,n)){s.push(f);break}u&&(T=C)}a&&((f=!m&&f)&&v--,e&&b.push(f))}if(v+=y,a&&y!==v){for(h=0;m=o[h++];)m(b,x,t,n);if(e){if(0<v)for(;y--;)b[y]||x[y]||(x[y]=H.call(s));x=Te(x)}W.apply(s,x),u&&!e&&0<x.length&&1<v+o.length&&ae.uniqueSort(s)}return u&&(T=C,c=w),b},a?ce(u):u))).selector=e}return m},l=ae.select=function(e,t,n,i){var o,l,c,u,f,p="function"==typeof e&&e,d=!i&&s(e=p.selector||e);if(n=n||[],1===d.length){if(2<(l=d[0]=d[0].slice(0)).length&&"ID"===(c=l[0]).type&&9===t.nodeType&&g&&r.relative[l[1].type]){if(!(t=(r.find.ID(c.matches[0].replace(te,ne),t)||[])[0]))return n;p&&(t=t.parentNode),e=e.slice(l.shift().value.length)}for(o=V.needsContext.test(e)?0:l.length;o--&&(c=l[o],!r.relative[u=c.type]);)if((f=r.find[u])&&(i=f(c.matches[0].replace(te,ne),ee.test(l[0].type)&&ve(t.parentNode)||t))){if(l.splice(o,1),!(e=i.length&&be(l)))return W.apply(n,i),n;break}}return(p||a(e,d))(i,t,!g,n,!t||ee.test(e)&&ve(t.parentNode)||t),n},n.sortStable=x.split("").sort(A).join("")===x,n.detectDuplicates=!!f,p(),n.sortDetached=ue(function(e){return 1&e.compareDocumentPosition(d.createElement("fieldset"))}),ue(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||fe("type|href|height|width",function(e,t,n){if(!n)return e.getAttribute(t,"type"===t.toLowerCase()?1:2)}),n.attributes&&ue(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||fe("value",function(e,t,n){if(!n&&"input"===e.nodeName.toLowerCase())return e.defaultValue}),ue(function(e){return null==e.getAttribute("disabled")})||fe(M,function(e,t,n){var r;if(!n)return!0===e[t]?t.toLowerCase():(r=e.getAttributeNode(t))&&r.specified?r.value:null}),ae}(e);w.find=C,w.expr=C.selectors,w.expr[":"]=w.expr.pseudos,w.uniqueSort=w.unique=C.uniqueSort,w.text=C.getText,w.isXMLDoc=C.isXML,w.contains=C.contains,w.escapeSelector=C.escape;var S=function(e,t,n){for(var r=[],i=void 0!==n;(e=e[t])&&9!==e.nodeType;)if(1===e.nodeType){if(i&&w(e).is(n))break;r.push(e)}return r},L=function(e,t){for(var n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n},k=w.expr.match.needsContext;function A(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()}var D=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;function N(e,t,n){return g(t)?w.grep(e,function(e,r){return!!t.call(e,r,e)!==n}):t.nodeType?w.grep(e,function(e){return e===t!==n}):"string"!=typeof t?w.grep(e,function(e){return-1<l.call(t,e)!==n}):w.filter(t,e,n)}w.filter=function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?w.find.matchesSelector(r,e)?[r]:[]:w.find.matches(e,w.grep(t,function(e){return 1===e.nodeType}))},w.fn.extend({find:function(e){var t,n,r=this.length,i=this;if("string"!=typeof e)return this.pushStack(w(e).filter(function(){for(t=0;t<r;t++)if(w.contains(i[t],this))return!0}));for(n=this.pushStack([]),t=0;t<r;t++)w.find(e,i[t],n);return 1<r?w.uniqueSort(n):n},filter:function(e){return this.pushStack(N(this,e||[],!1))},not:function(e){return this.pushStack(N(this,e||[],!0))},is:function(e){return!!N(this,"string"==typeof e&&k.test(e)?w(e):e||[],!1).length}});var H,j=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(w.fn.init=function(e,t,n){var i,o;if(!e)return this;if(n=n||H,"string"==typeof e){if(!(i="<"===e[0]&&">"===e[e.length-1]&&3<=e.length?[null,e,null]:j.exec(e))||!i[1]&&t)return!t||t.jquery?(t||n).find(e):this.constructor(t).find(e);if(i[1]){if(t=t instanceof w?t[0]:t,w.merge(this,w.parseHTML(i[1],t&&t.nodeType?t.ownerDocument||t:r,!0)),D.test(i[1])&&w.isPlainObject(t))for(i in t)g(this[i])?this[i](t[i]):this.attr(i,t[i]);return this}return(o=r.getElementById(i[2]))&&(this[0]=o,this.length=1),this}return e.nodeType?(this[0]=e,this.length=1,this):g(e)?void 0!==n.ready?n.ready(e):e(w):w.makeArray(e,this)}).prototype=w.fn,H=w(r);var W=/^(?:parents|prev(?:Until|All))/,O={children:!0,contents:!0,next:!0,prev:!0};function R(e,t){for(;(e=e[t])&&1!==e.nodeType;);return e}w.fn.extend({has:function(e){var t=w(e,this),n=t.length;return this.filter(function(){for(var e=0;e<n;e++)if(w.contains(this,t[e]))return!0})},closest:function(e,t){var n,r=0,i=this.length,o=[],s="string"!=typeof e&&w(e);if(!k.test(e))for(;r<i;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(n.nodeType<11&&(s?-1<s.index(n):1===n.nodeType&&w.find.matchesSelector(n,e))){o.push(n);break}return this.pushStack(1<o.length?w.uniqueSort(o):o)},index:function(e){return e?"string"==typeof e?l.call(w(e),this[0]):l.call(this,e.jquery?e[0]:e):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){return this.pushStack(w.uniqueSort(w.merge(this.get(),w(e,t))))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}}),w.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return S(e,"parentNode")},parentsUntil:function(e,t,n){return S(e,"parentNode",n)},next:function(e){return R(e,"nextSibling")},prev:function(e){return R(e,"previousSibling")},nextAll:function(e){return S(e,"nextSibling")},prevAll:function(e){return S(e,"previousSibling")},nextUntil:function(e,t,n){return S(e,"nextSibling",n)},prevUntil:function(e,t,n){return S(e,"previousSibling",n)},siblings:function(e){return L((e.parentNode||{}).firstChild,e)},children:function(e){return L(e.firstChild)},contents:function(e){return void 0!==e.contentDocument?e.contentDocument:(A(e,"template")&&(e=e.content||e),w.merge([],e.childNodes))}},function(e,t){w.fn[e]=function(n,r){var i=w.map(this,t,n);return"Until"!==e.slice(-5)&&(r=n),r&&"string"==typeof r&&(i=w.filter(r,i)),1<this.length&&(O[e]||w.uniqueSort(i),W.test(e)&&i.reverse()),this.pushStack(i)}});var M=/[^\x20\t\r\n\f]+/g;function P(e){return e}function q(e){throw e}function Y(e,t,n,r){var i;try{e&&g(i=e.promise)?i.call(e).done(t).fail(n):e&&g(i=e.then)?i.call(e,t,n):t.apply(void 0,[e].slice(r))}catch(e){n.apply(void 0,[e])}}w.Callbacks=function(e){var t,n;e="string"==typeof e?(t=e,n={},w.each(t.match(M)||[],function(e,t){n[t]=!0}),n):w.extend({},e);var r,i,o,s,a=[],l=[],c=-1,u=function(){for(s=s||e.once,o=r=!0;l.length;c=-1)for(i=l.shift();++c<a.length;)!1===a[c].apply(i[0],i[1])&&e.stopOnFalse&&(c=a.length,i=!1);e.memory||(i=!1),r=!1,s&&(a=i?[]:"")},f={add:function(){return a&&(i&&!r&&(c=a.length-1,l.push(i)),function t(n){w.each(n,function(n,r){g(r)?e.unique&&f.has(r)||a.push(r):r&&r.length&&"string"!==b(r)&&t(r)})}(arguments),i&&!r&&u()),this},remove:function(){return w.each(arguments,function(e,t){for(var n;-1<(n=w.inArray(t,a,n));)a.splice(n,1),n<=c&&c--}),this},has:function(e){return e?-1<w.inArray(e,a):0<a.length},empty:function(){return a&&(a=[]),this},disable:function(){return s=l=[],a=i="",this},disabled:function(){return!a},lock:function(){return s=l=[],i||r||(a=i=""),this},locked:function(){return!!s},fireWith:function(e,t){return s||(t=[e,(t=t||[]).slice?t.slice():t],l.push(t),r||u()),this},fire:function(){return f.fireWith(this,arguments),this},fired:function(){return!!o}};return f},w.extend({Deferred:function(t){var n=[["notify","progress",w.Callbacks("memory"),w.Callbacks("memory"),2],["resolve","done",w.Callbacks("once memory"),w.Callbacks("once memory"),0,"resolved"],["reject","fail",w.Callbacks("once memory"),w.Callbacks("once memory"),1,"rejected"]],r="pending",i={state:function(){return r},always:function(){return o.done(arguments).fail(arguments),this},catch:function(e){return i.then(null,e)},pipe:function(){var e=arguments;return w.Deferred(function(t){w.each(n,function(n,r){var i=g(e[r[4]])&&e[r[4]];o[r[1]](function(){var e=i&&i.apply(this,arguments);e&&g(e.promise)?e.promise().progress(t.notify).done(t.resolve).fail(t.reject):t[r[0]+"With"](this,i?[e]:arguments)})}),e=null}).promise()},then:function(t,r,i){var o=0;function s(t,n,r,i){return function(){var a=this,l=arguments,c=function(){var e,c;if(!(t<o)){if((e=r.apply(a,l))===n.promise())throw new TypeError("Thenable self-resolution");c=e&&("object"==typeof e||"function"==typeof e)&&e.then,g(c)?i?c.call(e,s(o,n,P,i),s(o,n,q,i)):(o++,c.call(e,s(o,n,P,i),s(o,n,q,i),s(o,n,P,n.notifyWith))):(r!==P&&(a=void 0,l=[e]),(i||n.resolveWith)(a,l))}},u=i?c:function(){try{c()}catch(e){w.Deferred.exceptionHook&&w.Deferred.exceptionHook(e,u.stackTrace),o<=t+1&&(r!==q&&(a=void 0,l=[e]),n.rejectWith(a,l))}};t?u():(w.Deferred.getStackHook&&(u.stackTrace=w.Deferred.getStackHook()),e.setTimeout(u))}}return w.Deferred(function(e){n[0][3].add(s(0,e,g(i)?i:P,e.notifyWith)),n[1][3].add(s(0,e,g(t)?t:P)),n[2][3].add(s(0,e,g(r)?r:q))}).promise()},promise:function(e){return null!=e?w.extend(e,i):i}},o={};return w.each(n,function(e,t){var s=t[2],a=t[5];i[t[1]]=s.add,a&&s.add(function(){r=a},n[3-e][2].disable,n[3-e][3].disable,n[0][2].lock,n[0][3].lock),s.add(t[3].fire),o[t[0]]=function(){return o[t[0]+"With"](this===o?void 0:this,arguments),this},o[t[0]+"With"]=s.fireWith}),i.promise(o),t&&t.call(o,o),o},when:function(e){var t=arguments.length,n=t,r=Array(n),i=o.call(arguments),s=w.Deferred(),a=function(e){return function(n){r[e]=this,i[e]=1<arguments.length?o.call(arguments):n,--t||s.resolveWith(r,i)}};if(t<=1&&(Y(e,s.done(a(n)).resolve,s.reject,!t),"pending"===s.state()||g(i[n]&&i[n].then)))return s.then();for(;n--;)Y(i[n],a(n),s.reject);return s.promise()}});var X=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;w.Deferred.exceptionHook=function(t,n){e.console&&e.console.warn&&t&&X.test(t.name)&&e.console.warn("jQuery.Deferred exception: "+t.message,t.stack,n)},w.readyException=function(t){e.setTimeout(function(){throw t})};var I=w.Deferred();function B(){r.removeEventListener("DOMContentLoaded",B),e.removeEventListener("load",B),w.ready()}w.fn.ready=function(e){return I.then(e).catch(function(e){w.readyException(e)}),this},w.extend({isReady:!1,readyWait:1,ready:function(e){(!0===e?--w.readyWait:w.isReady)||(w.isReady=!0)!==e&&0<--w.readyWait||I.resolveWith(r,[w])}}),w.ready.then=I.then,"complete"===r.readyState||"loading"!==r.readyState&&!r.documentElement.doScroll?e.setTimeout(w.ready):(r.addEventListener("DOMContentLoaded",B),e.addEventListener("load",B));var F=function(e,t,n,r,i,o,s){var a=0,l=e.length,c=null==n;if("object"===b(n))for(a in i=!0,n)F(e,t,a,n[a],!0,o,s);else if(void 0!==r&&(i=!0,g(r)||(s=!0),c&&(s?(t.call(e,r),t=null):(c=t,t=function(e,t,n){return c.call(w(e),n)})),t))for(;a<l;a++)t(e[a],n,s?r:r.call(e[a],a,t(e[a],n)));return i?e:c?t.call(e):l?t(e[0],n):o},$=/^-ms-/,_=/-([a-z])/g;function U(e,t){return t.toUpperCase()}function z(e){return e.replace($,"ms-").replace(_,U)}var V=function(e){return 1===e.nodeType||9===e.nodeType||!+e.nodeType};function K(){this.expando=w.expando+K.uid++}K.uid=1,K.prototype={cache:function(e){var t=e[this.expando];return t||(t={},V(e)&&(e.nodeType?e[this.expando]=t:Object.defineProperty(e,this.expando,{value:t,configurable:!0}))),t},set:function(e,t,n){var r,i=this.cache(e);if("string"==typeof t)i[z(t)]=n;else for(r in t)i[z(r)]=t[r];return i},get:function(e,t){return void 0===t?this.cache(e):e[this.expando]&&e[this.expando][z(t)]},access:function(e,t,n){return void 0===t||t&&"string"==typeof t&&void 0===n?this.get(e,t):(this.set(e,t,n),void 0!==n?n:t)},remove:function(e,t){var n,r=e[this.expando];if(void 0!==r){if(void 0!==t){n=(t=Array.isArray(t)?t.map(z):(t=z(t))in r?[t]:t.match(M)||[]).length;for(;n--;)delete r[t[n]]}(void 0===t||w.isEmptyObject(r))&&(e.nodeType?e[this.expando]=void 0:delete e[this.expando])}},hasData:function(e){var t=e[this.expando];return void 0!==t&&!w.isEmptyObject(t)}};var G=new K,Q=new K,J=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,Z=/[A-Z]/g;function ee(e,t,n){var r,i;if(void 0===n&&1===e.nodeType)if(r="data-"+t.replace(Z,"-$&").toLowerCase(),"string"==typeof(n=e.getAttribute(r))){try{n="true"===(i=n)||"false"!==i&&("null"===i?null:i===+i+""?+i:J.test(i)?JSON.parse(i):i)}catch(e){}Q.set(e,t,n)}else n=void 0;return n}w.extend({hasData:function(e){return Q.hasData(e)||G.hasData(e)},data:function(e,t,n){return Q.access(e,t,n)},removeData:function(e,t){Q.remove(e,t)},_data:function(e,t,n){return G.access(e,t,n)},_removeData:function(e,t){G.remove(e,t)}}),w.fn.extend({data:function(e,t){var n,r,i,o=this[0],s=o&&o.attributes;if(void 0===e){if(this.length&&(i=Q.get(o),1===o.nodeType&&!G.get(o,"hasDataAttrs"))){for(n=s.length;n--;)s[n]&&0===(r=s[n].name).indexOf("data-")&&(r=z(r.slice(5)),ee(o,r,i[r]));G.set(o,"hasDataAttrs",!0)}return i}return"object"==typeof e?this.each(function(){Q.set(this,e)}):F(this,function(t){var n;if(o&&void 0===t)return void 0!==(n=Q.get(o,e))?n:void 0!==(n=ee(o,e))?n:void 0;this.each(function(){Q.set(this,e,t)})},null,t,1<arguments.length,null,!0)},removeData:function(e){return this.each(function(){Q.remove(this,e)})}}),w.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=G.get(e,t),n&&(!r||Array.isArray(n)?r=G.access(e,t,w.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=w.queue(e,t),r=n.length,i=n.shift(),o=w._queueHooks(e,t);"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,function(){w.dequeue(e,t)},o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return G.get(e,n)||G.access(e,n,{empty:w.Callbacks("once memory").add(function(){G.remove(e,[t+"queue",n])})})}}),w.fn.extend({queue:function(e,t){var n=2;return"string"!=typeof e&&(t=e,e="fx",n--),arguments.length<n?w.queue(this[0],e):void 0===t?this:this.each(function(){var n=w.queue(this,e,t);w._queueHooks(this,e),"fx"===e&&"inprogress"!==n[0]&&w.dequeue(this,e)})},dequeue:function(e){return this.each(function(){w.dequeue(this,e)})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,t){var n,r=1,i=w.Deferred(),o=this,s=this.length,a=function(){--r||i.resolveWith(o,[o])};for("string"!=typeof e&&(t=e,e=void 0),e=e||"fx";s--;)(n=G.get(o[s],e+"queueHooks"))&&n.empty&&(r++,n.empty.add(a));return a(),i.promise(t)}});var te=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,ne=new RegExp("^(?:([+-])=|)("+te+")([a-z%]*)$","i"),re=["Top","Right","Bottom","Left"],ie=r.documentElement,oe=function(e){return w.contains(e.ownerDocument,e)},se={composed:!0};ie.attachShadow&&(oe=function(e){return w.contains(e.ownerDocument,e)||e.getRootNode(se)===e.ownerDocument});var ae=function(e,t){return"none"===(e=t||e).style.display||""===e.style.display&&oe(e)&&"none"===w.css(e,"display")},le=function(e,t,n,r){var i,o,s={};for(o in t)s[o]=e.style[o],e.style[o]=t[o];for(o in i=n.apply(e,r||[]),t)e.style[o]=s[o];return i};function ce(e,t,n,r){var i,o,s=20,a=r?function(){return r.cur()}:function(){return w.css(e,t,"")},l=a(),c=n&&n[3]||(w.cssNumber[t]?"":"px"),u=e.nodeType&&(w.cssNumber[t]||"px"!==c&&+l)&&ne.exec(w.css(e,t));if(u&&u[3]!==c){for(l/=2,c=c||u[3],u=+l||1;s--;)w.style(e,t,u+c),(1-o)*(1-(o=a()/l||.5))<=0&&(s=0),u/=o;u*=2,w.style(e,t,u+c),n=n||[]}return n&&(u=+u||+l||0,i=n[1]?u+(n[1]+1)*n[2]:+n[2],r&&(r.unit=c,r.start=u,r.end=i)),i}var ue={};function fe(e,t){for(var n,r,i,o,s,a,l,c=[],u=0,f=e.length;u<f;u++)(r=e[u]).style&&(n=r.style.display,t?("none"===n&&(c[u]=G.get(r,"display")||null,c[u]||(r.style.display="")),""===r.style.display&&ae(r)&&(c[u]=(l=s=o=void 0,s=(i=r).ownerDocument,a=i.nodeName,(l=ue[a])||(o=s.body.appendChild(s.createElement(a)),l=w.css(o,"display"),o.parentNode.removeChild(o),"none"===l&&(l="block"),ue[a]=l)))):"none"!==n&&(c[u]="none",G.set(r,"display",n)));for(u=0;u<f;u++)null!=c[u]&&(e[u].style.display=c[u]);return e}w.fn.extend({show:function(){return fe(this,!0)},hide:function(){return fe(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each(function(){ae(this)?w(this).show():w(this).hide()})}});var pe=/^(?:checkbox|radio)$/i,de=/<([a-z][^\/\0>\x20\t\r\n\f]*)/i,he=/^$|^module$|\/(?:java|ecma)script/i,ge={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};function me(e,t){var n;return n=void 0!==e.getElementsByTagName?e.getElementsByTagName(t||"*"):void 0!==e.querySelectorAll?e.querySelectorAll(t||"*"):[],void 0===t||t&&A(e,t)?w.merge([e],n):n}function ve(e,t){for(var n=0,r=e.length;n<r;n++)G.set(e[n],"globalEval",!t||G.get(t[n],"globalEval"))}ge.optgroup=ge.option,ge.tbody=ge.tfoot=ge.colgroup=ge.caption=ge.thead,ge.th=ge.td;var ye,be,xe=/<|&#?\w+;/;function we(e,t,n,r,i){for(var o,s,a,l,c,u,f=t.createDocumentFragment(),p=[],d=0,h=e.length;d<h;d++)if((o=e[d])||0===o)if("object"===b(o))w.merge(p,o.nodeType?[o]:o);else if(xe.test(o)){for(s=s||f.appendChild(t.createElement("div")),a=(de.exec(o)||["",""])[1].toLowerCase(),l=ge[a]||ge._default,s.innerHTML=l[1]+w.htmlPrefilter(o)+l[2],u=l[0];u--;)s=s.lastChild;w.merge(p,s.childNodes),(s=f.firstChild).textContent=""}else p.push(t.createTextNode(o));for(f.textContent="",d=0;o=p[d++];)if(r&&-1<w.inArray(o,r))i&&i.push(o);else if(c=oe(o),s=me(f.appendChild(o),"script"),c&&ve(s),n)for(u=0;o=s[u++];)he.test(o.type||"")&&n.push(o);return f}ye=r.createDocumentFragment().appendChild(r.createElement("div")),(be=r.createElement("input")).setAttribute("type","radio"),be.setAttribute("checked","checked"),be.setAttribute("name","t"),ye.appendChild(be),h.checkClone=ye.cloneNode(!0).cloneNode(!0).lastChild.checked,ye.innerHTML="<textarea>x</textarea>",h.noCloneChecked=!!ye.cloneNode(!0).lastChild.defaultValue;var Te=/^key/,Ee=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,Ce=/^([^.]*)(?:\.(.+)|)/;function Se(){return!0}function Le(){return!1}function ke(e,t){return e===function(){try{return r.activeElement}catch(e){}}()==("focus"===t)}function Ae(e,t,n,r,i,o){var s,a;if("object"==typeof t){for(a in"string"!=typeof n&&(r=r||n,n=void 0),t)Ae(e,a,n,r,t[a],o);return e}if(null==r&&null==i?(i=n,r=n=void 0):null==i&&("string"==typeof n?(i=r,r=void 0):(i=r,r=n,n=void 0)),!1===i)i=Le;else if(!i)return e;return 1===o&&(s=i,(i=function(e){return w().off(e),s.apply(this,arguments)}).guid=s.guid||(s.guid=w.guid++)),e.each(function(){w.event.add(this,t,i,r,n)})}function De(e,t,n){n?(G.set(e,t,!1),w.event.add(e,t,{namespace:!1,handler:function(e){var r,i,s=G.get(this,t);if(1&e.isTrigger&&this[t]){if(s)(w.event.special[t]||{}).delegateType&&e.stopPropagation();else if(s=o.call(arguments),G.set(this,t,s),r=n(this,t),this[t](),s!==(i=G.get(this,t))||r?G.set(this,t,!1):i=void 0,s!==i)return e.stopImmediatePropagation(),e.preventDefault(),i}else s&&(G.set(this,t,w.event.trigger(w.extend(s.shift(),w.Event.prototype),s,this)),e.stopImmediatePropagation())}})):w.event.add(e,t,Se)}w.event={global:{},add:function(e,t,n,r,i){var o,s,a,l,c,u,f,p,d,h,g,m=G.get(e);if(m)for(n.handler&&(n=(o=n).handler,i=o.selector),i&&w.find.matchesSelector(ie,i),n.guid||(n.guid=w.guid++),(l=m.events)||(l=m.events={}),(s=m.handle)||(s=m.handle=function(t){return void 0!==w&&w.event.triggered!==t.type?w.event.dispatch.apply(e,arguments):void 0}),c=(t=(t||"").match(M)||[""]).length;c--;)d=g=(a=Ce.exec(t[c])||[])[1],h=(a[2]||"").split(".").sort(),d&&(f=w.event.special[d]||{},d=(i?f.delegateType:f.bindType)||d,f=w.event.special[d]||{},u=w.extend({type:d,origType:g,data:r,handler:n,guid:n.guid,selector:i,needsContext:i&&w.expr.match.needsContext.test(i),namespace:h.join(".")},o),(p=l[d])||((p=l[d]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(e,r,h,s)||e.addEventListener&&e.addEventListener(d,s)),f.add&&(f.add.call(e,u),u.handler.guid||(u.handler.guid=n.guid)),i?p.splice(p.delegateCount++,0,u):p.push(u),w.event.global[d]=!0)},remove:function(e,t,n,r,i){var o,s,a,l,c,u,f,p,d,h,g,m=G.hasData(e)&&G.get(e);if(m&&(l=m.events)){for(c=(t=(t||"").match(M)||[""]).length;c--;)if(d=g=(a=Ce.exec(t[c])||[])[1],h=(a[2]||"").split(".").sort(),d){for(f=w.event.special[d]||{},p=l[d=(r?f.delegateType:f.bindType)||d]||[],a=a[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),s=o=p.length;o--;)u=p[o],!i&&g!==u.origType||n&&n.guid!==u.guid||a&&!a.test(u.namespace)||r&&r!==u.selector&&("**"!==r||!u.selector)||(p.splice(o,1),u.selector&&p.delegateCount--,f.remove&&f.remove.call(e,u));s&&!p.length&&(f.teardown&&!1!==f.teardown.call(e,h,m.handle)||w.removeEvent(e,d,m.handle),delete l[d])}else for(d in l)w.event.remove(e,d+t[c],n,r,!0);w.isEmptyObject(l)&&G.remove(e,"handle events")}},dispatch:function(e){var t,n,r,i,o,s,a=w.event.fix(e),l=new Array(arguments.length),c=(G.get(this,"events")||{})[a.type]||[],u=w.event.special[a.type]||{};for(l[0]=a,t=1;t<arguments.length;t++)l[t]=arguments[t];if(a.delegateTarget=this,!u.preDispatch||!1!==u.preDispatch.call(this,a)){for(s=w.event.handlers.call(this,a,c),t=0;(i=s[t++])&&!a.isPropagationStopped();)for(a.currentTarget=i.elem,n=0;(o=i.handlers[n++])&&!a.isImmediatePropagationStopped();)a.rnamespace&&!1!==o.namespace&&!a.rnamespace.test(o.namespace)||(a.handleObj=o,a.data=o.data,void 0!==(r=((w.event.special[o.origType]||{}).handle||o.handler).apply(i.elem,l))&&!1===(a.result=r)&&(a.preventDefault(),a.stopPropagation()));return u.postDispatch&&u.postDispatch.call(this,a),a.result}},handlers:function(e,t){var n,r,i,o,s,a=[],l=t.delegateCount,c=e.target;if(l&&c.nodeType&&!("click"===e.type&&1<=e.button))for(;c!==this;c=c.parentNode||this)if(1===c.nodeType&&("click"!==e.type||!0!==c.disabled)){for(o=[],s={},n=0;n<l;n++)void 0===s[i=(r=t[n]).selector+" "]&&(s[i]=r.needsContext?-1<w(i,this).index(c):w.find(i,this,null,[c]).length),s[i]&&o.push(r);o.length&&a.push({elem:c,handlers:o})}return c=this,l<t.length&&a.push({elem:c,handlers:t.slice(l)}),a},addProp:function(e,t){Object.defineProperty(w.Event.prototype,e,{enumerable:!0,configurable:!0,get:g(t)?function(){if(this.originalEvent)return t(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[e]},set:function(t){Object.defineProperty(this,e,{enumerable:!0,configurable:!0,writable:!0,value:t})}})},fix:function(e){return e[w.expando]?e:new w.Event(e)},special:{load:{noBubble:!0},click:{setup:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&void 0===G.get(t,"click")&&De(t,"click",Se),!1},trigger:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&void 0===G.get(t,"click")&&De(t,"click"),!0},_default:function(e){var t=e.target;return pe.test(t.type)&&t.click&&A(t,"input")&&G.get(t,"click")||A(t,"a")}},beforeunload:{postDispatch:function(e){void 0!==e.result&&e.originalEvent&&(e.originalEvent.returnValue=e.result)}}}},w.removeEvent=function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n)},w.Event=function(e,t){if(!(this instanceof w.Event))return new w.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||void 0===e.defaultPrevented&&!1===e.returnValue?Se:Le,this.target=e.target&&3===e.target.nodeType?e.target.parentNode:e.target,this.currentTarget=e.currentTarget,this.relatedTarget=e.relatedTarget):this.type=e,t&&w.extend(this,t),this.timeStamp=e&&e.timeStamp||Date.now(),this[w.expando]=!0},w.Event.prototype={constructor:w.Event,isDefaultPrevented:Le,isPropagationStopped:Le,isImmediatePropagationStopped:Le,isSimulated:!1,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=Se,e&&!this.isSimulated&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=Se,e&&!this.isSimulated&&e.stopPropagation()},stopImmediatePropagation:function(){var e=this.originalEvent;this.isImmediatePropagationStopped=Se,e&&!this.isSimulated&&e.stopImmediatePropagation(),this.stopPropagation()}},w.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,char:!0,code:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(e){var t=e.button;return null==e.which&&Te.test(e.type)?null!=e.charCode?e.charCode:e.keyCode:!e.which&&void 0!==t&&Ee.test(e.type)?1&t?1:2&t?3:4&t?2:0:e.which}},w.event.addProp),w.each({focus:"focusin",blur:"focusout"},function(e,t){w.event.special[e]={setup:function(){return De(this,e,ke),!1},trigger:function(){return De(this,e),!0},delegateType:t}}),w.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(e,t){w.event.special[e]={delegateType:t,bindType:t,handle:function(e){var n,r=e.relatedTarget,i=e.handleObj;return r&&(r===this||w.contains(this,r))||(e.type=i.origType,n=i.handler.apply(this,arguments),e.type=t),n}}}),w.fn.extend({on:function(e,t,n,r){return Ae(this,e,t,n,r)},one:function(e,t,n,r){return Ae(this,e,t,n,r,1)},off:function(e,t,n){var r,i;if(e&&e.preventDefault&&e.handleObj)return r=e.handleObj,w(e.delegateTarget).off(r.namespace?r.origType+"."+r.namespace:r.origType,r.selector,r.handler),this;if("object"==typeof e){for(i in e)this.off(i,t,e[i]);return this}return!1!==t&&"function"!=typeof t||(n=t,t=void 0),!1===n&&(n=Le),this.each(function(){w.event.remove(this,e,n,t)})}});var Ne=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,He=/<script|<style|<link/i,je=/checked\s*(?:[^=]|=\s*.checked.)/i,We=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function Oe(e,t){return A(e,"table")&&A(11!==t.nodeType?t:t.firstChild,"tr")&&w(e).children("tbody")[0]||e}function Re(e){return e.type=(null!==e.getAttribute("type"))+"/"+e.type,e}function Me(e){return"true/"===(e.type||"").slice(0,5)?e.type=e.type.slice(5):e.removeAttribute("type"),e}function Pe(e,t){var n,r,i,o,s,a,l,c;if(1===t.nodeType){if(G.hasData(e)&&(o=G.access(e),s=G.set(t,o),c=o.events))for(i in delete s.handle,s.events={},c)for(n=0,r=c[i].length;n<r;n++)w.event.add(t,i,c[i][n]);Q.hasData(e)&&(a=Q.access(e),l=w.extend({},a),Q.set(t,l))}}function qe(e,t,n,r){t=s.apply([],t);var i,o,a,l,c,u,f=0,p=e.length,d=p-1,m=t[0],v=g(m);if(v||1<p&&"string"==typeof m&&!h.checkClone&&je.test(m))return e.each(function(i){var o=e.eq(i);v&&(t[0]=m.call(this,i,o.html())),qe(o,t,n,r)});if(p&&(o=(i=we(t,e[0].ownerDocument,!1,e,r)).firstChild,1===i.childNodes.length&&(i=o),o||r)){for(l=(a=w.map(me(i,"script"),Re)).length;f<p;f++)c=i,f!==d&&(c=w.clone(c,!0,!0),l&&w.merge(a,me(c,"script"))),n.call(e[f],c,f);if(l)for(u=a[a.length-1].ownerDocument,w.map(a,Me),f=0;f<l;f++)c=a[f],he.test(c.type||"")&&!G.access(c,"globalEval")&&w.contains(u,c)&&(c.src&&"module"!==(c.type||"").toLowerCase()?w._evalUrl&&!c.noModule&&w._evalUrl(c.src,{nonce:c.nonce||c.getAttribute("nonce")}):y(c.textContent.replace(We,""),c,u))}return e}function Ye(e,t,n){for(var r,i=t?w.filter(t,e):e,o=0;null!=(r=i[o]);o++)n||1!==r.nodeType||w.cleanData(me(r)),r.parentNode&&(n&&oe(r)&&ve(me(r,"script")),r.parentNode.removeChild(r));return e}w.extend({htmlPrefilter:function(e){return e.replace(Ne,"<$1></$2>")},clone:function(e,t,n){var r,i,o,s,a,l,c,u=e.cloneNode(!0),f=oe(e);if(!(h.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||w.isXMLDoc(e)))for(s=me(u),r=0,i=(o=me(e)).length;r<i;r++)a=o[r],"input"===(c=(l=s[r]).nodeName.toLowerCase())&&pe.test(a.type)?l.checked=a.checked:"input"!==c&&"textarea"!==c||(l.defaultValue=a.defaultValue);if(t)if(n)for(o=o||me(e),s=s||me(u),r=0,i=o.length;r<i;r++)Pe(o[r],s[r]);else Pe(e,u);return 0<(s=me(u,"script")).length&&ve(s,!f&&me(e,"script")),u},cleanData:function(e){for(var t,n,r,i=w.event.special,o=0;void 0!==(n=e[o]);o++)if(V(n)){if(t=n[G.expando]){if(t.events)for(r in t.events)i[r]?w.event.remove(n,r):w.removeEvent(n,r,t.handle);n[G.expando]=void 0}n[Q.expando]&&(n[Q.expando]=void 0)}}}),w.fn.extend({detach:function(e){return Ye(this,e,!0)},remove:function(e){return Ye(this,e)},text:function(e){return F(this,function(e){return void 0===e?w.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=e)})},null,e,arguments.length)},append:function(){return qe(this,arguments,function(e){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||Oe(this,e).appendChild(e)})},prepend:function(){return qe(this,arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=Oe(this,e);t.insertBefore(e,t.firstChild)}})},before:function(){return qe(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return qe(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},empty:function(){for(var e,t=0;null!=(e=this[t]);t++)1===e.nodeType&&(w.cleanData(me(e,!1)),e.textContent="");return this},clone:function(e,t){return e=null!=e&&e,t=null==t?e:t,this.map(function(){return w.clone(this,e,t)})},html:function(e){return F(this,function(e){var t=this[0]||{},n=0,r=this.length;if(void 0===e&&1===t.nodeType)return t.innerHTML;if("string"==typeof e&&!He.test(e)&&!ge[(de.exec(e)||["",""])[1].toLowerCase()]){e=w.htmlPrefilter(e);try{for(;n<r;n++)1===(t=this[n]||{}).nodeType&&(w.cleanData(me(t,!1)),t.innerHTML=e);t=0}catch(e){}}t&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(){var e=[];return qe(this,arguments,function(t){var n=this.parentNode;w.inArray(this,e)<0&&(w.cleanData(me(this)),n&&n.replaceChild(t,this))},e)}}),w.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,t){w.fn[e]=function(e){for(var n,r=[],i=w(e),o=i.length-1,s=0;s<=o;s++)n=s===o?this:this.clone(!0),w(i[s])[t](n),a.apply(r,n.get());return this.pushStack(r)}});var Xe=new RegExp("^("+te+")(?!px)[a-z%]+$","i"),Ie=function(t){var n=t.ownerDocument.defaultView;return n&&n.opener||(n=e),n.getComputedStyle(t)},Be=new RegExp(re.join("|"),"i");function Fe(e,t,n){var r,i,o,s,a=e.style;return(n=n||Ie(e))&&(""!==(s=n.getPropertyValue(t)||n[t])||oe(e)||(s=w.style(e,t)),!h.pixelBoxStyles()&&Xe.test(s)&&Be.test(t)&&(r=a.width,i=a.minWidth,o=a.maxWidth,a.minWidth=a.maxWidth=a.width=s,s=n.width,a.width=r,a.minWidth=i,a.maxWidth=o)),void 0!==s?s+"":s}function $e(e,t){return{get:function(){if(!e())return(this.get=t).apply(this,arguments);delete this.get}}}!function(){function t(){if(u){c.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",u.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",ie.appendChild(c).appendChild(u);var t=e.getComputedStyle(u);i="1%"!==t.top,l=12===n(t.marginLeft),u.style.right="60%",a=36===n(t.right),o=36===n(t.width),u.style.position="absolute",s=12===n(u.offsetWidth/3),ie.removeChild(c),u=null}}function n(e){return Math.round(parseFloat(e))}var i,o,s,a,l,c=r.createElement("div"),u=r.createElement("div");u.style&&(u.style.backgroundClip="content-box",u.cloneNode(!0).style.backgroundClip="",h.clearCloneStyle="content-box"===u.style.backgroundClip,w.extend(h,{boxSizingReliable:function(){return t(),o},pixelBoxStyles:function(){return t(),a},pixelPosition:function(){return t(),i},reliableMarginLeft:function(){return t(),l},scrollboxSize:function(){return t(),s}}))}();var _e=["Webkit","Moz","ms"],Ue=r.createElement("div").style,ze={};function Ve(e){return w.cssProps[e]||ze[e]||(e in Ue?e:ze[e]=function(e){for(var t=e[0].toUpperCase()+e.slice(1),n=_e.length;n--;)if((e=_e[n]+t)in Ue)return e}(e)||e)}var Ke=/^(none|table(?!-c[ea]).+)/,Ge=/^--/,Qe={position:"absolute",visibility:"hidden",display:"block"},Je={letterSpacing:"0",fontWeight:"400"};function Ze(e,t,n){var r=ne.exec(t);return r?Math.max(0,r[2]-(n||0))+(r[3]||"px"):t}function et(e,t,n,r,i,o){var s="width"===t?1:0,a=0,l=0;if(n===(r?"border":"content"))return 0;for(;s<4;s+=2)"margin"===n&&(l+=w.css(e,n+re[s],!0,i)),r?("content"===n&&(l-=w.css(e,"padding"+re[s],!0,i)),"margin"!==n&&(l-=w.css(e,"border"+re[s]+"Width",!0,i))):(l+=w.css(e,"padding"+re[s],!0,i),"padding"!==n?l+=w.css(e,"border"+re[s]+"Width",!0,i):a+=w.css(e,"border"+re[s]+"Width",!0,i));return!r&&0<=o&&(l+=Math.max(0,Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-o-l-a-.5))||0),l}function tt(e,t,n){var r=Ie(e),i=(!h.boxSizingReliable()||n)&&"border-box"===w.css(e,"boxSizing",!1,r),o=i,s=Fe(e,t,r),a="offset"+t[0].toUpperCase()+t.slice(1);if(Xe.test(s)){if(!n)return s;s="auto"}return(!h.boxSizingReliable()&&i||"auto"===s||!parseFloat(s)&&"inline"===w.css(e,"display",!1,r))&&e.getClientRects().length&&(i="border-box"===w.css(e,"boxSizing",!1,r),(o=a in e)&&(s=e[a])),(s=parseFloat(s)||0)+et(e,t,n||(i?"border":"content"),o,r,s)+"px"}function nt(e,t,n,r,i){return new nt.prototype.init(e,t,n,r,i)}w.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=Fe(e,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,gridArea:!0,gridColumn:!0,gridColumnEnd:!0,gridColumnStart:!0,gridRow:!0,gridRowEnd:!0,gridRowStart:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(e,t,n,r){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var i,o,s,a=z(t),l=Ge.test(t),c=e.style;if(l||(t=Ve(a)),s=w.cssHooks[t]||w.cssHooks[a],void 0===n)return s&&"get"in s&&void 0!==(i=s.get(e,!1,r))?i:c[t];"string"==(o=typeof n)&&(i=ne.exec(n))&&i[1]&&(n=ce(e,t,i),o="number"),null!=n&&n==n&&("number"!==o||l||(n+=i&&i[3]||(w.cssNumber[a]?"":"px")),h.clearCloneStyle||""!==n||0!==t.indexOf("background")||(c[t]="inherit"),s&&"set"in s&&void 0===(n=s.set(e,n,r))||(l?c.setProperty(t,n):c[t]=n))}},css:function(e,t,n,r){var i,o,s,a=z(t);return Ge.test(t)||(t=Ve(a)),(s=w.cssHooks[t]||w.cssHooks[a])&&"get"in s&&(i=s.get(e,!0,n)),void 0===i&&(i=Fe(e,t,r)),"normal"===i&&t in Je&&(i=Je[t]),""===n||n?(o=parseFloat(i),!0===n||isFinite(o)?o||0:i):i}}),w.each(["height","width"],function(e,t){w.cssHooks[t]={get:function(e,n,r){if(n)return!Ke.test(w.css(e,"display"))||e.getClientRects().length&&e.getBoundingClientRect().width?tt(e,t,r):le(e,Qe,function(){return tt(e,t,r)})},set:function(e,n,r){var i,o=Ie(e),s=!h.scrollboxSize()&&"absolute"===o.position,a=(s||r)&&"border-box"===w.css(e,"boxSizing",!1,o),l=r?et(e,t,r,a,o):0;return a&&s&&(l-=Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-parseFloat(o[t])-et(e,t,"border",!1,o)-.5)),l&&(i=ne.exec(n))&&"px"!==(i[3]||"px")&&(e.style[t]=n,n=w.css(e,t)),Ze(0,n,l)}}}),w.cssHooks.marginLeft=$e(h.reliableMarginLeft,function(e,t){if(t)return(parseFloat(Fe(e,"marginLeft"))||e.getBoundingClientRect().left-le(e,{marginLeft:0},function(){return e.getBoundingClientRect().left}))+"px"}),w.each({margin:"",padding:"",border:"Width"},function(e,t){w.cssHooks[e+t]={expand:function(n){for(var r=0,i={},o="string"==typeof n?n.split(" "):[n];r<4;r++)i[e+re[r]+t]=o[r]||o[r-2]||o[0];return i}},"margin"!==e&&(w.cssHooks[e+t].set=Ze)}),w.fn.extend({css:function(e,t){return F(this,function(e,t,n){var r,i,o={},s=0;if(Array.isArray(t)){for(r=Ie(e),i=t.length;s<i;s++)o[t[s]]=w.css(e,t[s],!1,r);return o}return void 0!==n?w.style(e,t,n):w.css(e,t)},e,t,1<arguments.length)}}),((w.Tween=nt).prototype={constructor:nt,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||w.easing._default,this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(w.cssNumber[n]?"":"px")},cur:function(){var e=nt.propHooks[this.prop];return e&&e.get?e.get(this):nt.propHooks._default.get(this)},run:function(e){var t,n=nt.propHooks[this.prop];return this.options.duration?this.pos=t=w.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):nt.propHooks._default.set(this),this}}).init.prototype=nt.prototype,(nt.propHooks={_default:{get:function(e){var t;return 1!==e.elem.nodeType||null!=e.elem[e.prop]&&null==e.elem.style[e.prop]?e.elem[e.prop]:(t=w.css(e.elem,e.prop,""))&&"auto"!==t?t:0},set:function(e){w.fx.step[e.prop]?w.fx.step[e.prop](e):1!==e.elem.nodeType||!w.cssHooks[e.prop]&&null==e.elem.style[Ve(e.prop)]?e.elem[e.prop]=e.now:w.style(e.elem,e.prop,e.now+e.unit)}}}).scrollTop=nt.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},w.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2},_default:"swing"},w.fx=nt.prototype.init,w.fx.step={};var rt,it,ot,st,at=/^(?:toggle|show|hide)$/,lt=/queueHooks$/;function ct(){it&&(!1===r.hidden&&e.requestAnimationFrame?e.requestAnimationFrame(ct):e.setTimeout(ct,w.fx.interval),w.fx.tick())}function ut(){return e.setTimeout(function(){rt=void 0}),rt=Date.now()}function ft(e,t){var n,r=0,i={height:e};for(t=t?1:0;r<4;r+=2-t)i["margin"+(n=re[r])]=i["padding"+n]=e;return t&&(i.opacity=i.width=e),i}function pt(e,t,n){for(var r,i=(dt.tweeners[t]||[]).concat(dt.tweeners["*"]),o=0,s=i.length;o<s;o++)if(r=i[o].call(n,t,e))return r}function dt(e,t,n){var r,i,o=0,s=dt.prefilters.length,a=w.Deferred().always(function(){delete l.elem}),l=function(){if(i)return!1;for(var t=rt||ut(),n=Math.max(0,c.startTime+c.duration-t),r=1-(n/c.duration||0),o=0,s=c.tweens.length;o<s;o++)c.tweens[o].run(r);return a.notifyWith(e,[c,r,n]),r<1&&s?n:(s||a.notifyWith(e,[c,1,0]),a.resolveWith(e,[c]),!1)},c=a.promise({elem:e,props:w.extend({},t),opts:w.extend(!0,{specialEasing:{},easing:w.easing._default},n),originalProperties:t,originalOptions:n,startTime:rt||ut(),duration:n.duration,tweens:[],createTween:function(t,n){var r=w.Tween(e,c.opts,t,n,c.opts.specialEasing[t]||c.opts.easing);return c.tweens.push(r),r},stop:function(t){var n=0,r=t?c.tweens.length:0;if(i)return this;for(i=!0;n<r;n++)c.tweens[n].run(1);return t?(a.notifyWith(e,[c,1,0]),a.resolveWith(e,[c,t])):a.rejectWith(e,[c,t]),this}}),u=c.props;for(function(e,t){var n,r,i,o,s;for(n in e)if(i=t[r=z(n)],o=e[n],Array.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),(s=w.cssHooks[r])&&"expand"in s)for(n in o=s.expand(o),delete e[r],o)n in e||(e[n]=o[n],t[n]=i);else t[r]=i}(u,c.opts.specialEasing);o<s;o++)if(r=dt.prefilters[o].call(c,e,u,c.opts))return g(r.stop)&&(w._queueHooks(c.elem,c.opts.queue).stop=r.stop.bind(r)),r;return w.map(u,pt,c),g(c.opts.start)&&c.opts.start.call(e,c),c.progress(c.opts.progress).done(c.opts.done,c.opts.complete).fail(c.opts.fail).always(c.opts.always),w.fx.timer(w.extend(l,{elem:e,anim:c,queue:c.opts.queue})),c}w.Animation=w.extend(dt,{tweeners:{"*":[function(e,t){var n=this.createTween(e,t);return ce(n.elem,e,ne.exec(t),n),n}]},tweener:function(e,t){g(e)?(t=e,e=["*"]):e=e.match(M);for(var n,r=0,i=e.length;r<i;r++)n=e[r],dt.tweeners[n]=dt.tweeners[n]||[],dt.tweeners[n].unshift(t)},prefilters:[function(e,t,n){var r,i,o,s,a,l,c,u,f="width"in t||"height"in t,p=this,d={},h=e.style,g=e.nodeType&&ae(e),m=G.get(e,"fxshow");for(r in n.queue||(null==(s=w._queueHooks(e,"fx")).unqueued&&(s.unqueued=0,a=s.empty.fire,s.empty.fire=function(){s.unqueued||a()}),s.unqueued++,p.always(function(){p.always(function(){s.unqueued--,w.queue(e,"fx").length||s.empty.fire()})})),t)if(i=t[r],at.test(i)){if(delete t[r],o=o||"toggle"===i,i===(g?"hide":"show")){if("show"!==i||!m||void 0===m[r])continue;g=!0}d[r]=m&&m[r]||w.style(e,r)}if((l=!w.isEmptyObject(t))||!w.isEmptyObject(d))for(r in f&&1===e.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(c=m&&m.display)&&(c=G.get(e,"display")),"none"===(u=w.css(e,"display"))&&(c?u=c:(fe([e],!0),c=e.style.display||c,u=w.css(e,"display"),fe([e]))),("inline"===u||"inline-block"===u&&null!=c)&&"none"===w.css(e,"float")&&(l||(p.done(function(){h.display=c}),null==c&&(u=h.display,c="none"===u?"":u)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",p.always(function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]})),l=!1,d)l||(m?"hidden"in m&&(g=m.hidden):m=G.access(e,"fxshow",{display:c}),o&&(m.hidden=!g),g&&fe([e],!0),p.done(function(){for(r in g||fe([e]),G.remove(e,"fxshow"),d)w.style(e,r,d[r])})),l=pt(g?m[r]:0,r,p),r in m||(m[r]=l.start,g&&(l.end=l.start,l.start=0))}],prefilter:function(e,t){t?dt.prefilters.unshift(e):dt.prefilters.push(e)}}),w.speed=function(e,t,n){var r=e&&"object"==typeof e?w.extend({},e):{complete:n||!n&&t||g(e)&&e,duration:e,easing:n&&t||t&&!g(t)&&t};return w.fx.off?r.duration=0:"number"!=typeof r.duration&&(r.duration in w.fx.speeds?r.duration=w.fx.speeds[r.duration]:r.duration=w.fx.speeds._default),null!=r.queue&&!0!==r.queue||(r.queue="fx"),r.old=r.complete,r.complete=function(){g(r.old)&&r.old.call(this),r.queue&&w.dequeue(this,r.queue)},r},w.fn.extend({fadeTo:function(e,t,n,r){return this.filter(ae).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(e,t,n,r){var i=w.isEmptyObject(e),o=w.speed(t,n,r),s=function(){var t=dt(this,w.extend({},e),o);(i||G.get(this,"finish"))&&t.stop(!0)};return s.finish=s,i||!1===o.queue?this.each(s):this.queue(o.queue,s)},stop:function(e,t,n){var r=function(e){var t=e.stop;delete e.stop,t(n)};return"string"!=typeof e&&(n=t,t=e,e=void 0),t&&!1!==e&&this.queue(e||"fx",[]),this.each(function(){var t=!0,i=null!=e&&e+"queueHooks",o=w.timers,s=G.get(this);if(i)s[i]&&s[i].stop&&r(s[i]);else for(i in s)s[i]&&s[i].stop&&lt.test(i)&&r(s[i]);for(i=o.length;i--;)o[i].elem!==this||null!=e&&o[i].queue!==e||(o[i].anim.stop(n),t=!1,o.splice(i,1));!t&&n||w.dequeue(this,e)})},finish:function(e){return!1!==e&&(e=e||"fx"),this.each(function(){var t,n=G.get(this),r=n[e+"queue"],i=n[e+"queueHooks"],o=w.timers,s=r?r.length:0;for(n.finish=!0,w.queue(this,e,[]),i&&i.stop&&i.stop.call(this,!0),t=o.length;t--;)o[t].elem===this&&o[t].queue===e&&(o[t].anim.stop(!0),o.splice(t,1));for(t=0;t<s;t++)r[t]&&r[t].finish&&r[t].finish.call(this);delete n.finish})}}),w.each(["toggle","show","hide"],function(e,t){var n=w.fn[t];w.fn[t]=function(e,r,i){return null==e||"boolean"==typeof e?n.apply(this,arguments):this.animate(ft(t,!0),e,r,i)}}),w.each({slideDown:ft("show"),slideUp:ft("hide"),slideToggle:ft("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,t){w.fn[e]=function(e,n,r){return this.animate(t,e,n,r)}}),w.timers=[],w.fx.tick=function(){var e,t=0,n=w.timers;for(rt=Date.now();t<n.length;t++)(e=n[t])()||n[t]!==e||n.splice(t--,1);n.length||w.fx.stop(),rt=void 0},w.fx.timer=function(e){w.timers.push(e),w.fx.start()},w.fx.interval=13,w.fx.start=function(){it||(it=!0,ct())},w.fx.stop=function(){it=null},w.fx.speeds={slow:600,fast:200,_default:400},w.fn.delay=function(t,n){return t=w.fx&&w.fx.speeds[t]||t,n=n||"fx",this.queue(n,function(n,r){var i=e.setTimeout(n,t);r.stop=function(){e.clearTimeout(i)}})},ot=r.createElement("input"),st=r.createElement("select").appendChild(r.createElement("option")),ot.type="checkbox",h.checkOn=""!==ot.value,h.optSelected=st.selected,(ot=r.createElement("input")).value="t",ot.type="radio",h.radioValue="t"===ot.value;var ht,gt=w.expr.attrHandle;w.fn.extend({attr:function(e,t){return F(this,w.attr,e,t,1<arguments.length)},removeAttr:function(e){return this.each(function(){w.removeAttr(this,e)})}}),w.extend({attr:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return void 0===e.getAttribute?w.prop(e,t,n):(1===o&&w.isXMLDoc(e)||(i=w.attrHooks[t.toLowerCase()]||(w.expr.match.bool.test(t)?ht:void 0)),void 0!==n?null===n?void w.removeAttr(e,t):i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:(e.setAttribute(t,n+""),n):i&&"get"in i&&null!==(r=i.get(e,t))?r:null==(r=w.find.attr(e,t))?void 0:r)},attrHooks:{type:{set:function(e,t){if(!h.radioValue&&"radio"===t&&A(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},removeAttr:function(e,t){var n,r=0,i=t&&t.match(M);if(i&&1===e.nodeType)for(;n=i[r++];)e.removeAttribute(n)}}),ht={set:function(e,t,n){return!1===t?w.removeAttr(e,n):e.setAttribute(n,n),n}},w.each(w.expr.match.bool.source.match(/\w+/g),function(e,t){var n=gt[t]||w.find.attr;gt[t]=function(e,t,r){var i,o,s=t.toLowerCase();return r||(o=gt[s],gt[s]=i,i=null!=n(e,t,r)?s:null,gt[s]=o),i}});var mt=/^(?:input|select|textarea|button)$/i,vt=/^(?:a|area)$/i;function yt(e){return(e.match(M)||[]).join(" ")}function bt(e){return e.getAttribute&&e.getAttribute("class")||""}function xt(e){return Array.isArray(e)?e:"string"==typeof e&&e.match(M)||[]}w.fn.extend({prop:function(e,t){return F(this,w.prop,e,t,1<arguments.length)},removeProp:function(e){return this.each(function(){delete this[w.propFix[e]||e]})}}),w.extend({prop:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&w.isXMLDoc(e)||(t=w.propFix[t]||t,i=w.propHooks[t]),void 0!==n?i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:e[t]=n:i&&"get"in i&&null!==(r=i.get(e,t))?r:e[t]},propHooks:{tabIndex:{get:function(e){var t=w.find.attr(e,"tabindex");return t?parseInt(t,10):mt.test(e.nodeName)||vt.test(e.nodeName)&&e.href?0:-1}}},propFix:{for:"htmlFor",class:"className"}}),h.optSelected||(w.propHooks.selected={get:function(e){var t=e.parentNode;return t&&t.parentNode&&t.parentNode.selectedIndex,null},set:function(e){var t=e.parentNode;t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex)}}),w.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){w.propFix[this.toLowerCase()]=this}),w.fn.extend({addClass:function(e){var t,n,r,i,o,s,a,l=0;if(g(e))return this.each(function(t){w(this).addClass(e.call(this,t,bt(this)))});if((t=xt(e)).length)for(;n=this[l++];)if(i=bt(n),r=1===n.nodeType&&" "+yt(i)+" "){for(s=0;o=t[s++];)r.indexOf(" "+o+" ")<0&&(r+=o+" ");i!==(a=yt(r))&&n.setAttribute("class",a)}return this},removeClass:function(e){var t,n,r,i,o,s,a,l=0;if(g(e))return this.each(function(t){w(this).removeClass(e.call(this,t,bt(this)))});if(!arguments.length)return this.attr("class","");if((t=xt(e)).length)for(;n=this[l++];)if(i=bt(n),r=1===n.nodeType&&" "+yt(i)+" "){for(s=0;o=t[s++];)for(;-1<r.indexOf(" "+o+" ");)r=r.replace(" "+o+" "," ");i!==(a=yt(r))&&n.setAttribute("class",a)}return this},toggleClass:function(e,t){var n=typeof e,r="string"===n||Array.isArray(e);return"boolean"==typeof t&&r?t?this.addClass(e):this.removeClass(e):g(e)?this.each(function(n){w(this).toggleClass(e.call(this,n,bt(this),t),t)}):this.each(function(){var t,i,o,s;if(r)for(i=0,o=w(this),s=xt(e);t=s[i++];)o.hasClass(t)?o.removeClass(t):o.addClass(t);else void 0!==e&&"boolean"!==n||((t=bt(this))&&G.set(this,"__className__",t),this.setAttribute&&this.setAttribute("class",t||!1===e?"":G.get(this,"__className__")||""))})},hasClass:function(e){var t,n,r=0;for(t=" "+e+" ";n=this[r++];)if(1===n.nodeType&&-1<(" "+yt(bt(n))+" ").indexOf(t))return!0;return!1}});var wt=/\r/g;w.fn.extend({val:function(e){var t,n,r,i=this[0];return arguments.length?(r=g(e),this.each(function(n){var i;1===this.nodeType&&(null==(i=r?e.call(this,n,w(this).val()):e)?i="":"number"==typeof i?i+="":Array.isArray(i)&&(i=w.map(i,function(e){return null==e?"":e+""})),(t=w.valHooks[this.type]||w.valHooks[this.nodeName.toLowerCase()])&&"set"in t&&void 0!==t.set(this,i,"value")||(this.value=i))})):i?(t=w.valHooks[i.type]||w.valHooks[i.nodeName.toLowerCase()])&&"get"in t&&void 0!==(n=t.get(i,"value"))?n:"string"==typeof(n=i.value)?n.replace(wt,""):null==n?"":n:void 0}}),w.extend({valHooks:{option:{get:function(e){var t=w.find.attr(e,"value");return null!=t?t:yt(w.text(e))}},select:{get:function(e){var t,n,r,i=e.options,o=e.selectedIndex,s="select-one"===e.type,a=s?null:[],l=s?o+1:i.length;for(r=o<0?l:s?o:0;r<l;r++)if(((n=i[r]).selected||r===o)&&!n.disabled&&(!n.parentNode.disabled||!A(n.parentNode,"optgroup"))){if(t=w(n).val(),s)return t;a.push(t)}return a},set:function(e,t){for(var n,r,i=e.options,o=w.makeArray(t),s=i.length;s--;)((r=i[s]).selected=-1<w.inArray(w.valHooks.option.get(r),o))&&(n=!0);return n||(e.selectedIndex=-1),o}}}}),w.each(["radio","checkbox"],function(){w.valHooks[this]={set:function(e,t){if(Array.isArray(t))return e.checked=-1<w.inArray(w(e).val(),t)}},h.checkOn||(w.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})}),h.focusin="onfocusin"in e;var Tt=/^(?:focusinfocus|focusoutblur)$/,Et=function(e){e.stopPropagation()};w.extend(w.event,{trigger:function(t,n,i,o){var s,a,l,c,u,p,d,h,v=[i||r],y=f.call(t,"type")?t.type:t,b=f.call(t,"namespace")?t.namespace.split("."):[];if(a=h=l=i=i||r,3!==i.nodeType&&8!==i.nodeType&&!Tt.test(y+w.event.triggered)&&(-1<y.indexOf(".")&&(y=(b=y.split(".")).shift(),b.sort()),u=y.indexOf(":")<0&&"on"+y,(t=t[w.expando]?t:new w.Event(y,"object"==typeof t&&t)).isTrigger=o?2:3,t.namespace=b.join("."),t.rnamespace=t.namespace?new RegExp("(^|\\.)"+b.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,t.result=void 0,t.target||(t.target=i),n=null==n?[t]:w.makeArray(n,[t]),d=w.event.special[y]||{},o||!d.trigger||!1!==d.trigger.apply(i,n))){if(!o&&!d.noBubble&&!m(i)){for(c=d.delegateType||y,Tt.test(c+y)||(a=a.parentNode);a;a=a.parentNode)v.push(a),l=a;l===(i.ownerDocument||r)&&v.push(l.defaultView||l.parentWindow||e)}for(s=0;(a=v[s++])&&!t.isPropagationStopped();)h=a,t.type=1<s?c:d.bindType||y,(p=(G.get(a,"events")||{})[t.type]&&G.get(a,"handle"))&&p.apply(a,n),(p=u&&a[u])&&p.apply&&V(a)&&(t.result=p.apply(a,n),!1===t.result&&t.preventDefault());return t.type=y,o||t.isDefaultPrevented()||d._default&&!1!==d._default.apply(v.pop(),n)||!V(i)||u&&g(i[y])&&!m(i)&&((l=i[u])&&(i[u]=null),w.event.triggered=y,t.isPropagationStopped()&&h.addEventListener(y,Et),i[y](),t.isPropagationStopped()&&h.removeEventListener(y,Et),w.event.triggered=void 0,l&&(i[u]=l)),t.result}},simulate:function(e,t,n){var r=w.extend(new w.Event,n,{type:e,isSimulated:!0});w.event.trigger(r,null,t)}}),w.fn.extend({trigger:function(e,t){return this.each(function(){w.event.trigger(e,t,this)})},triggerHandler:function(e,t){var n=this[0];if(n)return w.event.trigger(e,t,n,!0)}}),h.focusin||w.each({focus:"focusin",blur:"focusout"},function(e,t){var n=function(e){w.event.simulate(t,e.target,w.event.fix(e))};w.event.special[t]={setup:function(){var r=this.ownerDocument||this,i=G.access(r,t);i||r.addEventListener(e,n,!0),G.access(r,t,(i||0)+1)},teardown:function(){var r=this.ownerDocument||this,i=G.access(r,t)-1;i?G.access(r,t,i):(r.removeEventListener(e,n,!0),G.remove(r,t))}}});var Ct=e.location,St=Date.now(),Lt=/\?/;w.parseXML=function(t){var n;if(!t||"string"!=typeof t)return null;try{n=(new e.DOMParser).parseFromString(t,"text/xml")}catch(t){n=void 0}return n&&!n.getElementsByTagName("parsererror").length||w.error("Invalid XML: "+t),n};var kt=/\[\]$/,At=/\r?\n/g,Dt=/^(?:submit|button|image|reset|file)$/i,Nt=/^(?:input|select|textarea|keygen)/i;function Ht(e,t,n,r){var i;if(Array.isArray(t))w.each(t,function(t,i){n||kt.test(e)?r(e,i):Ht(e+"["+("object"==typeof i&&null!=i?t:"")+"]",i,n,r)});else if(n||"object"!==b(t))r(e,t);else for(i in t)Ht(e+"["+i+"]",t[i],n,r)}w.param=function(e,t){var n,r=[],i=function(e,t){var n=g(t)?t():t;r[r.length]=encodeURIComponent(e)+"="+encodeURIComponent(null==n?"":n)};if(null==e)return"";if(Array.isArray(e)||e.jquery&&!w.isPlainObject(e))w.each(e,function(){i(this.name,this.value)});else for(n in e)Ht(n,e[n],t,i);return r.join("&")},w.fn.extend({serialize:function(){return w.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=w.prop(this,"elements");return e?w.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!w(this).is(":disabled")&&Nt.test(this.nodeName)&&!Dt.test(e)&&(this.checked||!pe.test(e))}).map(function(e,t){var n=w(this).val();return null==n?null:Array.isArray(n)?w.map(n,function(e){return{name:t.name,value:e.replace(At,"\r\n")}}):{name:t.name,value:n.replace(At,"\r\n")}}).get()}});var jt=/%20/g,Wt=/#.*$/,Ot=/([?&])_=[^&]*/,Rt=/^(.*?):[ \t]*([^\r\n]*)$/gm,Mt=/^(?:GET|HEAD)$/,Pt=/^\/\//,qt={},Yt={},Xt="*/".concat("*"),It=r.createElement("a");function Bt(e){return function(t,n){"string"!=typeof t&&(n=t,t="*");var r,i=0,o=t.toLowerCase().match(M)||[];if(g(n))for(;r=o[i++];)"+"===r[0]?(r=r.slice(1)||"*",(e[r]=e[r]||[]).unshift(n)):(e[r]=e[r]||[]).push(n)}}function Ft(e,t,n,r){var i={},o=e===Yt;function s(a){var l;return i[a]=!0,w.each(e[a]||[],function(e,a){var c=a(t,n,r);return"string"!=typeof c||o||i[c]?o?!(l=c):void 0:(t.dataTypes.unshift(c),s(c),!1)}),l}return s(t.dataTypes[0])||!i["*"]&&s("*")}function $t(e,t){var n,r,i=w.ajaxSettings.flatOptions||{};for(n in t)void 0!==t[n]&&((i[n]?e:r||(r={}))[n]=t[n]);return r&&w.extend(!0,e,r),e}It.href=Ct.href,w.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Ct.href,type:"GET",isLocal:/^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Ct.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Xt,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":w.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?$t($t(e,w.ajaxSettings),t):$t(w.ajaxSettings,e)},ajaxPrefilter:Bt(qt),ajaxTransport:Bt(Yt),ajax:function(t,n){"object"==typeof t&&(n=t,t=void 0),n=n||{};var i,o,s,a,l,c,u,f,p,d,h=w.ajaxSetup({},n),g=h.context||h,m=h.context&&(g.nodeType||g.jquery)?w(g):w.event,v=w.Deferred(),y=w.Callbacks("once memory"),b=h.statusCode||{},x={},T={},E="canceled",C={readyState:0,getResponseHeader:function(e){var t;if(u){if(!a)for(a={};t=Rt.exec(s);)a[t[1].toLowerCase()+" "]=(a[t[1].toLowerCase()+" "]||[]).concat(t[2]);t=a[e.toLowerCase()+" "]}return null==t?null:t.join(", ")},getAllResponseHeaders:function(){return u?s:null},setRequestHeader:function(e,t){return null==u&&(e=T[e.toLowerCase()]=T[e.toLowerCase()]||e,x[e]=t),this},overrideMimeType:function(e){return null==u&&(h.mimeType=e),this},statusCode:function(e){var t;if(e)if(u)C.always(e[C.status]);else for(t in e)b[t]=[b[t],e[t]];return this},abort:function(e){var t=e||E;return i&&i.abort(t),S(0,t),this}};if(v.promise(C),h.url=((t||h.url||Ct.href)+"").replace(Pt,Ct.protocol+"//"),h.type=n.method||n.type||h.method||h.type,h.dataTypes=(h.dataType||"*").toLowerCase().match(M)||[""],null==h.crossDomain){c=r.createElement("a");try{c.href=h.url,c.href=c.href,h.crossDomain=It.protocol+"//"+It.host!=c.protocol+"//"+c.host}catch(t){h.crossDomain=!0}}if(h.data&&h.processData&&"string"!=typeof h.data&&(h.data=w.param(h.data,h.traditional)),Ft(qt,h,n,C),u)return C;for(p in(f=w.event&&h.global)&&0==w.active++&&w.event.trigger("ajaxStart"),h.type=h.type.toUpperCase(),h.hasContent=!Mt.test(h.type),o=h.url.replace(Wt,""),h.hasContent?h.data&&h.processData&&0===(h.contentType||"").indexOf("application/x-www-form-urlencoded")&&(h.data=h.data.replace(jt,"+")):(d=h.url.slice(o.length),h.data&&(h.processData||"string"==typeof h.data)&&(o+=(Lt.test(o)?"&":"?")+h.data,delete h.data),!1===h.cache&&(o=o.replace(Ot,"$1"),d=(Lt.test(o)?"&":"?")+"_="+St+++d),h.url=o+d),h.ifModified&&(w.lastModified[o]&&C.setRequestHeader("If-Modified-Since",w.lastModified[o]),w.etag[o]&&C.setRequestHeader("If-None-Match",w.etag[o])),(h.data&&h.hasContent&&!1!==h.contentType||n.contentType)&&C.setRequestHeader("Content-Type",h.contentType),C.setRequestHeader("Accept",h.dataTypes[0]&&h.accepts[h.dataTypes[0]]?h.accepts[h.dataTypes[0]]+("*"!==h.dataTypes[0]?", "+Xt+"; q=0.01":""):h.accepts["*"]),h.headers)C.setRequestHeader(p,h.headers[p]);if(h.beforeSend&&(!1===h.beforeSend.call(g,C,h)||u))return C.abort();if(E="abort",y.add(h.complete),C.done(h.success),C.fail(h.error),i=Ft(Yt,h,n,C)){if(C.readyState=1,f&&m.trigger("ajaxSend",[C,h]),u)return C;h.async&&0<h.timeout&&(l=e.setTimeout(function(){C.abort("timeout")},h.timeout));try{u=!1,i.send(x,S)}catch(t){if(u)throw t;S(-1,t)}}else S(-1,"No Transport");function S(t,n,r,a){var c,p,d,x,T,E=n;u||(u=!0,l&&e.clearTimeout(l),i=void 0,s=a||"",C.readyState=0<t?4:0,c=200<=t&&t<300||304===t,r&&(x=function(e,t,n){for(var r,i,o,s,a=e.contents,l=e.dataTypes;"*"===l[0];)l.shift(),void 0===r&&(r=e.mimeType||t.getResponseHeader("Content-Type"));if(r)for(i in a)if(a[i]&&a[i].test(r)){l.unshift(i);break}if(l[0]in n)o=l[0];else{for(i in n){if(!l[0]||e.converters[i+" "+l[0]]){o=i;break}s||(s=i)}o=o||s}if(o)return o!==l[0]&&l.unshift(o),n[o]}(h,C,r)),x=function(e,t,n,r){var i,o,s,a,l,c={},u=e.dataTypes.slice();if(u[1])for(s in e.converters)c[s.toLowerCase()]=e.converters[s];for(o=u.shift();o;)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!l&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),l=o,o=u.shift())if("*"===o)o=l;else if("*"!==l&&l!==o){if(!(s=c[l+" "+o]||c["* "+o]))for(i in c)if((a=i.split(" "))[1]===o&&(s=c[l+" "+a[0]]||c["* "+a[0]])){!0===s?s=c[i]:!0!==c[i]&&(o=a[0],u.unshift(a[1]));break}if(!0!==s)if(s&&e.throws)t=s(t);else try{t=s(t)}catch(e){return{state:"parsererror",error:s?e:"No conversion from "+l+" to "+o}}}return{state:"success",data:t}}(h,x,C,c),c?(h.ifModified&&((T=C.getResponseHeader("Last-Modified"))&&(w.lastModified[o]=T),(T=C.getResponseHeader("etag"))&&(w.etag[o]=T)),204===t||"HEAD"===h.type?E="nocontent":304===t?E="notmodified":(E=x.state,p=x.data,c=!(d=x.error))):(d=E,!t&&E||(E="error",t<0&&(t=0))),C.status=t,C.statusText=(n||E)+"",c?v.resolveWith(g,[p,E,C]):v.rejectWith(g,[C,E,d]),C.statusCode(b),b=void 0,f&&m.trigger(c?"ajaxSuccess":"ajaxError",[C,h,c?p:d]),y.fireWith(g,[C,E]),f&&(m.trigger("ajaxComplete",[C,h]),--w.active||w.event.trigger("ajaxStop")))}return C},getJSON:function(e,t,n){return w.get(e,t,n,"json")},getScript:function(e,t){return w.get(e,void 0,t,"script")}}),w.each(["get","post"],function(e,t){w[t]=function(e,n,r,i){return g(n)&&(i=i||r,r=n,n=void 0),w.ajax(w.extend({url:e,type:t,dataType:i,data:n,success:r},w.isPlainObject(e)&&e))}}),w._evalUrl=function(e,t){return w.ajax({url:e,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,converters:{"text script":function(){}},dataFilter:function(e){w.globalEval(e,t)}})},w.fn.extend({wrapAll:function(e){var t;return this[0]&&(g(e)&&(e=e.call(this[0])),t=w(e,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){for(var e=this;e.firstElementChild;)e=e.firstElementChild;return e}).append(this)),this},wrapInner:function(e){return g(e)?this.each(function(t){w(this).wrapInner(e.call(this,t))}):this.each(function(){var t=w(this),n=t.contents();n.length?n.wrapAll(e):t.append(e)})},wrap:function(e){var t=g(e);return this.each(function(n){w(this).wrapAll(t?e.call(this,n):e)})},unwrap:function(e){return this.parent(e).not("body").each(function(){w(this).replaceWith(this.childNodes)}),this}}),w.expr.pseudos.hidden=function(e){return!w.expr.pseudos.visible(e)},w.expr.pseudos.visible=function(e){return!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},w.ajaxSettings.xhr=function(){try{return new e.XMLHttpRequest}catch(e){}};var _t={0:200,1223:204},Ut=w.ajaxSettings.xhr();h.cors=!!Ut&&"withCredentials"in Ut,h.ajax=Ut=!!Ut,w.ajaxTransport(function(t){var n,r;if(h.cors||Ut&&!t.crossDomain)return{send:function(i,o){var s,a=t.xhr();if(a.open(t.type,t.url,t.async,t.username,t.password),t.xhrFields)for(s in t.xhrFields)a[s]=t.xhrFields[s];for(s in t.mimeType&&a.overrideMimeType&&a.overrideMimeType(t.mimeType),t.crossDomain||i["X-Requested-With"]||(i["X-Requested-With"]="XMLHttpRequest"),i)a.setRequestHeader(s,i[s]);n=function(e){return function(){n&&(n=r=a.onload=a.onerror=a.onabort=a.ontimeout=a.onreadystatechange=null,"abort"===e?a.abort():"error"===e?"number"!=typeof a.status?o(0,"error"):o(a.status,a.statusText):o(_t[a.status]||a.status,a.statusText,"text"!==(a.responseType||"text")||"string"!=typeof a.responseText?{binary:a.response}:{text:a.responseText},a.getAllResponseHeaders()))}},a.onload=n(),r=a.onerror=a.ontimeout=n("error"),void 0!==a.onabort?a.onabort=r:a.onreadystatechange=function(){4===a.readyState&&e.setTimeout(function(){n&&r()})},n=n("abort");try{a.send(t.hasContent&&t.data||null)}catch(i){if(n)throw i}},abort:function(){n&&n()}}}),w.ajaxPrefilter(function(e){e.crossDomain&&(e.contents.script=!1)}),w.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(e){return w.globalEval(e),e}}}),w.ajaxPrefilter("script",function(e){void 0===e.cache&&(e.cache=!1),e.crossDomain&&(e.type="GET")}),w.ajaxTransport("script",function(e){var t,n;if(e.crossDomain||e.scriptAttrs)return{send:function(i,o){t=w("<script>").attr(e.scriptAttrs||{}).prop({charset:e.scriptCharset,src:e.url}).on("load error",n=function(e){t.remove(),n=null,e&&o("error"===e.type?404:200,e.type)}),r.head.appendChild(t[0])},abort:function(){n&&n()}}});var zt,Vt=[],Kt=/(=)\?(?=&|$)|\?\?/;w.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Vt.pop()||w.expando+"_"+St++;return this[e]=!0,e}}),w.ajaxPrefilter("json jsonp",function(t,n,r){var i,o,s,a=!1!==t.jsonp&&(Kt.test(t.url)?"url":"string"==typeof t.data&&0===(t.contentType||"").indexOf("application/x-www-form-urlencoded")&&Kt.test(t.data)&&"data");if(a||"jsonp"===t.dataTypes[0])return i=t.jsonpCallback=g(t.jsonpCallback)?t.jsonpCallback():t.jsonpCallback,a?t[a]=t[a].replace(Kt,"$1"+i):!1!==t.jsonp&&(t.url+=(Lt.test(t.url)?"&":"?")+t.jsonp+"="+i),t.converters["script json"]=function(){return s||w.error(i+" was not called"),s[0]},t.dataTypes[0]="json",o=e[i],e[i]=function(){s=arguments},r.always(function(){void 0===o?w(e).removeProp(i):e[i]=o,t[i]&&(t.jsonpCallback=n.jsonpCallback,Vt.push(i)),s&&g(o)&&o(s[0]),s=o=void 0}),"script"}),h.createHTMLDocument=((zt=r.implementation.createHTMLDocument("").body).innerHTML="<form></form><form></form>",2===zt.childNodes.length),w.parseHTML=function(e,t,n){return"string"!=typeof e?[]:("boolean"==typeof t&&(n=t,t=!1),t||(h.createHTMLDocument?((i=(t=r.implementation.createHTMLDocument("")).createElement("base")).href=r.location.href,t.head.appendChild(i)):t=r),s=!n&&[],(o=D.exec(e))?[t.createElement(o[1])]:(o=we([e],t,s),s&&s.length&&w(s).remove(),w.merge([],o.childNodes)));var i,o,s},w.fn.load=function(e,t,n){var r,i,o,s=this,a=e.indexOf(" ");return-1<a&&(r=yt(e.slice(a)),e=e.slice(0,a)),g(t)?(n=t,t=void 0):t&&"object"==typeof t&&(i="POST"),0<s.length&&w.ajax({url:e,type:i||"GET",dataType:"html",data:t}).done(function(e){o=arguments,s.html(r?w("<div>").append(w.parseHTML(e)).find(r):e)}).always(n&&function(e,t){s.each(function(){n.apply(this,o||[e.responseText,t,e])})}),this},w.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){w.fn[t]=function(e){return this.on(t,e)}}),w.expr.pseudos.animated=function(e){return w.grep(w.timers,function(t){return e===t.elem}).length},w.offset={setOffset:function(e,t,n){var r,i,o,s,a,l,c=w.css(e,"position"),u=w(e),f={};"static"===c&&(e.style.position="relative"),a=u.offset(),o=w.css(e,"top"),l=w.css(e,"left"),("absolute"===c||"fixed"===c)&&-1<(o+l).indexOf("auto")?(s=(r=u.position()).top,i=r.left):(s=parseFloat(o)||0,i=parseFloat(l)||0),g(t)&&(t=t.call(e,n,w.extend({},a))),null!=t.top&&(f.top=t.top-a.top+s),null!=t.left&&(f.left=t.left-a.left+i),"using"in t?t.using.call(e,f):u.css(f)}},w.fn.extend({offset:function(e){if(arguments.length)return void 0===e?this:this.each(function(t){w.offset.setOffset(this,e,t)});var t,n,r=this[0];return r?r.getClientRects().length?(t=r.getBoundingClientRect(),n=r.ownerDocument.defaultView,{top:t.top+n.pageYOffset,left:t.left+n.pageXOffset}):{top:0,left:0}:void 0},position:function(){if(this[0]){var e,t,n,r=this[0],i={top:0,left:0};if("fixed"===w.css(r,"position"))t=r.getBoundingClientRect();else{for(t=this.offset(),n=r.ownerDocument,e=r.offsetParent||n.documentElement;e&&(e===n.body||e===n.documentElement)&&"static"===w.css(e,"position");)e=e.parentNode;e&&e!==r&&1===e.nodeType&&((i=w(e).offset()).top+=w.css(e,"borderTopWidth",!0),i.left+=w.css(e,"borderLeftWidth",!0))}return{top:t.top-i.top-w.css(r,"marginTop",!0),left:t.left-i.left-w.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){for(var e=this.offsetParent;e&&"static"===w.css(e,"position");)e=e.offsetParent;return e||ie})}}),w.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(e,t){var n="pageYOffset"===t;w.fn[e]=function(r){return F(this,function(e,r,i){var o;if(m(e)?o=e:9===e.nodeType&&(o=e.defaultView),void 0===i)return o?o[t]:e[r];o?o.scrollTo(n?o.pageXOffset:i,n?i:o.pageYOffset):e[r]=i},e,r,arguments.length)}}),w.each(["top","left"],function(e,t){w.cssHooks[t]=$e(h.pixelPosition,function(e,n){if(n)return n=Fe(e,t),Xe.test(n)?w(e).position()[t]+"px":n})}),w.each({Height:"height",Width:"width"},function(e,t){w.each({padding:"inner"+e,content:t,"":"outer"+e},function(n,r){w.fn[r]=function(i,o){var s=arguments.length&&(n||"boolean"!=typeof i),a=n||(!0===i||!0===o?"margin":"border");return F(this,function(t,n,i){var o;return m(t)?0===r.indexOf("outer")?t["inner"+e]:t.document.documentElement["client"+e]:9===t.nodeType?(o=t.documentElement,Math.max(t.body["scroll"+e],o["scroll"+e],t.body["offset"+e],o["offset"+e],o["client"+e])):void 0===i?w.css(t,n,a):w.style(t,n,i,a)},t,s?i:void 0,s)}})}),w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(e,t){w.fn[t]=function(e,n){return 0<arguments.length?this.on(t,null,e,n):this.trigger(t)}}),w.fn.extend({hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),w.fn.extend({bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)}}),w.proxy=function(e,t){var n,r,i;if("string"==typeof t&&(n=e[t],t=e,e=n),g(e))return r=o.call(arguments,2),(i=function(){return e.apply(t||this,r.concat(o.call(arguments)))}).guid=e.guid=e.guid||w.guid++,i},w.holdReady=function(e){e?w.readyWait++:w.ready(!0)},w.isArray=Array.isArray,w.parseJSON=JSON.parse,w.nodeName=A,w.isFunction=g,w.isWindow=m,w.camelCase=z,w.type=b,w.now=Date.now,w.isNumeric=function(e){var t=w.type(e);return("number"===t||"string"===t)&&!isNaN(e-parseFloat(e))},"function"==typeof define&&define.amd&&define("jquery",[],function(){return w});var Gt=e.jQuery,Qt=e.$;return w.noConflict=function(t){return e.$===w&&(e.$=Qt),t&&e.jQuery===w&&(e.jQuery=Gt),w},t||(e.jQuery=e.$=w),w}),function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):e.Popper=t()}(this,function(){"use strict";function e(e){return e&&"[object Function]"==={}.toString.call(e)}function t(e,t){if(1!==e.nodeType)return[];var n=e.ownerDocument.defaultView.getComputedStyle(e,null);return t?n[t]:n}function n(e){return"HTML"===e.nodeName?e:e.parentNode||e.host}function r(e){if(!e)return document.body;switch(e.nodeName){case"HTML":case"BODY":return e.ownerDocument.body;case"#document":return e.body}var i=t(e),o=i.overflow,s=i.overflowX,a=i.overflowY;return/(auto|scroll|overlay)/.test(o+a+s)?e:r(n(e))}function i(e){return 11===e?z:10===e?V:z||V}function o(e){if(!e)return document.documentElement;for(var n=i(10)?document.body:null,r=e.offsetParent||null;r===n&&e.nextElementSibling;)r=(e=e.nextElementSibling).offsetParent;var s=r&&r.nodeName;return s&&"BODY"!==s&&"HTML"!==s?-1!==["TH","TD","TABLE"].indexOf(r.nodeName)&&"static"===t(r,"position")?o(r):r:e?e.ownerDocument.documentElement:document.documentElement}function s(e){return null===e.parentNode?e:s(e.parentNode)}function a(e,t){if(!(e&&e.nodeType&&t&&t.nodeType))return document.documentElement;var n=e.compareDocumentPosition(t)&Node.DOCUMENT_POSITION_FOLLOWING,r=n?e:t,i=n?t:e,l=document.createRange();l.setStart(r,0),l.setEnd(i,0);var c=l.commonAncestorContainer;if(e!==c&&t!==c||r.contains(i))return function(e){var t=e.nodeName;return"BODY"!==t&&("HTML"===t||o(e.firstElementChild)===e)}(c)?c:o(c);var u=s(e);return u.host?a(u.host,t):a(e,s(t).host)}function l(e){var t="top"===(1<arguments.length&&void 0!==arguments[1]?arguments[1]:"top")?"scrollTop":"scrollLeft",n=e.nodeName;if("BODY"===n||"HTML"===n){var r=e.ownerDocument.documentElement;return(e.ownerDocument.scrollingElement||r)[t]}return e[t]}function c(e,t){var n=2<arguments.length&&void 0!==arguments[2]&&arguments[2],r=l(t,"top"),i=l(t,"left"),o=n?-1:1;return e.top+=r*o,e.bottom+=r*o,e.left+=i*o,e.right+=i*o,e}function u(e,t){var n="x"===t?"Left":"Top",r="Left"==n?"Right":"Bottom";return parseFloat(e["border"+n+"Width"],10)+parseFloat(e["border"+r+"Width"],10)}function f(e,t,n,r){return I(t["offset"+e],t["scroll"+e],n["client"+e],n["offset"+e],n["scroll"+e],i(10)?parseInt(n["offset"+e])+parseInt(r["margin"+("Height"===e?"Top":"Left")])+parseInt(r["margin"+("Height"===e?"Bottom":"Right")]):0)}function p(e){var t=e.body,n=e.documentElement,r=i(10)&&getComputedStyle(n);return{height:f("Height",t,n,r),width:f("Width",t,n,r)}}function d(e){return J({},e,{right:e.left+e.width,bottom:e.top+e.height})}function h(e){var n={};try{if(i(10)){n=e.getBoundingClientRect();var r=l(e,"top"),o=l(e,"left");n.top+=r,n.left+=o,n.bottom+=r,n.right+=o}else n=e.getBoundingClientRect()}catch(e){}var s={left:n.left,top:n.top,width:n.right-n.left,height:n.bottom-n.top},a="HTML"===e.nodeName?p(e.ownerDocument):{},c=a.width||e.clientWidth||s.right-s.left,f=a.height||e.clientHeight||s.bottom-s.top,h=e.offsetWidth-c,g=e.offsetHeight-f;if(h||g){var m=t(e);h-=u(m,"x"),g-=u(m,"y"),s.width-=h,s.height-=g}return d(s)}function g(e,n){var o=2<arguments.length&&void 0!==arguments[2]&&arguments[2],s=i(10),a="HTML"===n.nodeName,l=h(e),u=h(n),f=r(e),p=t(n),g=parseFloat(p.borderTopWidth,10),m=parseFloat(p.borderLeftWidth,10);o&&a&&(u.top=I(u.top,0),u.left=I(u.left,0));var v=d({top:l.top-u.top-g,left:l.left-u.left-m,width:l.width,height:l.height});if(v.marginTop=0,v.marginLeft=0,!s&&a){var y=parseFloat(p.marginTop,10),b=parseFloat(p.marginLeft,10);v.top-=g-y,v.bottom-=g-y,v.left-=m-b,v.right-=m-b,v.marginTop=y,v.marginLeft=b}return(s&&!o?n.contains(f):n===f&&"BODY"!==f.nodeName)&&(v=c(v,n)),v}function m(e){var t=1<arguments.length&&void 0!==arguments[1]&&arguments[1],n=e.ownerDocument.documentElement,r=g(e,n),i=I(n.clientWidth,window.innerWidth||0),o=I(n.clientHeight,window.innerHeight||0),s=t?0:l(n),a=t?0:l(n,"left");return d({top:s-r.top+r.marginTop,left:a-r.left+r.marginLeft,width:i,height:o})}function v(e){var r=e.nodeName;return"BODY"!==r&&"HTML"!==r&&("fixed"===t(e,"position")||v(n(e)))}function y(e){if(!e||!e.parentElement||i())return document.documentElement;for(var n=e.parentElement;n&&"none"===t(n,"transform");)n=n.parentElement;return n||document.documentElement}function b(e,t,i,o){var s=4<arguments.length&&void 0!==arguments[4]&&arguments[4],l={top:0,left:0},c=s?y(e):a(e,t);if("viewport"===o)l=m(c,s);else{var u;"scrollParent"===o?"BODY"===(u=r(n(t))).nodeName&&(u=e.ownerDocument.documentElement):u="window"===o?e.ownerDocument.documentElement:o;var f=g(u,c,s);if("HTML"!==u.nodeName||v(c))l=f;else{var d=p(e.ownerDocument),h=d.height,b=d.width;l.top+=f.top-f.marginTop,l.bottom=h+f.top,l.left+=f.left-f.marginLeft,l.right=b+f.left}}var x="number"==typeof(i=i||0);return l.left+=x?i:i.left||0,l.top+=x?i:i.top||0,l.right-=x?i:i.right||0,l.bottom-=x?i:i.bottom||0,l}function x(e){return e.width*e.height}function w(e,t,n,r,i){var o=5<arguments.length&&void 0!==arguments[5]?arguments[5]:0;if(-1===e.indexOf("auto"))return e;var s=b(n,r,o,i),a={top:{width:s.width,height:t.top-s.top},right:{width:s.right-t.right,height:s.height},bottom:{width:s.width,height:s.bottom-t.bottom},left:{width:t.left-s.left,height:s.height}},l=Object.keys(a).map(function(e){return J({key:e},a[e],{area:x(a[e])})}).sort(function(e,t){return t.area-e.area}),c=l.filter(function(e){var t=e.width,r=e.height;return t>=n.clientWidth&&r>=n.clientHeight}),u=0<c.length?c[0].key:l[0].key,f=e.split("-")[1];return u+(f?"-"+f:"")}function T(e,t,n){var r=3<arguments.length&&void 0!==arguments[3]?arguments[3]:null;return g(n,r?y(t):a(t,n),r)}function E(e){var t=e.ownerDocument.defaultView.getComputedStyle(e),n=parseFloat(t.marginTop||0)+parseFloat(t.marginBottom||0),r=parseFloat(t.marginLeft||0)+parseFloat(t.marginRight||0);return{width:e.offsetWidth+r,height:e.offsetHeight+n}}function C(e){var t={left:"right",right:"left",bottom:"top",top:"bottom"};return e.replace(/left|right|bottom|top/g,function(e){return t[e]})}function S(e,t,n){n=n.split("-")[0];var r=E(e),i={width:r.width,height:r.height},o=-1!==["right","left"].indexOf(n),s=o?"top":"left",a=o?"left":"top",l=o?"height":"width",c=o?"width":"height";return i[s]=t[s]+t[l]/2-r[l]/2,i[a]=n===a?t[a]-r[c]:t[C(a)],i}function L(e,t){return Array.prototype.find?e.find(t):e.filter(t)[0]}function k(t,n,r){return(void 0===r?t:t.slice(0,function(e,t,n){if(Array.prototype.findIndex)return e.findIndex(function(e){return e[t]===n});var r=L(e,function(e){return e[t]===n});return e.indexOf(r)}(t,"name",r))).forEach(function(t){t.function&&console.warn("`modifier.function` is deprecated, use `modifier.fn`!");var r=t.function||t.fn;t.enabled&&e(r)&&(n.offsets.popper=d(n.offsets.popper),n.offsets.reference=d(n.offsets.reference),n=r(n,t))}),n}function A(e,t){return e.some(function(e){var n=e.name;return e.enabled&&n===t})}function D(e){for(var t=[!1,"ms","Webkit","Moz","O"],n=e.charAt(0).toUpperCase()+e.slice(1),r=0;r<t.length;r++){var i=t[r],o=i?""+i+n:e;if(void 0!==document.body.style[o])return o}return null}function N(e){var t=e.ownerDocument;return t?t.defaultView:window}function H(e,t,n,i){n.updateBound=i,N(e).addEventListener("resize",n.updateBound,{passive:!0});var o=r(e);return function e(t,n,i,o){var s="BODY"===t.nodeName,a=s?t.ownerDocument.defaultView:t;a.addEventListener(n,i,{passive:!0}),s||e(r(a.parentNode),n,i,o),o.push(a)}(o,"scroll",n.updateBound,n.scrollParents),n.scrollElement=o,n.eventsEnabled=!0,n}function j(){var e,t;this.state.eventsEnabled&&(cancelAnimationFrame(this.scheduleUpdate),this.state=(e=this.reference,t=this.state,N(e).removeEventListener("resize",t.updateBound),t.scrollParents.forEach(function(e){e.removeEventListener("scroll",t.updateBound)}),t.updateBound=null,t.scrollParents=[],t.scrollElement=null,t.eventsEnabled=!1,t))}function W(e){return""!==e&&!isNaN(parseFloat(e))&&isFinite(e)}function O(e,t){Object.keys(t).forEach(function(n){var r="";-1!==["width","height","top","right","bottom","left"].indexOf(n)&&W(t[n])&&(r="px"),e.style[n]=t[n]+r})}function R(e,t,n){var r=L(e,function(e){return e.name===t}),i=!!r&&e.some(function(e){return e.name===n&&e.enabled&&e.order<r.order});if(!i){var o="`"+t+"`";console.warn("`"+n+"` modifier is required by "+o+" modifier in order to work, be sure to include it before "+o+"!")}return i}function M(e){var t=1<arguments.length&&void 0!==arguments[1]&&arguments[1],n=te.indexOf(e),r=te.slice(n+1).concat(te.slice(0,n));return t?r.reverse():r}function P(e,t,n,r){var i=[0,0],o=-1!==["right","left"].indexOf(r),s=e.split(/(\+|\-)/).map(function(e){return e.trim()}),a=s.indexOf(L(s,function(e){return-1!==e.search(/,|\s/)}));s[a]&&-1===s[a].indexOf(",")&&console.warn("Offsets separated by white space(s) are deprecated, use a comma (,) instead.");var l=/\s*,\s*|\s+/,c=-1===a?[s]:[s.slice(0,a).concat([s[a].split(l)[0]]),[s[a].split(l)[1]].concat(s.slice(a+1))];return(c=c.map(function(e,r){var i=(1===r?!o:o)?"height":"width",s=!1;return e.reduce(function(e,t){return""===e[e.length-1]&&-1!==["+","-"].indexOf(t)?(e[e.length-1]=t,s=!0,e):s?(e[e.length-1]+=t,s=!1,e):e.concat(t)},[]).map(function(e){return function(e,t,n,r){var i=e.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),o=+i[1],s=i[2];if(!o)return e;if(0===s.indexOf("%")){var a;switch(s){case"%p":a=n;break;case"%":case"%r":default:a=r}return d(a)[t]/100*o}return"vh"===s||"vw"===s?("vh"===s?I(document.documentElement.clientHeight,window.innerHeight||0):I(document.documentElement.clientWidth,window.innerWidth||0))/100*o:o}(e,i,t,n)})})).forEach(function(e,t){e.forEach(function(n,r){W(n)&&(i[t]+=n*("-"===e[r-1]?-1:1))})}),i}for(var q=Math.min,Y=Math.floor,X=Math.round,I=Math.max,B="undefined"!=typeof window&&"undefined"!=typeof document,F=["Edge","Trident","Firefox"],$=0,_=0;_<F.length;_+=1)if(B&&0<=navigator.userAgent.indexOf(F[_])){$=1;break}var U=B&&window.Promise?function(e){var t=!1;return function(){t||(t=!0,window.Promise.resolve().then(function(){t=!1,e()}))}}:function(e){var t=!1;return function(){t||(t=!0,setTimeout(function(){t=!1,e()},$))}},z=B&&!(!window.MSInputMethodContext||!document.documentMode),V=B&&/MSIE 10/.test(navigator.userAgent),K=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")},G=function(){function e(e,t){for(var n,r=0;r<t.length;r++)(n=t[r]).enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}return function(t,n,r){return n&&e(t.prototype,n),r&&e(t,r),t}}(),Q=function(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e},J=Object.assign||function(e){for(var t,n=1;n<arguments.length;n++)for(var r in t=arguments[n])Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r]);return e},Z=B&&/Firefox/i.test(navigator.userAgent),ee=["auto-start","auto","auto-end","top-start","top","top-end","right-start","right","right-end","bottom-end","bottom","bottom-start","left-end","left","left-start"],te=ee.slice(3),ne="flip",re="clockwise",ie="counterclockwise",oe=function(){function t(n,r){var i=this,o=2<arguments.length&&void 0!==arguments[2]?arguments[2]:{};K(this,t),this.scheduleUpdate=function(){return requestAnimationFrame(i.update)},this.update=U(this.update.bind(this)),this.options=J({},t.Defaults,o),this.state={isDestroyed:!1,isCreated:!1,scrollParents:[]},this.reference=n&&n.jquery?n[0]:n,this.popper=r&&r.jquery?r[0]:r,this.options.modifiers={},Object.keys(J({},t.Defaults.modifiers,o.modifiers)).forEach(function(e){i.options.modifiers[e]=J({},t.Defaults.modifiers[e]||{},o.modifiers?o.modifiers[e]:{})}),this.modifiers=Object.keys(this.options.modifiers).map(function(e){return J({name:e},i.options.modifiers[e])}).sort(function(e,t){return e.order-t.order}),this.modifiers.forEach(function(t){t.enabled&&e(t.onLoad)&&t.onLoad(i.reference,i.popper,i.options,t,i.state)}),this.update();var s=this.options.eventsEnabled;s&&this.enableEventListeners(),this.state.eventsEnabled=s}return G(t,[{key:"update",value:function(){return function(){if(!this.state.isDestroyed){var e={instance:this,styles:{},arrowStyles:{},attributes:{},flipped:!1,offsets:{}};e.offsets.reference=T(this.state,this.popper,this.reference,this.options.positionFixed),e.placement=w(this.options.placement,e.offsets.reference,this.popper,this.reference,this.options.modifiers.flip.boundariesElement,this.options.modifiers.flip.padding),e.originalPlacement=e.placement,e.positionFixed=this.options.positionFixed,e.offsets.popper=S(this.popper,e.offsets.reference,e.placement),e.offsets.popper.position=this.options.positionFixed?"fixed":"absolute",e=k(this.modifiers,e),this.state.isCreated?this.options.onUpdate(e):(this.state.isCreated=!0,this.options.onCreate(e))}}.call(this)}},{key:"destroy",value:function(){return function(){return this.state.isDestroyed=!0,A(this.modifiers,"applyStyle")&&(this.popper.removeAttribute("x-placement"),this.popper.style.position="",this.popper.style.top="",this.popper.style.left="",this.popper.style.right="",this.popper.style.bottom="",this.popper.style.willChange="",this.popper.style[D("transform")]=""),this.disableEventListeners(),this.options.removeOnDestroy&&this.popper.parentNode.removeChild(this.popper),this}.call(this)}},{key:"enableEventListeners",value:function(){return function(){this.state.eventsEnabled||(this.state=H(this.reference,this.options,this.state,this.scheduleUpdate))}.call(this)}},{key:"disableEventListeners",value:function(){return j.call(this)}}]),t}();return oe.Utils=("undefined"==typeof window?global:window).PopperUtils,oe.placements=ee,oe.Defaults={placement:"bottom",positionFixed:!1,eventsEnabled:!0,removeOnDestroy:!1,onCreate:function(){},onUpdate:function(){},modifiers:{shift:{order:100,enabled:!0,fn:function(e){var t=e.placement,n=t.split("-")[0],r=t.split("-")[1];if(r){var i=e.offsets,o=i.reference,s=i.popper,a=-1!==["bottom","top"].indexOf(n),l=a?"left":"top",c=a?"width":"height",u={start:Q({},l,o[l]),end:Q({},l,o[l]+o[c]-s[c])};e.offsets.popper=J({},s,u[r])}return e}},offset:{order:200,enabled:!0,fn:function(e,t){var n,r=t.offset,i=e.placement,o=e.offsets,s=o.popper,a=o.reference,l=i.split("-")[0];return n=W(+r)?[+r,0]:P(r,s,a,l),"left"===l?(s.top+=n[0],s.left-=n[1]):"right"===l?(s.top+=n[0],s.left+=n[1]):"top"===l?(s.left+=n[0],s.top-=n[1]):"bottom"===l&&(s.left+=n[0],s.top+=n[1]),e.popper=s,e},offset:0},preventOverflow:{order:300,enabled:!0,fn:function(e,t){var n=t.boundariesElement||o(e.instance.popper);e.instance.reference===n&&(n=o(n));var r=D("transform"),i=e.instance.popper.style,s=i.top,a=i.left,l=i[r];i.top="",i.left="",i[r]="";var c=b(e.instance.popper,e.instance.reference,t.padding,n,e.positionFixed);i.top=s,i.left=a,i[r]=l,t.boundaries=c;var u=t.priority,f=e.offsets.popper,p={primary:function(e){var n=f[e];return f[e]<c[e]&&!t.escapeWithReference&&(n=I(f[e],c[e])),Q({},e,n)},secondary:function(e){var n="right"===e?"left":"top",r=f[n];return f[e]>c[e]&&!t.escapeWithReference&&(r=q(f[n],c[e]-("right"===e?f.width:f.height))),Q({},n,r)}};return u.forEach(function(e){var t=-1===["left","top"].indexOf(e)?"secondary":"primary";f=J({},f,p[t](e))}),e.offsets.popper=f,e},priority:["left","right","top","bottom"],padding:5,boundariesElement:"scrollParent"},keepTogether:{order:400,enabled:!0,fn:function(e){var t=e.offsets,n=t.popper,r=t.reference,i=e.placement.split("-")[0],o=Y,s=-1!==["top","bottom"].indexOf(i),a=s?"right":"bottom",l=s?"left":"top",c=s?"width":"height";return n[a]<o(r[l])&&(e.offsets.popper[l]=o(r[l])-n[c]),n[l]>o(r[a])&&(e.offsets.popper[l]=o(r[a])),e}},arrow:{order:500,enabled:!0,fn:function(e,n){var r;if(!R(e.instance.modifiers,"arrow","keepTogether"))return e;var i=n.element;if("string"==typeof i){if(!(i=e.instance.popper.querySelector(i)))return e}else if(!e.instance.popper.contains(i))return console.warn("WARNING: `arrow.element` must be child of its popper element!"),e;var o=e.placement.split("-")[0],s=e.offsets,a=s.popper,l=s.reference,c=-1!==["left","right"].indexOf(o),u=c?"height":"width",f=c?"Top":"Left",p=f.toLowerCase(),h=c?"left":"top",g=c?"bottom":"right",m=E(i)[u];l[g]-m<a[p]&&(e.offsets.popper[p]-=a[p]-(l[g]-m)),l[p]+m>a[g]&&(e.offsets.popper[p]+=l[p]+m-a[g]),e.offsets.popper=d(e.offsets.popper);var v=l[p]+l[u]/2-m/2,y=t(e.instance.popper),b=parseFloat(y["margin"+f],10),x=parseFloat(y["border"+f+"Width"],10),w=v-e.offsets.popper[p]-b-x;return w=I(q(a[u]-m,w),0),e.arrowElement=i,e.offsets.arrow=(Q(r={},p,X(w)),Q(r,h,""),r),e},element:"[x-arrow]"},flip:{order:600,enabled:!0,fn:function(e,t){if(A(e.instance.modifiers,"inner"))return e;if(e.flipped&&e.placement===e.originalPlacement)return e;var n=b(e.instance.popper,e.instance.reference,t.padding,t.boundariesElement,e.positionFixed),r=e.placement.split("-")[0],i=C(r),o=e.placement.split("-")[1]||"",s=[];switch(t.behavior){case ne:s=[r,i];break;case re:s=M(r);break;case ie:s=M(r,!0);break;default:s=t.behavior}return s.forEach(function(a,l){if(r!==a||s.length===l+1)return e;r=e.placement.split("-")[0],i=C(r);var c=e.offsets.popper,u=e.offsets.reference,f=Y,p="left"===r&&f(c.right)>f(u.left)||"right"===r&&f(c.left)<f(u.right)||"top"===r&&f(c.bottom)>f(u.top)||"bottom"===r&&f(c.top)<f(u.bottom),d=f(c.left)<f(n.left),h=f(c.right)>f(n.right),g=f(c.top)<f(n.top),m=f(c.bottom)>f(n.bottom),v="left"===r&&d||"right"===r&&h||"top"===r&&g||"bottom"===r&&m,y=-1!==["top","bottom"].indexOf(r),b=!!t.flipVariations&&(y&&"start"===o&&d||y&&"end"===o&&h||!y&&"start"===o&&g||!y&&"end"===o&&m);(p||v||b)&&(e.flipped=!0,(p||v)&&(r=s[l+1]),b&&(o=function(e){return"end"===e?"start":"start"===e?"end":e}(o)),e.placement=r+(o?"-"+o:""),e.offsets.popper=J({},e.offsets.popper,S(e.instance.popper,e.offsets.reference,e.placement)),e=k(e.instance.modifiers,e,"flip"))}),e},behavior:"flip",padding:5,boundariesElement:"viewport"},inner:{order:700,enabled:!1,fn:function(e){var t=e.placement,n=t.split("-")[0],r=e.offsets,i=r.popper,o=r.reference,s=-1!==["left","right"].indexOf(n),a=-1===["top","left"].indexOf(n);return i[s?"left":"top"]=o[n]-(a?i[s?"width":"height"]:0),e.placement=C(t),e.offsets.popper=d(i),e}},hide:{order:800,enabled:!0,fn:function(e){if(!R(e.instance.modifiers,"hide","preventOverflow"))return e;var t=e.offsets.reference,n=L(e.instance.modifiers,function(e){return"preventOverflow"===e.name}).boundaries;if(t.bottom<n.top||t.left>n.right||t.top>n.bottom||t.right<n.left){if(!0===e.hide)return e;e.hide=!0,e.attributes["x-out-of-boundaries"]=""}else{if(!1===e.hide)return e;e.hide=!1,e.attributes["x-out-of-boundaries"]=!1}return e}},computeStyle:{order:850,enabled:!0,fn:function(e,t){var n=t.x,r=t.y,i=e.offsets.popper,s=L(e.instance.modifiers,function(e){return"applyStyle"===e.name}).gpuAcceleration;void 0!==s&&console.warn("WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!");var a,l,c=void 0===s?t.gpuAcceleration:s,u=o(e.instance.popper),f=h(u),p={position:i.position},d=function(e,t){var n=e.offsets,r=n.popper,i=n.reference,o=-1!==["left","right"].indexOf(e.placement),s=-1!==e.placement.indexOf("-"),a=i.width%2==r.width%2,l=1==i.width%2&&1==r.width%2,c=function(e){return e},u=t?o||s||a?X:Y:c,f=t?X:c;return{left:u(l&&!s&&t?r.left-1:r.left),top:f(r.top),bottom:f(r.bottom),right:u(r.right)}}(e,2>window.devicePixelRatio||!Z),g="bottom"===n?"top":"bottom",m="right"===r?"left":"right",v=D("transform");if(l="bottom"==g?"HTML"===u.nodeName?-u.clientHeight+d.bottom:-f.height+d.bottom:d.top,a="right"==m?"HTML"===u.nodeName?-u.clientWidth+d.right:-f.width+d.right:d.left,c&&v)p[v]="translate3d("+a+"px, "+l+"px, 0)",p[g]=0,p[m]=0,p.willChange="transform";else{var y="bottom"==g?-1:1,b="right"==m?-1:1;p[g]=l*y,p[m]=a*b,p.willChange=g+", "+m}var x={"x-placement":e.placement};return e.attributes=J({},x,e.attributes),e.styles=J({},p,e.styles),e.arrowStyles=J({},e.offsets.arrow,e.arrowStyles),e},gpuAcceleration:!0,x:"bottom",y:"right"},applyStyle:{order:900,enabled:!0,fn:function(e){return O(e.instance.popper,e.styles),function(e,t){Object.keys(t).forEach(function(n){!1===t[n]?e.removeAttribute(n):e.setAttribute(n,t[n])})}(e.instance.popper,e.attributes),e.arrowElement&&Object.keys(e.arrowStyles).length&&O(e.arrowElement,e.arrowStyles),e},onLoad:function(e,t,n,r,i){var o=T(i,t,e,n.positionFixed),s=w(n.placement,o,t,e,n.modifiers.flip.boundariesElement,n.modifiers.flip.padding);return t.setAttribute("x-placement",s),O(t,{position:n.positionFixed?"fixed":"absolute"}),n},gpuAcceleration:void 0}}},oe}),function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):e.PerfectScrollbar=t()}(this,function(){"use strict";function e(e){return getComputedStyle(e)}function t(e,t){for(var n in t){var r=t[n];"number"==typeof r&&(r+="px"),e.style[n]=r}return e}function n(e){var t=document.createElement("div");return t.className=e,t}function r(e,t){if(!g)throw new Error("No element matching method supported");return g.call(e,t)}function i(e){e.remove?e.remove():e.parentNode&&e.parentNode.removeChild(e)}function o(e,t){return Array.prototype.filter.call(e.children,function(e){return r(e,t)})}function s(e,t){var n=e.element.classList,r=m.state.scrolling(t);n.contains(r)?clearTimeout(v[t]):n.add(r)}function a(e,t){v[t]=setTimeout(function(){return e.isAlive&&e.element.classList.remove(m.state.scrolling(t))},e.settings.scrollingThreshold)}function l(e,t){s(e,t),a(e,t)}function c(e){if("function"==typeof window.CustomEvent)return new CustomEvent(e);var t=document.createEvent("CustomEvent");return t.initCustomEvent(e,!1,!1,void 0),t}function u(e){return parseInt(e,10)||0}function f(e){return r(e,"input,[contenteditable]")||r(e,"select,[contenteditable]")||r(e,"textarea,[contenteditable]")||r(e,"button,[contenteditable]")}function p(e,t){return e.settings.minScrollbarLength&&(t=Math.max(t,e.settings.minScrollbarLength)),e.settings.maxScrollbarLength&&(t=Math.min(t,e.settings.maxScrollbarLength)),t}function d(e,n){var r={width:n.railXWidth},i=Math.floor(e.scrollTop);n.isRtl?r.left=n.negativeScrollAdjustment+e.scrollLeft+n.containerWidth-n.contentWidth:r.left=e.scrollLeft,n.isScrollbarXUsingBottom?r.bottom=n.scrollbarXBottom-i:r.top=n.scrollbarXTop+i,t(n.scrollbarXRail,r);var o={top:i,height:n.railYHeight};n.isScrollbarYUsingRight?n.isRtl?o.right=n.contentWidth-(n.negativeScrollAdjustment+e.scrollLeft)-n.scrollbarYRight-n.scrollbarYOuterWidth:o.right=n.scrollbarYRight-e.scrollLeft:n.isRtl?o.left=n.negativeScrollAdjustment+e.scrollLeft+2*n.containerWidth-n.contentWidth-n.scrollbarYLeft-n.scrollbarYOuterWidth:o.left=n.scrollbarYLeft+e.scrollLeft,t(n.scrollbarYRail,o),t(n.scrollbarX,{left:n.scrollbarXLeft,width:n.scrollbarXWidth-n.railBorderXWidth}),t(n.scrollbarY,{top:n.scrollbarYTop,height:n.scrollbarYHeight-n.railBorderYWidth})}function h(e,t){function n(t){g[p]=v+b*(t[l]-y),s(e,d),E(e),t.stopPropagation(),t.preventDefault()}function r(){a(e,d),e[h].classList.remove(m.state.clicking),e.event.unbind(e.ownerDocument,"mousemove",n)}var i=t[0],o=t[1],l=t[2],c=t[3],u=t[4],f=t[5],p=t[6],d=t[7],h=t[8],g=e.element,v=null,y=null,b=null;e.event.bind(e[u],"mousedown",function(t){v=g[p],y=t[l],b=(e[o]-e[i])/(e[c]-e[f]),e.event.bind(e.ownerDocument,"mousemove",n),e.event.once(e.ownerDocument,"mouseup",r),e[h].classList.add(m.state.clicking),t.stopPropagation(),t.preventDefault()})}var g="undefined"!=typeof Element&&(Element.prototype.matches||Element.prototype.webkitMatchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector),m={main:"ps",element:{thumb:function(e){return"ps__thumb-"+e},rail:function(e){return"ps__rail-"+e},consuming:"ps__child--consume"},state:{focus:"ps--focus",clicking:"ps--clicking",active:function(e){return"ps--active-"+e},scrolling:function(e){return"ps--scrolling-"+e}}},v={x:null,y:null},y=function(e){this.element=e,this.handlers={}},b={isEmpty:{configurable:!0}};y.prototype.bind=function(e,t){void 0===this.handlers[e]&&(this.handlers[e]=[]),this.handlers[e].push(t),this.element.addEventListener(e,t,!1)},y.prototype.unbind=function(e,t){var n=this;this.handlers[e]=this.handlers[e].filter(function(r){return!(!t||r===t)||(n.element.removeEventListener(e,r,!1),!1)})},y.prototype.unbindAll=function(){for(var e in this.handlers)this.unbind(e)},b.isEmpty.get=function(){var e=this;return Object.keys(this.handlers).every(function(t){return 0===e.handlers[t].length})},Object.defineProperties(y.prototype,b);var x=function(){this.eventElements=[]};x.prototype.eventElement=function(e){var t=this.eventElements.filter(function(t){return t.element===e})[0];return t||(t=new y(e),this.eventElements.push(t)),t},x.prototype.bind=function(e,t,n){this.eventElement(e).bind(t,n)},x.prototype.unbind=function(e,t,n){var r=this.eventElement(e);r.unbind(t,n),r.isEmpty&&this.eventElements.splice(this.eventElements.indexOf(r),1)},x.prototype.unbindAll=function(){this.eventElements.forEach(function(e){return e.unbindAll()}),this.eventElements=[]},x.prototype.once=function(e,t,n){var r=this.eventElement(e),i=function(e){r.unbind(t,i),n(e)};r.bind(t,i)};var w=function(e,t,n,r,i){var o;if(void 0===r&&(r=!0),void 0===i&&(i=!1),"top"===t)o=["contentHeight","containerHeight","scrollTop","y","up","down"];else{if("left"!==t)throw new Error("A proper axis should be provided");o=["contentWidth","containerWidth","scrollLeft","x","left","right"]}!function(e,t,n,r,i){var o=n[0],s=n[1],a=n[2],u=n[3],f=n[4],p=n[5];void 0===r&&(r=!0),void 0===i&&(i=!1);var d=e.element;e.reach[u]=null,d[a]<1&&(e.reach[u]="start"),d[a]>e[o]-e[s]-1&&(e.reach[u]="end"),t&&(d.dispatchEvent(c("ps-scroll-"+u)),t<0?d.dispatchEvent(c("ps-scroll-"+f)):t>0&&d.dispatchEvent(c("ps-scroll-"+p)),r&&l(e,u)),e.reach[u]&&(t||i)&&d.dispatchEvent(c("ps-"+u+"-reach-"+e.reach[u]))}(e,n,o,r,i)},T={isWebKit:"undefined"!=typeof document&&"WebkitAppearance"in document.documentElement.style,supportsTouch:"undefined"!=typeof window&&("ontouchstart"in window||window.DocumentTouch&&document instanceof window.DocumentTouch),supportsIePointer:"undefined"!=typeof navigator&&navigator.msMaxTouchPoints,isChrome:"undefined"!=typeof navigator&&/Chrome/i.test(navigator&&navigator.userAgent)},E=function(e){var t=e.element,n=Math.floor(t.scrollTop);e.containerWidth=t.clientWidth,e.containerHeight=t.clientHeight,e.contentWidth=t.scrollWidth,e.contentHeight=t.scrollHeight,t.contains(e.scrollbarXRail)||(o(t,m.element.rail("x")).forEach(function(e){return i(e)}),t.appendChild(e.scrollbarXRail)),t.contains(e.scrollbarYRail)||(o(t,m.element.rail("y")).forEach(function(e){return i(e)}),t.appendChild(e.scrollbarYRail)),!e.settings.suppressScrollX&&e.containerWidth+e.settings.scrollXMarginOffset<e.contentWidth?(e.scrollbarXActive=!0,e.railXWidth=e.containerWidth-e.railXMarginWidth,e.railXRatio=e.containerWidth/e.railXWidth,e.scrollbarXWidth=p(e,u(e.railXWidth*e.containerWidth/e.contentWidth)),e.scrollbarXLeft=u((e.negativeScrollAdjustment+t.scrollLeft)*(e.railXWidth-e.scrollbarXWidth)/(e.contentWidth-e.containerWidth))):e.scrollbarXActive=!1,!e.settings.suppressScrollY&&e.containerHeight+e.settings.scrollYMarginOffset<e.contentHeight?(e.scrollbarYActive=!0,e.railYHeight=e.containerHeight-e.railYMarginHeight,e.railYRatio=e.containerHeight/e.railYHeight,e.scrollbarYHeight=p(e,u(e.railYHeight*e.containerHeight/e.contentHeight)),e.scrollbarYTop=u(n*(e.railYHeight-e.scrollbarYHeight)/(e.contentHeight-e.containerHeight))):e.scrollbarYActive=!1,e.scrollbarXLeft>=e.railXWidth-e.scrollbarXWidth&&(e.scrollbarXLeft=e.railXWidth-e.scrollbarXWidth),e.scrollbarYTop>=e.railYHeight-e.scrollbarYHeight&&(e.scrollbarYTop=e.railYHeight-e.scrollbarYHeight),d(t,e),e.scrollbarXActive?t.classList.add(m.state.active("x")):(t.classList.remove(m.state.active("x")),e.scrollbarXWidth=0,e.scrollbarXLeft=0,t.scrollLeft=0),e.scrollbarYActive?t.classList.add(m.state.active("y")):(t.classList.remove(m.state.active("y")),e.scrollbarYHeight=0,e.scrollbarYTop=0,t.scrollTop=0)},C={"click-rail":function(e){e.event.bind(e.scrollbarY,"mousedown",function(e){return e.stopPropagation()}),e.event.bind(e.scrollbarYRail,"mousedown",function(t){var n=t.pageY-window.pageYOffset-e.scrollbarYRail.getBoundingClientRect().top>e.scrollbarYTop?1:-1;e.element.scrollTop+=n*e.containerHeight,E(e),t.stopPropagation()}),e.event.bind(e.scrollbarX,"mousedown",function(e){return e.stopPropagation()}),e.event.bind(e.scrollbarXRail,"mousedown",function(t){var n=t.pageX-window.pageXOffset-e.scrollbarXRail.getBoundingClientRect().left>e.scrollbarXLeft?1:-1;e.element.scrollLeft+=n*e.containerWidth,E(e),t.stopPropagation()})},"drag-thumb":function(e){h(e,["containerWidth","contentWidth","pageX","railXWidth","scrollbarX","scrollbarXWidth","scrollLeft","x","scrollbarXRail"]),h(e,["containerHeight","contentHeight","pageY","railYHeight","scrollbarY","scrollbarYHeight","scrollTop","y","scrollbarYRail"])},keyboard:function(e){var t=e.element,n=function(){return r(t,":hover")},i=function(){return r(e.scrollbarX,":focus")||r(e.scrollbarY,":focus")};e.event.bind(e.ownerDocument,"keydown",function(r){if(!(r.isDefaultPrevented&&r.isDefaultPrevented()||r.defaultPrevented)&&(n()||i())){var o=document.activeElement?document.activeElement:e.ownerDocument.activeElement;if(o){if("IFRAME"===o.tagName)o=o.contentDocument.activeElement;else for(;o.shadowRoot;)o=o.shadowRoot.activeElement;if(f(o))return}var s=0,a=0;switch(r.which){case 37:s=r.metaKey?-e.contentWidth:r.altKey?-e.containerWidth:-30;break;case 38:a=r.metaKey?e.contentHeight:r.altKey?e.containerHeight:30;break;case 39:s=r.metaKey?e.contentWidth:r.altKey?e.containerWidth:30;break;case 40:a=r.metaKey?-e.contentHeight:r.altKey?-e.containerHeight:-30;break;case 32:a=r.shiftKey?e.containerHeight:-e.containerHeight;break;case 33:a=e.containerHeight;break;case 34:a=-e.containerHeight;break;case 36:a=e.contentHeight;break;case 35:a=-e.contentHeight;break;default:return}e.settings.suppressScrollX&&0!==s||e.settings.suppressScrollY&&0!==a||(t.scrollTop-=a,t.scrollLeft+=s,E(e),function(n,r){var i=Math.floor(t.scrollTop);if(0===n){if(!e.scrollbarYActive)return!1;if(0===i&&r>0||i>=e.contentHeight-e.containerHeight&&r<0)return!e.settings.wheelPropagation}var o=t.scrollLeft;if(0===r){if(!e.scrollbarXActive)return!1;if(0===o&&n<0||o>=e.contentWidth-e.containerWidth&&n>0)return!e.settings.wheelPropagation}return!0}(s,a)&&r.preventDefault())}})},wheel:function(t){function n(t,n,r){if(!T.isWebKit&&i.querySelector("select:focus"))return!0;if(!i.contains(t))return!1;for(var o=t;o&&o!==i;){if(o.classList.contains(m.element.consuming))return!0;var s=e(o);if([s.overflow,s.overflowX,s.overflowY].join("").match(/(scroll|auto)/)){var a=o.scrollHeight-o.clientHeight;if(a>0&&!(0===o.scrollTop&&r>0||o.scrollTop===a&&r<0))return!0;var l=o.scrollWidth-o.clientWidth;if(l>0&&!(0===o.scrollLeft&&n<0||o.scrollLeft===l&&n>0))return!0}o=o.parentNode}return!1}function r(e){var r=function(e){var t=e.deltaX,n=-1*e.deltaY;return void 0!==t&&void 0!==n||(t=-1*e.wheelDeltaX/6,n=e.wheelDeltaY/6),e.deltaMode&&1===e.deltaMode&&(t*=10,n*=10),t!=t&&n!=n&&(t=0,n=e.wheelDelta),e.shiftKey?[-n,-t]:[t,n]}(e),o=r[0],s=r[1];if(!n(e.target,o,s)){var a=!1;t.settings.useBothWheelAxes?t.scrollbarYActive&&!t.scrollbarXActive?(s?i.scrollTop-=s*t.settings.wheelSpeed:i.scrollTop+=o*t.settings.wheelSpeed,a=!0):t.scrollbarXActive&&!t.scrollbarYActive&&(o?i.scrollLeft+=o*t.settings.wheelSpeed:i.scrollLeft-=s*t.settings.wheelSpeed,a=!0):(i.scrollTop-=s*t.settings.wheelSpeed,i.scrollLeft+=o*t.settings.wheelSpeed),E(t),(a=a||function(e,n){var r=Math.floor(i.scrollTop),o=0===i.scrollTop,s=r+i.offsetHeight===i.scrollHeight,a=0===i.scrollLeft,l=i.scrollLeft+i.offsetWidth===i.scrollWidth;return!(Math.abs(n)>Math.abs(e)?o||s:a||l)||!t.settings.wheelPropagation}(o,s))&&!e.ctrlKey&&(e.stopPropagation(),e.preventDefault())}}var i=t.element;void 0!==window.onwheel?t.event.bind(i,"wheel",r):void 0!==window.onmousewheel&&t.event.bind(i,"mousewheel",r)},touch:function(t){function n(e,n){var r=Math.floor(u.scrollTop),i=u.scrollLeft,o=Math.abs(e),s=Math.abs(n);if(s>o){if(n<0&&r===t.contentHeight-t.containerHeight||n>0&&0===r)return 0===window.scrollY&&n>0&&T.isChrome}else if(o>s&&(e<0&&i===t.contentWidth-t.containerWidth||e>0&&0===i))return!0;return!0}function r(e,n){u.scrollTop-=n,u.scrollLeft-=e,E(t)}function i(e){return e.targetTouches?e.targetTouches[0]:e}function o(e){return!(e.pointerType&&"pen"===e.pointerType&&0===e.buttons||(!e.targetTouches||1!==e.targetTouches.length)&&(!e.pointerType||"mouse"===e.pointerType||e.pointerType===e.MSPOINTER_TYPE_MOUSE))}function s(e){if(o(e)){var t=i(e);f.pageX=t.pageX,f.pageY=t.pageY,p=(new Date).getTime(),null!==h&&clearInterval(h)}}function a(t,n,r){if(!u.contains(t))return!1;for(var i=t;i&&i!==u;){if(i.classList.contains(m.element.consuming))return!0;var o=e(i);if([o.overflow,o.overflowX,o.overflowY].join("").match(/(scroll|auto)/)){var s=i.scrollHeight-i.clientHeight;if(s>0&&!(0===i.scrollTop&&r>0||i.scrollTop===s&&r<0))return!0;var a=i.scrollLeft-i.clientWidth;if(a>0&&!(0===i.scrollLeft&&n<0||i.scrollLeft===a&&n>0))return!0}i=i.parentNode}return!1}function l(e){if(o(e)){var t=i(e),s={pageX:t.pageX,pageY:t.pageY},l=s.pageX-f.pageX,c=s.pageY-f.pageY;if(a(e.target,l,c))return;r(l,c),f=s;var u=(new Date).getTime(),h=u-p;h>0&&(d.x=l/h,d.y=c/h,p=u),n(l,c)&&e.preventDefault()}}function c(){t.settings.swipeEasing&&(clearInterval(h),h=setInterval(function(){t.isInitialized?clearInterval(h):d.x||d.y?Math.abs(d.x)<.01&&Math.abs(d.y)<.01?clearInterval(h):(r(30*d.x,30*d.y),d.x*=.8,d.y*=.8):clearInterval(h)},10))}if(T.supportsTouch||T.supportsIePointer){var u=t.element,f={},p=0,d={},h=null;T.supportsTouch?(t.event.bind(u,"touchstart",s),t.event.bind(u,"touchmove",l),t.event.bind(u,"touchend",c)):T.supportsIePointer&&(window.PointerEvent?(t.event.bind(u,"pointerdown",s),t.event.bind(u,"pointermove",l),t.event.bind(u,"pointerup",c)):window.MSPointerEvent&&(t.event.bind(u,"MSPointerDown",s),t.event.bind(u,"MSPointerMove",l),t.event.bind(u,"MSPointerUp",c)))}}},S=function(r,i){var o=this;if(void 0===i&&(i={}),"string"==typeof r&&(r=document.querySelector(r)),!r||!r.nodeName)throw new Error("no element is specified to initialize PerfectScrollbar");for(var s in this.element=r,r.classList.add(m.main),this.settings={handlers:["click-rail","drag-thumb","keyboard","wheel","touch"],maxScrollbarLength:null,minScrollbarLength:null,scrollingThreshold:1e3,scrollXMarginOffset:0,scrollYMarginOffset:0,suppressScrollX:!1,suppressScrollY:!1,swipeEasing:!0,useBothWheelAxes:!1,wheelPropagation:!0,wheelSpeed:1},i)o.settings[s]=i[s];this.containerWidth=null,this.containerHeight=null,this.contentWidth=null,this.contentHeight=null;var a=function(){return r.classList.add(m.state.focus)},l=function(){return r.classList.remove(m.state.focus)};this.isRtl="rtl"===e(r).direction,this.isNegativeScroll=function(){var e,t=r.scrollLeft;return r.scrollLeft=-1,e=r.scrollLeft<0,r.scrollLeft=t,e}(),this.negativeScrollAdjustment=this.isNegativeScroll?r.scrollWidth-r.clientWidth:0,this.event=new x,this.ownerDocument=r.ownerDocument||document,this.scrollbarXRail=n(m.element.rail("x")),r.appendChild(this.scrollbarXRail),this.scrollbarX=n(m.element.thumb("x")),this.scrollbarXRail.appendChild(this.scrollbarX),this.scrollbarX.setAttribute("tabindex",0),this.event.bind(this.scrollbarX,"focus",a),this.event.bind(this.scrollbarX,"blur",l),this.scrollbarXActive=null,this.scrollbarXWidth=null,this.scrollbarXLeft=null;var c=e(this.scrollbarXRail);this.scrollbarXBottom=parseInt(c.bottom,10),isNaN(this.scrollbarXBottom)?(this.isScrollbarXUsingBottom=!1,this.scrollbarXTop=u(c.top)):this.isScrollbarXUsingBottom=!0,this.railBorderXWidth=u(c.borderLeftWidth)+u(c.borderRightWidth),t(this.scrollbarXRail,{display:"block"}),this.railXMarginWidth=u(c.marginLeft)+u(c.marginRight),t(this.scrollbarXRail,{display:""}),this.railXWidth=null,this.railXRatio=null,this.scrollbarYRail=n(m.element.rail("y")),r.appendChild(this.scrollbarYRail),this.scrollbarY=n(m.element.thumb("y")),this.scrollbarYRail.appendChild(this.scrollbarY),this.scrollbarY.setAttribute("tabindex",0),this.event.bind(this.scrollbarY,"focus",a),this.event.bind(this.scrollbarY,"blur",l),this.scrollbarYActive=null,this.scrollbarYHeight=null,this.scrollbarYTop=null;var f=e(this.scrollbarYRail);this.scrollbarYRight=parseInt(f.right,10),isNaN(this.scrollbarYRight)?(this.isScrollbarYUsingRight=!1,this.scrollbarYLeft=u(f.left)):this.isScrollbarYUsingRight=!0,this.scrollbarYOuterWidth=this.isRtl?function(t){var n=e(t);return u(n.width)+u(n.paddingLeft)+u(n.paddingRight)+u(n.borderLeftWidth)+u(n.borderRightWidth)}(this.scrollbarY):null,this.railBorderYWidth=u(f.borderTopWidth)+u(f.borderBottomWidth),t(this.scrollbarYRail,{display:"block"}),this.railYMarginHeight=u(f.marginTop)+u(f.marginBottom),t(this.scrollbarYRail,{display:""}),this.railYHeight=null,this.railYRatio=null,this.reach={x:r.scrollLeft<=0?"start":r.scrollLeft>=this.contentWidth-this.containerWidth?"end":null,y:r.scrollTop<=0?"start":r.scrollTop>=this.contentHeight-this.containerHeight?"end":null},this.isAlive=!0,this.settings.handlers.forEach(function(e){return C[e](o)}),this.lastScrollTop=Math.floor(r.scrollTop),this.lastScrollLeft=r.scrollLeft,this.event.bind(this.element,"scroll",function(e){return o.onScroll(e)}),E(this)};return S.prototype.update=function(){this.isAlive&&(this.negativeScrollAdjustment=this.isNegativeScroll?this.element.scrollWidth-this.element.clientWidth:0,t(this.scrollbarXRail,{display:"block"}),t(this.scrollbarYRail,{display:"block"}),this.railXMarginWidth=u(e(this.scrollbarXRail).marginLeft)+u(e(this.scrollbarXRail).marginRight),this.railYMarginHeight=u(e(this.scrollbarYRail).marginTop)+u(e(this.scrollbarYRail).marginBottom),t(this.scrollbarXRail,{display:"none"}),t(this.scrollbarYRail,{display:"none"}),E(this),w(this,"top",0,!1,!0),w(this,"left",0,!1,!0),t(this.scrollbarXRail,{display:""}),t(this.scrollbarYRail,{display:""}))},S.prototype.onScroll=function(e){this.isAlive&&(E(this),w(this,"top",this.element.scrollTop-this.lastScrollTop),w(this,"left",this.element.scrollLeft-this.lastScrollLeft),this.lastScrollTop=Math.floor(this.element.scrollTop),this.lastScrollLeft=this.element.scrollLeft)},S.prototype.destroy=function(){this.isAlive&&(this.event.unbindAll(),i(this.scrollbarX),i(this.scrollbarY),i(this.scrollbarXRail),i(this.scrollbarYRail),this.removePsClasses(),this.element=null,this.scrollbarX=null,this.scrollbarY=null,this.scrollbarXRail=null,this.scrollbarYRail=null,this.isAlive=!1)},S.prototype.removePsClasses=function(){this.element.className=this.element.className.split(" ").filter(function(e){return!e.match(/^ps([-_].+|)$/)}).join(" ")},S});
	</script>

	<script>
         /*!
  * Bootstrap v4.5.0 (https://getbootstrap.com/)
  * Copyright 2011-2020 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
  */
!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?e(exports,require("jquery"),require("popper.js")):"function"==typeof define&&define.amd?define(["exports","jquery","popper.js"],e):e((t=t||self).bootstrap={},t.jQuery,t.Popper)}(this,(function(t,e,n){"use strict";function i(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function o(t,e,n){return e&&i(t.prototype,e),n&&i(t,n),t}function s(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function r(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(t);e&&(i=i.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,i)}return n}function a(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?r(Object(n),!0).forEach((function(e){s(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):r(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}e=e&&Object.prototype.hasOwnProperty.call(e,"default")?e.default:e,n=n&&Object.prototype.hasOwnProperty.call(n,"default")?n.default:n;function l(t){var n=this,i=!1;return e(this).one(c.TRANSITION_END,(function(){i=!0})),setTimeout((function(){i||c.triggerTransitionEnd(n)}),t),this}var c={TRANSITION_END:"bsTransitionEnd",getUID:function(t){do{t+=~~(1e6*Math.random())}while(document.getElementById(t));return t},getSelectorFromElement:function(t){var e=t.getAttribute("data-target");if(!e||"#"===e){var n=t.getAttribute("href");e=n&&"#"!==n?n.trim():""}try{return document.querySelector(e)?e:null}catch(t){return null}},getTransitionDurationFromElement:function(t){if(!t)return 0;var n=e(t).css("transition-duration"),i=e(t).css("transition-delay"),o=parseFloat(n),s=parseFloat(i);return o||s?(n=n.split(",")[0],i=i.split(",")[0],1e3*(parseFloat(n)+parseFloat(i))):0},reflow:function(t){return t.offsetHeight},triggerTransitionEnd:function(t){e(t).trigger("transitionend")},supportsTransitionEnd:function(){return Boolean("transitionend")},isElement:function(t){return(t[0]||t).nodeType},typeCheckConfig:function(t,e,n){for(var i in n)if(Object.prototype.hasOwnProperty.call(n,i)){var o=n[i],s=e[i],r=s&&c.isElement(s)?"element":null===(a=s)||"undefined"==typeof a?""+a:{}.toString.call(a).match(/\s([a-z]+)/i)[1].toLowerCase();if(!new RegExp(o).test(r))throw new Error(t.toUpperCase()+': Option "'+i+'" provided type "'+r+'" but expected type "'+o+'".')}var a},findShadowRoot:function(t){if(!document.documentElement.attachShadow)return null;if("function"==typeof t.getRootNode){var e=t.getRootNode();return e instanceof ShadowRoot?e:null}return t instanceof ShadowRoot?t:t.parentNode?c.findShadowRoot(t.parentNode):null},jQueryDetection:function(){if("undefined"==typeof e)throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");var t=e.fn.jquery.split(" ")[0].split(".");if(t[0]<2&&t[1]<9||1===t[0]&&9===t[1]&&t[2]<1||t[0]>=4)throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")}};c.jQueryDetection(),e.fn.emulateTransitionEnd=l,e.event.special[c.TRANSITION_END]={bindType:"transitionend",delegateType:"transitionend",handle:function(t){if(e(t.target).is(this))return t.handleObj.handler.apply(this,arguments)}};var h="alert",u=e.fn[h],d=function(){function t(t){this._element=t}var n=t.prototype;return n.close=function(t){var e=this._element;t&&(e=this._getRootElement(t)),this._triggerCloseEvent(e).isDefaultPrevented()||this._removeElement(e)},n.dispose=function(){e.removeData(this._element,"bs.alert"),this._element=null},n._getRootElement=function(t){var n=c.getSelectorFromElement(t),i=!1;return n&&(i=document.querySelector(n)),i||(i=e(t).closest(".alert")[0]),i},n._triggerCloseEvent=function(t){var n=e.Event("close.bs.alert");return e(t).trigger(n),n},n._removeElement=function(t){var n=this;if(e(t).removeClass("show"),e(t).hasClass("fade")){var i=c.getTransitionDurationFromElement(t);e(t).one(c.TRANSITION_END,(function(e){return n._destroyElement(t,e)})).emulateTransitionEnd(i)}else this._destroyElement(t)},n._destroyElement=function(t){e(t).detach().trigger("closed.bs.alert").remove()},t._jQueryInterface=function(n){return this.each((function(){var i=e(this),o=i.data("bs.alert");o||(o=new t(this),i.data("bs.alert",o)),"close"===n&&o[n](this)}))},t._handleDismiss=function(t){return function(e){e&&e.preventDefault(),t.close(this)}},o(t,null,[{key:"VERSION",get:function(){return"4.5.0"}}]),t}();e(document).on("click.bs.alert.data-api",'[data-dismiss="alert"]',d._handleDismiss(new d)),e.fn[h]=d._jQueryInterface,e.fn[h].Constructor=d,e.fn[h].noConflict=function(){return e.fn[h]=u,d._jQueryInterface};var f=e.fn.button,g=function(){function t(t){this._element=t}var n=t.prototype;return n.toggle=function(){var t=!0,n=!0,i=e(this._element).closest('[data-toggle="buttons"]')[0];if(i){var o=this._element.querySelector('input:not([type="hidden"])');if(o){if("radio"===o.type)if(o.checked&&this._element.classList.contains("active"))t=!1;else{var s=i.querySelector(".active");s&&e(s).removeClass("active")}t&&("checkbox"!==o.type&&"radio"!==o.type||(o.checked=!this._element.classList.contains("active")),e(o).trigger("change")),o.focus(),n=!1}}this._element.hasAttribute("disabled")||this._element.classList.contains("disabled")||(n&&this._element.setAttribute("aria-pressed",!this._element.classList.contains("active")),t&&e(this._element).toggleClass("active"))},n.dispose=function(){e.removeData(this._element,"bs.button"),this._element=null},t._jQueryInterface=function(n){return this.each((function(){var i=e(this).data("bs.button");i||(i=new t(this),e(this).data("bs.button",i)),"toggle"===n&&i[n]()}))},o(t,null,[{key:"VERSION",get:function(){return"4.5.0"}}]),t}();e(document).on("click.bs.button.data-api",'[data-toggle^="button"]',(function(t){var n=t.target,i=n;if(e(n).hasClass("btn")||(n=e(n).closest(".btn")[0]),!n||n.hasAttribute("disabled")||n.classList.contains("disabled"))t.preventDefault();else{var o=n.querySelector('input:not([type="hidden"])');if(o&&(o.hasAttribute("disabled")||o.classList.contains("disabled")))return void t.preventDefault();"LABEL"===i.tagName&&o&&"checkbox"===o.type&&t.preventDefault(),g._jQueryInterface.call(e(n),"toggle")}})).on("focus.bs.button.data-api blur.bs.button.data-api",'[data-toggle^="button"]',(function(t){var n=e(t.target).closest(".btn")[0];e(n).toggleClass("focus",/^focus(in)?$/.test(t.type))})),e(window).on("load.bs.button.data-api",(function(){for(var t=[].slice.call(document.querySelectorAll('[data-toggle="buttons"] .btn')),e=0,n=t.length;e<n;e++){var i=t[e],o=i.querySelector('input:not([type="hidden"])');o.checked||o.hasAttribute("checked")?i.classList.add("active"):i.classList.remove("active")}for(var s=0,r=(t=[].slice.call(document.querySelectorAll('[data-toggle="button"]'))).length;s<r;s++){var a=t[s];"true"===a.getAttribute("aria-pressed")?a.classList.add("active"):a.classList.remove("active")}})),e.fn.button=g._jQueryInterface,e.fn.button.Constructor=g,e.fn.button.noConflict=function(){return e.fn.button=f,g._jQueryInterface};var m="carousel",p=".bs.carousel",_=e.fn[m],v={interval:5e3,keyboard:!0,slide:!1,pause:"hover",wrap:!0,touch:!0},b={interval:"(number|boolean)",keyboard:"boolean",slide:"(boolean|string)",pause:"(string|boolean)",wrap:"boolean",touch:"boolean"},y={TOUCH:"touch",PEN:"pen"},E=function(){function t(t,e){this._items=null,this._interval=null,this._activeElement=null,this._isPaused=!1,this._isSliding=!1,this.touchTimeout=null,this.touchStartX=0,this.touchDeltaX=0,this._config=this._getConfig(e),this._element=t,this._indicatorsElement=this._element.querySelector(".carousel-indicators"),this._touchSupported="ontouchstart"in document.documentElement||navigator.maxTouchPoints>0,this._pointerEvent=Boolean(window.PointerEvent||window.MSPointerEvent),this._addEventListeners()}var n=t.prototype;return n.next=function(){this._isSliding||this._slide("next")},n.nextWhenVisible=function(){!document.hidden&&e(this._element).is(":visible")&&"hidden"!==e(this._element).css("visibility")&&this.next()},n.prev=function(){this._isSliding||this._slide("prev")},n.pause=function(t){t||(this._isPaused=!0),this._element.querySelector(".carousel-item-next, .carousel-item-prev")&&(c.triggerTransitionEnd(this._element),this.cycle(!0)),clearInterval(this._interval),this._interval=null},n.cycle=function(t){t||(this._isPaused=!1),this._interval&&(clearInterval(this._interval),this._interval=null),this._config.interval&&!this._isPaused&&(this._interval=setInterval((document.visibilityState?this.nextWhenVisible:this.next).bind(this),this._config.interval))},n.to=function(t){var n=this;this._activeElement=this._element.querySelector(".active.carousel-item");var i=this._getItemIndex(this._activeElement);if(!(t>this._items.length-1||t<0))if(this._isSliding)e(this._element).one("slid.bs.carousel",(function(){return n.to(t)}));else{if(i===t)return this.pause(),void this.cycle();var o=t>i?"next":"prev";this._slide(o,this._items[t])}},n.dispose=function(){e(this._element).off(p),e.removeData(this._element,"bs.carousel"),this._items=null,this._config=null,this._element=null,this._interval=null,this._isPaused=null,this._isSliding=null,this._activeElement=null,this._indicatorsElement=null},n._getConfig=function(t){return t=a(a({},v),t),c.typeCheckConfig(m,t,b),t},n._handleSwipe=function(){var t=Math.abs(this.touchDeltaX);if(!(t<=40)){var e=t/this.touchDeltaX;this.touchDeltaX=0,e>0&&this.prev(),e<0&&this.next()}},n._addEventListeners=function(){var t=this;this._config.keyboard&&e(this._element).on("keydown.bs.carousel",(function(e){return t._keydown(e)})),"hover"===this._config.pause&&e(this._element).on("mouseenter.bs.carousel",(function(e){return t.pause(e)})).on("mouseleave.bs.carousel",(function(e){return t.cycle(e)})),this._config.touch&&this._addTouchEventListeners()},n._addTouchEventListeners=function(){var t=this;if(this._touchSupported){var n=function(e){t._pointerEvent&&y[e.originalEvent.pointerType.toUpperCase()]?t.touchStartX=e.originalEvent.clientX:t._pointerEvent||(t.touchStartX=e.originalEvent.touches[0].clientX)},i=function(e){t._pointerEvent&&y[e.originalEvent.pointerType.toUpperCase()]&&(t.touchDeltaX=e.originalEvent.clientX-t.touchStartX),t._handleSwipe(),"hover"===t._config.pause&&(t.pause(),t.touchTimeout&&clearTimeout(t.touchTimeout),t.touchTimeout=setTimeout((function(e){return t.cycle(e)}),500+t._config.interval))};e(this._element.querySelectorAll(".carousel-item img")).on("dragstart.bs.carousel",(function(t){return t.preventDefault()})),this._pointerEvent?(e(this._element).on("pointerdown.bs.carousel",(function(t){return n(t)})),e(this._element).on("pointerup.bs.carousel",(function(t){return i(t)})),this._element.classList.add("pointer-event")):(e(this._element).on("touchstart.bs.carousel",(function(t){return n(t)})),e(this._element).on("touchmove.bs.carousel",(function(e){return function(e){e.originalEvent.touches&&e.originalEvent.touches.length>1?t.touchDeltaX=0:t.touchDeltaX=e.originalEvent.touches[0].clientX-t.touchStartX}(e)})),e(this._element).on("touchend.bs.carousel",(function(t){return i(t)})))}},n._keydown=function(t){if(!/input|textarea/i.test(t.target.tagName))switch(t.which){case 37:t.preventDefault(),this.prev();break;case 39:t.preventDefault(),this.next()}},n._getItemIndex=function(t){return this._items=t&&t.parentNode?[].slice.call(t.parentNode.querySelectorAll(".carousel-item")):[],this._items.indexOf(t)},n._getItemByDirection=function(t,e){var n="next"===t,i="prev"===t,o=this._getItemIndex(e),s=this._items.length-1;if((i&&0===o||n&&o===s)&&!this._config.wrap)return e;var r=(o+("prev"===t?-1:1))%this._items.length;return-1===r?this._items[this._items.length-1]:this._items[r]},n._triggerSlideEvent=function(t,n){var i=this._getItemIndex(t),o=this._getItemIndex(this._element.querySelector(".active.carousel-item")),s=e.Event("slide.bs.carousel",{relatedTarget:t,direction:n,from:o,to:i});return e(this._element).trigger(s),s},n._setActiveIndicatorElement=function(t){if(this._indicatorsElement){var n=[].slice.call(this._indicatorsElement.querySelectorAll(".active"));e(n).removeClass("active");var i=this._indicatorsElement.children[this._getItemIndex(t)];i&&e(i).addClass("active")}},n._slide=function(t,n){var i,o,s,r=this,a=this._element.querySelector(".active.carousel-item"),l=this._getItemIndex(a),h=n||a&&this._getItemByDirection(t,a),u=this._getItemIndex(h),d=Boolean(this._interval);if("next"===t?(i="carousel-item-left",o="carousel-item-next",s="left"):(i="carousel-item-right",o="carousel-item-prev",s="right"),h&&e(h).hasClass("active"))this._isSliding=!1;else if(!this._triggerSlideEvent(h,s).isDefaultPrevented()&&a&&h){this._isSliding=!0,d&&this.pause(),this._setActiveIndicatorElement(h);var f=e.Event("slid.bs.carousel",{relatedTarget:h,direction:s,from:l,to:u});if(e(this._element).hasClass("slide")){e(h).addClass(o),c.reflow(h),e(a).addClass(i),e(h).addClass(i);var g=parseInt(h.getAttribute("data-interval"),10);g?(this._config.defaultInterval=this._config.defaultInterval||this._config.interval,this._config.interval=g):this._config.interval=this._config.defaultInterval||this._config.interval;var m=c.getTransitionDurationFromElement(a);e(a).one(c.TRANSITION_END,(function(){e(h).removeClass(i+" "+o).addClass("active"),e(a).removeClass("active "+o+" "+i),r._isSliding=!1,setTimeout((function(){return e(r._element).trigger(f)}),0)})).emulateTransitionEnd(m)}else e(a).removeClass("active"),e(h).addClass("active"),this._isSliding=!1,e(this._element).trigger(f);d&&this.cycle()}},t._jQueryInterface=function(n){return this.each((function(){var i=e(this).data("bs.carousel"),o=a(a({},v),e(this).data());"object"==typeof n&&(o=a(a({},o),n));var s="string"==typeof n?n:o.slide;if(i||(i=new t(this,o),e(this).data("bs.carousel",i)),"number"==typeof n)i.to(n);else if("string"==typeof s){if("undefined"==typeof i[s])throw new TypeError('No method named "'+s+'"');i[s]()}else o.interval&&o.ride&&(i.pause(),i.cycle())}))},t._dataApiClickHandler=function(n){var i=c.getSelectorFromElement(this);if(i){var o=e(i)[0];if(o&&e(o).hasClass("carousel")){var s=a(a({},e(o).data()),e(this).data()),r=this.getAttribute("data-slide-to");r&&(s.interval=!1),t._jQueryInterface.call(e(o),s),r&&e(o).data("bs.carousel").to(r),n.preventDefault()}}},o(t,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return v}}]),t}();e(document).on("click.bs.carousel.data-api","[data-slide], [data-slide-to]",E._dataApiClickHandler),e(window).on("load.bs.carousel.data-api",(function(){for(var t=[].slice.call(document.querySelectorAll('[data-ride="carousel"]')),n=0,i=t.length;n<i;n++){var o=e(t[n]);E._jQueryInterface.call(o,o.data())}})),e.fn[m]=E._jQueryInterface,e.fn[m].Constructor=E,e.fn[m].noConflict=function(){return e.fn[m]=_,E._jQueryInterface};var w="collapse",T=e.fn[w],C={toggle:!0,parent:""},S={toggle:"boolean",parent:"(string|element)"},D=function(){function t(t,e){this._isTransitioning=!1,this._element=t,this._config=this._getConfig(e),this._triggerArray=[].slice.call(document.querySelectorAll('[data-toggle="collapse"][href="#'+t.id+'"],[data-toggle="collapse"][data-target="#'+t.id+'"]'));for(var n=[].slice.call(document.querySelectorAll('[data-toggle="collapse"]')),i=0,o=n.length;i<o;i++){var s=n[i],r=c.getSelectorFromElement(s),a=[].slice.call(document.querySelectorAll(r)).filter((function(e){return e===t}));null!==r&&a.length>0&&(this._selector=r,this._triggerArray.push(s))}this._parent=this._config.parent?this._getParent():null,this._config.parent||this._addAriaAndCollapsedClass(this._element,this._triggerArray),this._config.toggle&&this.toggle()}var n=t.prototype;return n.toggle=function(){e(this._element).hasClass("show")?this.hide():this.show()},n.show=function(){var n,i,o=this;if(!this._isTransitioning&&!e(this._element).hasClass("show")&&(this._parent&&0===(n=[].slice.call(this._parent.querySelectorAll(".show, .collapsing")).filter((function(t){return"string"==typeof o._config.parent?t.getAttribute("data-parent")===o._config.parent:t.classList.contains("collapse")}))).length&&(n=null),!(n&&(i=e(n).not(this._selector).data("bs.collapse"))&&i._isTransitioning))){var s=e.Event("show.bs.collapse");if(e(this._element).trigger(s),!s.isDefaultPrevented()){n&&(t._jQueryInterface.call(e(n).not(this._selector),"hide"),i||e(n).data("bs.collapse",null));var r=this._getDimension();e(this._element).removeClass("collapse").addClass("collapsing"),this._element.style[r]=0,this._triggerArray.length&&e(this._triggerArray).removeClass("collapsed").attr("aria-expanded",!0),this.setTransitioning(!0);var a="scroll"+(r[0].toUpperCase()+r.slice(1)),l=c.getTransitionDurationFromElement(this._element);e(this._element).one(c.TRANSITION_END,(function(){e(o._element).removeClass("collapsing").addClass("collapse show"),o._element.style[r]="",o.setTransitioning(!1),e(o._element).trigger("shown.bs.collapse")})).emulateTransitionEnd(l),this._element.style[r]=this._element[a]+"px"}}},n.hide=function(){var t=this;if(!this._isTransitioning&&e(this._element).hasClass("show")){var n=e.Event("hide.bs.collapse");if(e(this._element).trigger(n),!n.isDefaultPrevented()){var i=this._getDimension();this._element.style[i]=this._element.getBoundingClientRect()[i]+"px",c.reflow(this._element),e(this._element).addClass("collapsing").removeClass("collapse show");var o=this._triggerArray.length;if(o>0)for(var s=0;s<o;s++){var r=this._triggerArray[s],a=c.getSelectorFromElement(r);if(null!==a)e([].slice.call(document.querySelectorAll(a))).hasClass("show")||e(r).addClass("collapsed").attr("aria-expanded",!1)}this.setTransitioning(!0);this._element.style[i]="";var l=c.getTransitionDurationFromElement(this._element);e(this._element).one(c.TRANSITION_END,(function(){t.setTransitioning(!1),e(t._element).removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")})).emulateTransitionEnd(l)}}},n.setTransitioning=function(t){this._isTransitioning=t},n.dispose=function(){e.removeData(this._element,"bs.collapse"),this._config=null,this._parent=null,this._element=null,this._triggerArray=null,this._isTransitioning=null},n._getConfig=function(t){return(t=a(a({},C),t)).toggle=Boolean(t.toggle),c.typeCheckConfig(w,t,S),t},n._getDimension=function(){return e(this._element).hasClass("width")?"width":"height"},n._getParent=function(){var n,i=this;c.isElement(this._config.parent)?(n=this._config.parent,"undefined"!=typeof this._config.parent.jquery&&(n=this._config.parent[0])):n=document.querySelector(this._config.parent);var o='[data-toggle="collapse"][data-parent="'+this._config.parent+'"]',s=[].slice.call(n.querySelectorAll(o));return e(s).each((function(e,n){i._addAriaAndCollapsedClass(t._getTargetFromElement(n),[n])})),n},n._addAriaAndCollapsedClass=function(t,n){var i=e(t).hasClass("show");n.length&&e(n).toggleClass("collapsed",!i).attr("aria-expanded",i)},t._getTargetFromElement=function(t){var e=c.getSelectorFromElement(t);return e?document.querySelector(e):null},t._jQueryInterface=function(n){return this.each((function(){var i=e(this),o=i.data("bs.collapse"),s=a(a(a({},C),i.data()),"object"==typeof n&&n?n:{});if(!o&&s.toggle&&"string"==typeof n&&/show|hide/.test(n)&&(s.toggle=!1),o||(o=new t(this,s),i.data("bs.collapse",o)),"string"==typeof n){if("undefined"==typeof o[n])throw new TypeError('No method named "'+n+'"');o[n]()}}))},o(t,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return C}}]),t}();e(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',(function(t){"A"===t.currentTarget.tagName&&t.preventDefault();var n=e(this),i=c.getSelectorFromElement(this),o=[].slice.call(document.querySelectorAll(i));e(o).each((function(){var t=e(this),i=t.data("bs.collapse")?"toggle":n.data();D._jQueryInterface.call(t,i)}))})),e.fn[w]=D._jQueryInterface,e.fn[w].Constructor=D,e.fn[w].noConflict=function(){return e.fn[w]=T,D._jQueryInterface};var k="dropdown",N=e.fn[k],A=new RegExp("38|40|27"),I={offset:0,flip:!0,boundary:"scrollParent",reference:"toggle",display:"dynamic",popperConfig:null},O={offset:"(number|string|function)",flip:"boolean",boundary:"(string|element)",reference:"(string|element)",display:"string",popperConfig:"(null|object)"},j=function(){function t(t,e){this._element=t,this._popper=null,this._config=this._getConfig(e),this._menu=this._getMenuElement(),this._inNavbar=this._detectNavbar(),this._addEventListeners()}var i=t.prototype;return i.toggle=function(){if(!this._element.disabled&&!e(this._element).hasClass("disabled")){var n=e(this._menu).hasClass("show");t._clearMenus(),n||this.show(!0)}},i.show=function(i){if(void 0===i&&(i=!1),!(this._element.disabled||e(this._element).hasClass("disabled")||e(this._menu).hasClass("show"))){var o={relatedTarget:this._element},s=e.Event("show.bs.dropdown",o),r=t._getParentFromElement(this._element);if(e(r).trigger(s),!s.isDefaultPrevented()){if(!this._inNavbar&&i){if("undefined"==typeof n)throw new TypeError("Bootstrap's dropdowns require Popper.js (https://popper.js.org/)");var a=this._element;"parent"===this._config.reference?a=r:c.isElement(this._config.reference)&&(a=this._config.reference,"undefined"!=typeof this._config.reference.jquery&&(a=this._config.reference[0])),"scrollParent"!==this._config.boundary&&e(r).addClass("position-static"),this._popper=new n(a,this._menu,this._getPopperConfig())}"ontouchstart"in document.documentElement&&0===e(r).closest(".navbar-nav").length&&e(document.body).children().on("mouseover",null,e.noop),this._element.focus(),this._element.setAttribute("aria-expanded",!0),e(this._menu).toggleClass("show"),e(r).toggleClass("show").trigger(e.Event("shown.bs.dropdown",o))}}},i.hide=function(){if(!this._element.disabled&&!e(this._element).hasClass("disabled")&&e(this._menu).hasClass("show")){var n={relatedTarget:this._element},i=e.Event("hide.bs.dropdown",n),o=t._getParentFromElement(this._element);e(o).trigger(i),i.isDefaultPrevented()||(this._popper&&this._popper.destroy(),e(this._menu).toggleClass("show"),e(o).toggleClass("show").trigger(e.Event("hidden.bs.dropdown",n)))}},i.dispose=function(){e.removeData(this._element,"bs.dropdown"),e(this._element).off(".bs.dropdown"),this._element=null,this._menu=null,null!==this._popper&&(this._popper.destroy(),this._popper=null)},i.update=function(){this._inNavbar=this._detectNavbar(),null!==this._popper&&this._popper.scheduleUpdate()},i._addEventListeners=function(){var t=this;e(this._element).on("click.bs.dropdown",(function(e){e.preventDefault(),e.stopPropagation(),t.toggle()}))},i._getConfig=function(t){return t=a(a(a({},this.constructor.Default),e(this._element).data()),t),c.typeCheckConfig(k,t,this.constructor.DefaultType),t},i._getMenuElement=function(){if(!this._menu){var e=t._getParentFromElement(this._element);e&&(this._menu=e.querySelector(".dropdown-menu"))}return this._menu},i._getPlacement=function(){var t=e(this._element.parentNode),n="bottom-start";return t.hasClass("dropup")?n=e(this._menu).hasClass("dropdown-menu-right")?"top-end":"top-start":t.hasClass("dropright")?n="right-start":t.hasClass("dropleft")?n="left-start":e(this._menu).hasClass("dropdown-menu-right")&&(n="bottom-end"),n},i._detectNavbar=function(){return e(this._element).closest(".navbar").length>0},i._getOffset=function(){var t=this,e={};return"function"==typeof this._config.offset?e.fn=function(e){return e.offsets=a(a({},e.offsets),t._config.offset(e.offsets,t._element)||{}),e}:e.offset=this._config.offset,e},i._getPopperConfig=function(){var t={placement:this._getPlacement(),modifiers:{offset:this._getOffset(),flip:{enabled:this._config.flip},preventOverflow:{boundariesElement:this._config.boundary}}};return"static"===this._config.display&&(t.modifiers.applyStyle={enabled:!1}),a(a({},t),this._config.popperConfig)},t._jQueryInterface=function(n){return this.each((function(){var i=e(this).data("bs.dropdown");if(i||(i=new t(this,"object"==typeof n?n:null),e(this).data("bs.dropdown",i)),"string"==typeof n){if("undefined"==typeof i[n])throw new TypeError('No method named "'+n+'"');i[n]()}}))},t._clearMenus=function(n){if(!n||3!==n.which&&("keyup"!==n.type||9===n.which))for(var i=[].slice.call(document.querySelectorAll('[data-toggle="dropdown"]')),o=0,s=i.length;o<s;o++){var r=t._getParentFromElement(i[o]),a=e(i[o]).data("bs.dropdown"),l={relatedTarget:i[o]};if(n&&"click"===n.type&&(l.clickEvent=n),a){var c=a._menu;if(e(r).hasClass("show")&&!(n&&("click"===n.type&&/input|textarea/i.test(n.target.tagName)||"keyup"===n.type&&9===n.which)&&e.contains(r,n.target))){var h=e.Event("hide.bs.dropdown",l);e(r).trigger(h),h.isDefaultPrevented()||("ontouchstart"in document.documentElement&&e(document.body).children().off("mouseover",null,e.noop),i[o].setAttribute("aria-expanded","false"),a._popper&&a._popper.destroy(),e(c).removeClass("show"),e(r).removeClass("show").trigger(e.Event("hidden.bs.dropdown",l)))}}}},t._getParentFromElement=function(t){var e,n=c.getSelectorFromElement(t);return n&&(e=document.querySelector(n)),e||t.parentNode},t._dataApiKeydownHandler=function(n){if(!(/input|textarea/i.test(n.target.tagName)?32===n.which||27!==n.which&&(40!==n.which&&38!==n.which||e(n.target).closest(".dropdown-menu").length):!A.test(n.which))&&!this.disabled&&!e(this).hasClass("disabled")){var i=t._getParentFromElement(this),o=e(i).hasClass("show");if(o||27!==n.which){if(n.preventDefault(),n.stopPropagation(),!o||o&&(27===n.which||32===n.which))return 27===n.which&&e(i.querySelector('[data-toggle="dropdown"]')).trigger("focus"),void e(this).trigger("click");var s=[].slice.call(i.querySelectorAll(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)")).filter((function(t){return e(t).is(":visible")}));if(0!==s.length){var r=s.indexOf(n.target);38===n.which&&r>0&&r--,40===n.which&&r<s.length-1&&r++,r<0&&(r=0),s[r].focus()}}}},o(t,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return I}},{key:"DefaultType",get:function(){return O}}]),t}();e(document).on("keydown.bs.dropdown.data-api",'[data-toggle="dropdown"]',j._dataApiKeydownHandler).on("keydown.bs.dropdown.data-api",".dropdown-menu",j._dataApiKeydownHandler).on("click.bs.dropdown.data-api keyup.bs.dropdown.data-api",j._clearMenus).on("click.bs.dropdown.data-api",'[data-toggle="dropdown"]',(function(t){t.preventDefault(),t.stopPropagation(),j._jQueryInterface.call(e(this),"toggle")})).on("click.bs.dropdown.data-api",".dropdown form",(function(t){t.stopPropagation()})),e.fn[k]=j._jQueryInterface,e.fn[k].Constructor=j,e.fn[k].noConflict=function(){return e.fn[k]=N,j._jQueryInterface};var P=e.fn.modal,x={backdrop:!0,keyboard:!0,focus:!0,show:!0},L={backdrop:"(boolean|string)",keyboard:"boolean",focus:"boolean",show:"boolean"},R=function(){function t(t,e){this._config=this._getConfig(e),this._element=t,this._dialog=t.querySelector(".modal-dialog"),this._backdrop=null,this._isShown=!1,this._isBodyOverflowing=!1,this._ignoreBackdropClick=!1,this._isTransitioning=!1,this._scrollbarWidth=0}var n=t.prototype;return n.toggle=function(t){return this._isShown?this.hide():this.show(t)},n.show=function(t){var n=this;if(!this._isShown&&!this._isTransitioning){e(this._element).hasClass("fade")&&(this._isTransitioning=!0);var i=e.Event("show.bs.modal",{relatedTarget:t});e(this._element).trigger(i),this._isShown||i.isDefaultPrevented()||(this._isShown=!0,this._checkScrollbar(),this._setScrollbar(),this._adjustDialog(),this._setEscapeEvent(),this._setResizeEvent(),e(this._element).on("click.dismiss.bs.modal",'[data-dismiss="modal"]',(function(t){return n.hide(t)})),e(this._dialog).on("mousedown.dismiss.bs.modal",(function(){e(n._element).one("mouseup.dismiss.bs.modal",(function(t){e(t.target).is(n._element)&&(n._ignoreBackdropClick=!0)}))})),this._showBackdrop((function(){return n._showElement(t)})))}},n.hide=function(t){var n=this;if(t&&t.preventDefault(),this._isShown&&!this._isTransitioning){var i=e.Event("hide.bs.modal");if(e(this._element).trigger(i),this._isShown&&!i.isDefaultPrevented()){this._isShown=!1;var o=e(this._element).hasClass("fade");if(o&&(this._isTransitioning=!0),this._setEscapeEvent(),this._setResizeEvent(),e(document).off("focusin.bs.modal"),e(this._element).removeClass("show"),e(this._element).off("click.dismiss.bs.modal"),e(this._dialog).off("mousedown.dismiss.bs.modal"),o){var s=c.getTransitionDurationFromElement(this._element);e(this._element).one(c.TRANSITION_END,(function(t){return n._hideModal(t)})).emulateTransitionEnd(s)}else this._hideModal()}}},n.dispose=function(){[window,this._element,this._dialog].forEach((function(t){return e(t).off(".bs.modal")})),e(document).off("focusin.bs.modal"),e.removeData(this._element,"bs.modal"),this._config=null,this._element=null,this._dialog=null,this._backdrop=null,this._isShown=null,this._isBodyOverflowing=null,this._ignoreBackdropClick=null,this._isTransitioning=null,this._scrollbarWidth=null},n.handleUpdate=function(){this._adjustDialog()},n._getConfig=function(t){return t=a(a({},x),t),c.typeCheckConfig("modal",t,L),t},n._triggerBackdropTransition=function(){var t=this;if("static"===this._config.backdrop){var n=e.Event("hidePrevented.bs.modal");if(e(this._element).trigger(n),n.defaultPrevented)return;this._element.classList.add("modal-static");var i=c.getTransitionDurationFromElement(this._element);e(this._element).one(c.TRANSITION_END,(function(){t._element.classList.remove("modal-static")})).emulateTransitionEnd(i),this._element.focus()}else this.hide()},n._showElement=function(t){var n=this,i=e(this._element).hasClass("fade"),o=this._dialog?this._dialog.querySelector(".modal-body"):null;this._element.parentNode&&this._element.parentNode.nodeType===Node.ELEMENT_NODE||document.body.appendChild(this._element),this._element.style.display="block",this._element.removeAttribute("aria-hidden"),this._element.setAttribute("aria-modal",!0),e(this._dialog).hasClass("modal-dialog-scrollable")&&o?o.scrollTop=0:this._element.scrollTop=0,i&&c.reflow(this._element),e(this._element).addClass("show"),this._config.focus&&this._enforceFocus();var s=e.Event("shown.bs.modal",{relatedTarget:t}),r=function(){n._config.focus&&n._element.focus(),n._isTransitioning=!1,e(n._element).trigger(s)};if(i){var a=c.getTransitionDurationFromElement(this._dialog);e(this._dialog).one(c.TRANSITION_END,r).emulateTransitionEnd(a)}else r()},n._enforceFocus=function(){var t=this;e(document).off("focusin.bs.modal").on("focusin.bs.modal",(function(n){document!==n.target&&t._element!==n.target&&0===e(t._element).has(n.target).length&&t._element.focus()}))},n._setEscapeEvent=function(){var t=this;this._isShown?e(this._element).on("keydown.dismiss.bs.modal",(function(e){t._config.keyboard&&27===e.which?(e.preventDefault(),t.hide()):t._config.keyboard||27!==e.which||t._triggerBackdropTransition()})):this._isShown||e(this._element).off("keydown.dismiss.bs.modal")},n._setResizeEvent=function(){var t=this;this._isShown?e(window).on("resize.bs.modal",(function(e){return t.handleUpdate(e)})):e(window).off("resize.bs.modal")},n._hideModal=function(){var t=this;this._element.style.display="none",this._element.setAttribute("aria-hidden",!0),this._element.removeAttribute("aria-modal"),this._isTransitioning=!1,this._showBackdrop((function(){e(document.body).removeClass("modal-open"),t._resetAdjustments(),t._resetScrollbar(),e(t._element).trigger("hidden.bs.modal")}))},n._removeBackdrop=function(){this._backdrop&&(e(this._backdrop).remove(),this._backdrop=null)},n._showBackdrop=function(t){var n=this,i=e(this._element).hasClass("fade")?"fade":"";if(this._isShown&&this._config.backdrop){if(this._backdrop=document.createElement("div"),this._backdrop.className="modal-backdrop",i&&this._backdrop.classList.add(i),e(this._backdrop).appendTo(document.body),e(this._element).on("click.dismiss.bs.modal",(function(t){n._ignoreBackdropClick?n._ignoreBackdropClick=!1:t.target===t.currentTarget&&n._triggerBackdropTransition()})),i&&c.reflow(this._backdrop),e(this._backdrop).addClass("show"),!t)return;if(!i)return void t();var o=c.getTransitionDurationFromElement(this._backdrop);e(this._backdrop).one(c.TRANSITION_END,t).emulateTransitionEnd(o)}else if(!this._isShown&&this._backdrop){e(this._backdrop).removeClass("show");var s=function(){n._removeBackdrop(),t&&t()};if(e(this._element).hasClass("fade")){var r=c.getTransitionDurationFromElement(this._backdrop);e(this._backdrop).one(c.TRANSITION_END,s).emulateTransitionEnd(r)}else s()}else t&&t()},n._adjustDialog=function(){var t=this._element.scrollHeight>document.documentElement.clientHeight;!this._isBodyOverflowing&&t&&(this._element.style.paddingLeft=this._scrollbarWidth+"px"),this._isBodyOverflowing&&!t&&(this._element.style.paddingRight=this._scrollbarWidth+"px")},n._resetAdjustments=function(){this._element.style.paddingLeft="",this._element.style.paddingRight=""},n._checkScrollbar=function(){var t=document.body.getBoundingClientRect();this._isBodyOverflowing=Math.round(t.left+t.right)<window.innerWidth,this._scrollbarWidth=this._getScrollbarWidth()},n._setScrollbar=function(){var t=this;if(this._isBodyOverflowing){var n=[].slice.call(document.querySelectorAll(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top")),i=[].slice.call(document.querySelectorAll(".sticky-top"));e(n).each((function(n,i){var o=i.style.paddingRight,s=e(i).css("padding-right");e(i).data("padding-right",o).css("padding-right",parseFloat(s)+t._scrollbarWidth+"px")})),e(i).each((function(n,i){var o=i.style.marginRight,s=e(i).css("margin-right");e(i).data("margin-right",o).css("margin-right",parseFloat(s)-t._scrollbarWidth+"px")}));var o=document.body.style.paddingRight,s=e(document.body).css("padding-right");e(document.body).data("padding-right",o).css("padding-right",parseFloat(s)+this._scrollbarWidth+"px")}e(document.body).addClass("modal-open")},n._resetScrollbar=function(){var t=[].slice.call(document.querySelectorAll(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top"));e(t).each((function(t,n){var i=e(n).data("padding-right");e(n).removeData("padding-right"),n.style.paddingRight=i||""}));var n=[].slice.call(document.querySelectorAll(".sticky-top"));e(n).each((function(t,n){var i=e(n).data("margin-right");"undefined"!=typeof i&&e(n).css("margin-right",i).removeData("margin-right")}));var i=e(document.body).data("padding-right");e(document.body).removeData("padding-right"),document.body.style.paddingRight=i||""},n._getScrollbarWidth=function(){var t=document.createElement("div");t.className="modal-scrollbar-measure",document.body.appendChild(t);var e=t.getBoundingClientRect().width-t.clientWidth;return document.body.removeChild(t),e},t._jQueryInterface=function(n,i){return this.each((function(){var o=e(this).data("bs.modal"),s=a(a(a({},x),e(this).data()),"object"==typeof n&&n?n:{});if(o||(o=new t(this,s),e(this).data("bs.modal",o)),"string"==typeof n){if("undefined"==typeof o[n])throw new TypeError('No method named "'+n+'"');o[n](i)}else s.show&&o.show(i)}))},o(t,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return x}}]),t}();e(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',(function(t){var n,i=this,o=c.getSelectorFromElement(this);o&&(n=document.querySelector(o));var s=e(n).data("bs.modal")?"toggle":a(a({},e(n).data()),e(this).data());"A"!==this.tagName&&"AREA"!==this.tagName||t.preventDefault();var r=e(n).one("show.bs.modal",(function(t){t.isDefaultPrevented()||r.one("hidden.bs.modal",(function(){e(i).is(":visible")&&i.focus()}))}));R._jQueryInterface.call(e(n),s,this)})),e.fn.modal=R._jQueryInterface,e.fn.modal.Constructor=R,e.fn.modal.noConflict=function(){return e.fn.modal=P,R._jQueryInterface};var q=["background","cite","href","itemtype","longdesc","poster","src","xlink:href"],F={"*":["class","dir","id","lang","role",/^aria-[\w-]*$/i],a:["target","href","title","rel"],area:[],b:[],br:[],col:[],code:[],div:[],em:[],hr:[],h1:[],h2:[],h3:[],h4:[],h5:[],h6:[],i:[],img:["src","srcset","alt","title","width","height"],li:[],ol:[],p:[],pre:[],s:[],small:[],span:[],sub:[],sup:[],strong:[],u:[],ul:[]},Q=/^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi,B=/^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i;function H(t,e,n){if(0===t.length)return t;if(n&&"function"==typeof n)return n(t);for(var i=(new window.DOMParser).parseFromString(t,"text/html"),o=Object.keys(e),s=[].slice.call(i.body.querySelectorAll("*")),r=function(t,n){var i=s[t],r=i.nodeName.toLowerCase();if(-1===o.indexOf(i.nodeName.toLowerCase()))return i.parentNode.removeChild(i),"continue";var a=[].slice.call(i.attributes),l=[].concat(e["*"]||[],e[r]||[]);a.forEach((function(t){(function(t,e){var n=t.nodeName.toLowerCase();if(-1!==e.indexOf(n))return-1===q.indexOf(n)||Boolean(t.nodeValue.match(Q)||t.nodeValue.match(B));for(var i=e.filter((function(t){return t instanceof RegExp})),o=0,s=i.length;o<s;o++)if(n.match(i[o]))return!0;return!1})(t,l)||i.removeAttribute(t.nodeName)}))},a=0,l=s.length;a<l;a++)r(a);return i.body.innerHTML}var U="tooltip",M=e.fn[U],W=new RegExp("(^|\\s)bs-tooltip\\S+","g"),V=["sanitize","whiteList","sanitizeFn"],z={animation:"boolean",template:"string",title:"(string|element|function)",trigger:"string",delay:"(number|object)",html:"boolean",selector:"(string|boolean)",placement:"(string|function)",offset:"(number|string|function)",container:"(string|element|boolean)",fallbackPlacement:"(string|array)",boundary:"(string|element)",sanitize:"boolean",sanitizeFn:"(null|function)",whiteList:"object",popperConfig:"(null|object)"},K={AUTO:"auto",TOP:"top",RIGHT:"right",BOTTOM:"bottom",LEFT:"left"},X={animation:!0,template:'<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,selector:!1,placement:"top",offset:0,container:!1,fallbackPlacement:"flip",boundary:"scrollParent",sanitize:!0,sanitizeFn:null,whiteList:F,popperConfig:null},Y={HIDE:"hide.bs.tooltip",HIDDEN:"hidden.bs.tooltip",SHOW:"show.bs.tooltip",SHOWN:"shown.bs.tooltip",INSERTED:"inserted.bs.tooltip",CLICK:"click.bs.tooltip",FOCUSIN:"focusin.bs.tooltip",FOCUSOUT:"focusout.bs.tooltip",MOUSEENTER:"mouseenter.bs.tooltip",MOUSELEAVE:"mouseleave.bs.tooltip"},$=function(){function t(t,e){if("undefined"==typeof n)throw new TypeError("Bootstrap's tooltips require Popper.js (https://popper.js.org/)");this._isEnabled=!0,this._timeout=0,this._hoverState="",this._activeTrigger={},this._popper=null,this.element=t,this.config=this._getConfig(e),this.tip=null,this._setListeners()}var i=t.prototype;return i.enable=function(){this._isEnabled=!0},i.disable=function(){this._isEnabled=!1},i.toggleEnabled=function(){this._isEnabled=!this._isEnabled},i.toggle=function(t){if(this._isEnabled)if(t){var n=this.constructor.DATA_KEY,i=e(t.currentTarget).data(n);i||(i=new this.constructor(t.currentTarget,this._getDelegateConfig()),e(t.currentTarget).data(n,i)),i._activeTrigger.click=!i._activeTrigger.click,i._isWithActiveTrigger()?i._enter(null,i):i._leave(null,i)}else{if(e(this.getTipElement()).hasClass("show"))return void this._leave(null,this);this._enter(null,this)}},i.dispose=function(){clearTimeout(this._timeout),e.removeData(this.element,this.constructor.DATA_KEY),e(this.element).off(this.constructor.EVENT_KEY),e(this.element).closest(".modal").off("hide.bs.modal",this._hideModalHandler),this.tip&&e(this.tip).remove(),this._isEnabled=null,this._timeout=null,this._hoverState=null,this._activeTrigger=null,this._popper&&this._popper.destroy(),this._popper=null,this.element=null,this.config=null,this.tip=null},i.show=function(){var t=this;if("none"===e(this.element).css("display"))throw new Error("Please use show on visible elements");var i=e.Event(this.constructor.Event.SHOW);if(this.isWithContent()&&this._isEnabled){e(this.element).trigger(i);var o=c.findShadowRoot(this.element),s=e.contains(null!==o?o:this.element.ownerDocument.documentElement,this.element);if(i.isDefaultPrevented()||!s)return;var r=this.getTipElement(),a=c.getUID(this.constructor.NAME);r.setAttribute("id",a),this.element.setAttribute("aria-describedby",a),this.setContent(),this.config.animation&&e(r).addClass("fade");var l="function"==typeof this.config.placement?this.config.placement.call(this,r,this.element):this.config.placement,h=this._getAttachment(l);this.addAttachmentClass(h);var u=this._getContainer();e(r).data(this.constructor.DATA_KEY,this),e.contains(this.element.ownerDocument.documentElement,this.tip)||e(r).appendTo(u),e(this.element).trigger(this.constructor.Event.INSERTED),this._popper=new n(this.element,r,this._getPopperConfig(h)),e(r).addClass("show"),"ontouchstart"in document.documentElement&&e(document.body).children().on("mouseover",null,e.noop);var d=function(){t.config.animation&&t._fixTransition();var n=t._hoverState;t._hoverState=null,e(t.element).trigger(t.constructor.Event.SHOWN),"out"===n&&t._leave(null,t)};if(e(this.tip).hasClass("fade")){var f=c.getTransitionDurationFromElement(this.tip);e(this.tip).one(c.TRANSITION_END,d).emulateTransitionEnd(f)}else d()}},i.hide=function(t){var n=this,i=this.getTipElement(),o=e.Event(this.constructor.Event.HIDE),s=function(){"show"!==n._hoverState&&i.parentNode&&i.parentNode.removeChild(i),n._cleanTipClass(),n.element.removeAttribute("aria-describedby"),e(n.element).trigger(n.constructor.Event.HIDDEN),null!==n._popper&&n._popper.destroy(),t&&t()};if(e(this.element).trigger(o),!o.isDefaultPrevented()){if(e(i).removeClass("show"),"ontouchstart"in document.documentElement&&e(document.body).children().off("mouseover",null,e.noop),this._activeTrigger.click=!1,this._activeTrigger.focus=!1,this._activeTrigger.hover=!1,e(this.tip).hasClass("fade")){var r=c.getTransitionDurationFromElement(i);e(i).one(c.TRANSITION_END,s).emulateTransitionEnd(r)}else s();this._hoverState=""}},i.update=function(){null!==this._popper&&this._popper.scheduleUpdate()},i.isWithContent=function(){return Boolean(this.getTitle())},i.addAttachmentClass=function(t){e(this.getTipElement()).addClass("bs-tooltip-"+t)},i.getTipElement=function(){return this.tip=this.tip||e(this.config.template)[0],this.tip},i.setContent=function(){var t=this.getTipElement();this.setElementContent(e(t.querySelectorAll(".tooltip-inner")),this.getTitle()),e(t).removeClass("fade show")},i.setElementContent=function(t,n){"object"!=typeof n||!n.nodeType&&!n.jquery?this.config.html?(this.config.sanitize&&(n=H(n,this.config.whiteList,this.config.sanitizeFn)),t.html(n)):t.text(n):this.config.html?e(n).parent().is(t)||t.empty().append(n):t.text(e(n).text())},i.getTitle=function(){var t=this.element.getAttribute("data-original-title");return t||(t="function"==typeof this.config.title?this.config.title.call(this.element):this.config.title),t},i._getPopperConfig=function(t){var e=this;return a(a({},{placement:t,modifiers:{offset:this._getOffset(),flip:{behavior:this.config.fallbackPlacement},arrow:{element:".arrow"},preventOverflow:{boundariesElement:this.config.boundary}},onCreate:function(t){t.originalPlacement!==t.placement&&e._handlePopperPlacementChange(t)},onUpdate:function(t){return e._handlePopperPlacementChange(t)}}),this.config.popperConfig)},i._getOffset=function(){var t=this,e={};return"function"==typeof this.config.offset?e.fn=function(e){return e.offsets=a(a({},e.offsets),t.config.offset(e.offsets,t.element)||{}),e}:e.offset=this.config.offset,e},i._getContainer=function(){return!1===this.config.container?document.body:c.isElement(this.config.container)?e(this.config.container):e(document).find(this.config.container)},i._getAttachment=function(t){return K[t.toUpperCase()]},i._setListeners=function(){var t=this;this.config.trigger.split(" ").forEach((function(n){if("click"===n)e(t.element).on(t.constructor.Event.CLICK,t.config.selector,(function(e){return t.toggle(e)}));else if("manual"!==n){var i="hover"===n?t.constructor.Event.MOUSEENTER:t.constructor.Event.FOCUSIN,o="hover"===n?t.constructor.Event.MOUSELEAVE:t.constructor.Event.FOCUSOUT;e(t.element).on(i,t.config.selector,(function(e){return t._enter(e)})).on(o,t.config.selector,(function(e){return t._leave(e)}))}})),this._hideModalHandler=function(){t.element&&t.hide()},e(this.element).closest(".modal").on("hide.bs.modal",this._hideModalHandler),this.config.selector?this.config=a(a({},this.config),{},{trigger:"manual",selector:""}):this._fixTitle()},i._fixTitle=function(){var t=typeof this.element.getAttribute("data-original-title");(this.element.getAttribute("title")||"string"!==t)&&(this.element.setAttribute("data-original-title",this.element.getAttribute("title")||""),this.element.setAttribute("title",""))},i._enter=function(t,n){var i=this.constructor.DATA_KEY;(n=n||e(t.currentTarget).data(i))||(n=new this.constructor(t.currentTarget,this._getDelegateConfig()),e(t.currentTarget).data(i,n)),t&&(n._activeTrigger["focusin"===t.type?"focus":"hover"]=!0),e(n.getTipElement()).hasClass("show")||"show"===n._hoverState?n._hoverState="show":(clearTimeout(n._timeout),n._hoverState="show",n.config.delay&&n.config.delay.show?n._timeout=setTimeout((function(){"show"===n._hoverState&&n.show()}),n.config.delay.show):n.show())},i._leave=function(t,n){var i=this.constructor.DATA_KEY;(n=n||e(t.currentTarget).data(i))||(n=new this.constructor(t.currentTarget,this._getDelegateConfig()),e(t.currentTarget).data(i,n)),t&&(n._activeTrigger["focusout"===t.type?"focus":"hover"]=!1),n._isWithActiveTrigger()||(clearTimeout(n._timeout),n._hoverState="out",n.config.delay&&n.config.delay.hide?n._timeout=setTimeout((function(){"out"===n._hoverState&&n.hide()}),n.config.delay.hide):n.hide())},i._isWithActiveTrigger=function(){for(var t in this._activeTrigger)if(this._activeTrigger[t])return!0;return!1},i._getConfig=function(t){var n=e(this.element).data();return Object.keys(n).forEach((function(t){-1!==V.indexOf(t)&&delete n[t]})),"number"==typeof(t=a(a(a({},this.constructor.Default),n),"object"==typeof t&&t?t:{})).delay&&(t.delay={show:t.delay,hide:t.delay}),"number"==typeof t.title&&(t.title=t.title.toString()),"number"==typeof t.content&&(t.content=t.content.toString()),c.typeCheckConfig(U,t,this.constructor.DefaultType),t.sanitize&&(t.template=H(t.template,t.whiteList,t.sanitizeFn)),t},i._getDelegateConfig=function(){var t={};if(this.config)for(var e in this.config)this.constructor.Default[e]!==this.config[e]&&(t[e]=this.config[e]);return t},i._cleanTipClass=function(){var t=e(this.getTipElement()),n=t.attr("class").match(W);null!==n&&n.length&&t.removeClass(n.join(""))},i._handlePopperPlacementChange=function(t){this.tip=t.instance.popper,this._cleanTipClass(),this.addAttachmentClass(this._getAttachment(t.placement))},i._fixTransition=function(){var t=this.getTipElement(),n=this.config.animation;null===t.getAttribute("x-placement")&&(e(t).removeClass("fade"),this.config.animation=!1,this.hide(),this.show(),this.config.animation=n)},t._jQueryInterface=function(n){return this.each((function(){var i=e(this).data("bs.tooltip"),o="object"==typeof n&&n;if((i||!/dispose|hide/.test(n))&&(i||(i=new t(this,o),e(this).data("bs.tooltip",i)),"string"==typeof n)){if("undefined"==typeof i[n])throw new TypeError('No method named "'+n+'"');i[n]()}}))},o(t,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return X}},{key:"NAME",get:function(){return U}},{key:"DATA_KEY",get:function(){return"bs.tooltip"}},{key:"Event",get:function(){return Y}},{key:"EVENT_KEY",get:function(){return".bs.tooltip"}},{key:"DefaultType",get:function(){return z}}]),t}();e.fn[U]=$._jQueryInterface,e.fn[U].Constructor=$,e.fn[U].noConflict=function(){return e.fn[U]=M,$._jQueryInterface};var J="popover",G=e.fn[J],Z=new RegExp("(^|\\s)bs-popover\\S+","g"),tt=a(a({},$.Default),{},{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'}),et=a(a({},$.DefaultType),{},{content:"(string|element|function)"}),nt={HIDE:"hide.bs.popover",HIDDEN:"hidden.bs.popover",SHOW:"show.bs.popover",SHOWN:"shown.bs.popover",INSERTED:"inserted.bs.popover",CLICK:"click.bs.popover",FOCUSIN:"focusin.bs.popover",FOCUSOUT:"focusout.bs.popover",MOUSEENTER:"mouseenter.bs.popover",MOUSELEAVE:"mouseleave.bs.popover"},it=function(t){var n,i;function s(){return t.apply(this,arguments)||this}i=t,(n=s).prototype=Object.create(i.prototype),n.prototype.constructor=n,n.__proto__=i;var r=s.prototype;return r.isWithContent=function(){return this.getTitle()||this._getContent()},r.addAttachmentClass=function(t){e(this.getTipElement()).addClass("bs-popover-"+t)},r.getTipElement=function(){return this.tip=this.tip||e(this.config.template)[0],this.tip},r.setContent=function(){var t=e(this.getTipElement());this.setElementContent(t.find(".popover-header"),this.getTitle());var n=this._getContent();"function"==typeof n&&(n=n.call(this.element)),this.setElementContent(t.find(".popover-body"),n),t.removeClass("fade show")},r._getContent=function(){return this.element.getAttribute("data-content")||this.config.content},r._cleanTipClass=function(){var t=e(this.getTipElement()),n=t.attr("class").match(Z);null!==n&&n.length>0&&t.removeClass(n.join(""))},s._jQueryInterface=function(t){return this.each((function(){var n=e(this).data("bs.popover"),i="object"==typeof t?t:null;if((n||!/dispose|hide/.test(t))&&(n||(n=new s(this,i),e(this).data("bs.popover",n)),"string"==typeof t)){if("undefined"==typeof n[t])throw new TypeError('No method named "'+t+'"');n[t]()}}))},o(s,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return tt}},{key:"NAME",get:function(){return J}},{key:"DATA_KEY",get:function(){return"bs.popover"}},{key:"Event",get:function(){return nt}},{key:"EVENT_KEY",get:function(){return".bs.popover"}},{key:"DefaultType",get:function(){return et}}]),s}($);e.fn[J]=it._jQueryInterface,e.fn[J].Constructor=it,e.fn[J].noConflict=function(){return e.fn[J]=G,it._jQueryInterface};var ot="scrollspy",st=e.fn[ot],rt={offset:10,method:"auto",target:""},at={offset:"number",method:"string",target:"(string|element)"},lt=function(){function t(t,n){var i=this;this._element=t,this._scrollElement="BODY"===t.tagName?window:t,this._config=this._getConfig(n),this._selector=this._config.target+" .nav-link,"+this._config.target+" .list-group-item,"+this._config.target+" .dropdown-item",this._offsets=[],this._targets=[],this._activeTarget=null,this._scrollHeight=0,e(this._scrollElement).on("scroll.bs.scrollspy",(function(t){return i._process(t)})),this.refresh(),this._process()}var n=t.prototype;return n.refresh=function(){var t=this,n=this._scrollElement===this._scrollElement.window?"offset":"position",i="auto"===this._config.method?n:this._config.method,o="position"===i?this._getScrollTop():0;this._offsets=[],this._targets=[],this._scrollHeight=this._getScrollHeight(),[].slice.call(document.querySelectorAll(this._selector)).map((function(t){var n,s=c.getSelectorFromElement(t);if(s&&(n=document.querySelector(s)),n){var r=n.getBoundingClientRect();if(r.width||r.height)return[e(n)[i]().top+o,s]}return null})).filter((function(t){return t})).sort((function(t,e){return t[0]-e[0]})).forEach((function(e){t._offsets.push(e[0]),t._targets.push(e[1])}))},n.dispose=function(){e.removeData(this._element,"bs.scrollspy"),e(this._scrollElement).off(".bs.scrollspy"),this._element=null,this._scrollElement=null,this._config=null,this._selector=null,this._offsets=null,this._targets=null,this._activeTarget=null,this._scrollHeight=null},n._getConfig=function(t){if("string"!=typeof(t=a(a({},rt),"object"==typeof t&&t?t:{})).target&&c.isElement(t.target)){var n=e(t.target).attr("id");n||(n=c.getUID(ot),e(t.target).attr("id",n)),t.target="#"+n}return c.typeCheckConfig(ot,t,at),t},n._getScrollTop=function(){return this._scrollElement===window?this._scrollElement.pageYOffset:this._scrollElement.scrollTop},n._getScrollHeight=function(){return this._scrollElement.scrollHeight||Math.max(document.body.scrollHeight,document.documentElement.scrollHeight)},n._getOffsetHeight=function(){return this._scrollElement===window?window.innerHeight:this._scrollElement.getBoundingClientRect().height},n._process=function(){var t=this._getScrollTop()+this._config.offset,e=this._getScrollHeight(),n=this._config.offset+e-this._getOffsetHeight();if(this._scrollHeight!==e&&this.refresh(),t>=n){var i=this._targets[this._targets.length-1];this._activeTarget!==i&&this._activate(i)}else{if(this._activeTarget&&t<this._offsets[0]&&this._offsets[0]>0)return this._activeTarget=null,void this._clear();for(var o=this._offsets.length;o--;){this._activeTarget!==this._targets[o]&&t>=this._offsets[o]&&("undefined"==typeof this._offsets[o+1]||t<this._offsets[o+1])&&this._activate(this._targets[o])}}},n._activate=function(t){this._activeTarget=t,this._clear();var n=this._selector.split(",").map((function(e){return e+'[data-target="'+t+'"],'+e+'[href="'+t+'"]'})),i=e([].slice.call(document.querySelectorAll(n.join(","))));i.hasClass("dropdown-item")?(i.closest(".dropdown").find(".dropdown-toggle").addClass("active"),i.addClass("active")):(i.addClass("active"),i.parents(".nav, .list-group").prev(".nav-link, .list-group-item").addClass("active"),i.parents(".nav, .list-group").prev(".nav-item").children(".nav-link").addClass("active")),e(this._scrollElement).trigger("activate.bs.scrollspy",{relatedTarget:t})},n._clear=function(){[].slice.call(document.querySelectorAll(this._selector)).filter((function(t){return t.classList.contains("active")})).forEach((function(t){return t.classList.remove("active")}))},t._jQueryInterface=function(n){return this.each((function(){var i=e(this).data("bs.scrollspy");if(i||(i=new t(this,"object"==typeof n&&n),e(this).data("bs.scrollspy",i)),"string"==typeof n){if("undefined"==typeof i[n])throw new TypeError('No method named "'+n+'"');i[n]()}}))},o(t,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"Default",get:function(){return rt}}]),t}();e(window).on("load.bs.scrollspy.data-api",(function(){for(var t=[].slice.call(document.querySelectorAll('[data-spy="scroll"]')),n=t.length;n--;){var i=e(t[n]);lt._jQueryInterface.call(i,i.data())}})),e.fn[ot]=lt._jQueryInterface,e.fn[ot].Constructor=lt,e.fn[ot].noConflict=function(){return e.fn[ot]=st,lt._jQueryInterface};var ct=e.fn.tab,ht=function(){function t(t){this._element=t}var n=t.prototype;return n.show=function(){var t=this;if(!(this._element.parentNode&&this._element.parentNode.nodeType===Node.ELEMENT_NODE&&e(this._element).hasClass("active")||e(this._element).hasClass("disabled"))){var n,i,o=e(this._element).closest(".nav, .list-group")[0],s=c.getSelectorFromElement(this._element);if(o){var r="UL"===o.nodeName||"OL"===o.nodeName?"> li > .active":".active";i=(i=e.makeArray(e(o).find(r)))[i.length-1]}var a=e.Event("hide.bs.tab",{relatedTarget:this._element}),l=e.Event("show.bs.tab",{relatedTarget:i});if(i&&e(i).trigger(a),e(this._element).trigger(l),!l.isDefaultPrevented()&&!a.isDefaultPrevented()){s&&(n=document.querySelector(s)),this._activate(this._element,o);var h=function(){var n=e.Event("hidden.bs.tab",{relatedTarget:t._element}),o=e.Event("shown.bs.tab",{relatedTarget:i});e(i).trigger(n),e(t._element).trigger(o)};n?this._activate(n,n.parentNode,h):h()}}},n.dispose=function(){e.removeData(this._element,"bs.tab"),this._element=null},n._activate=function(t,n,i){var o=this,s=(!n||"UL"!==n.nodeName&&"OL"!==n.nodeName?e(n).children(".active"):e(n).find("> li > .active"))[0],r=i&&s&&e(s).hasClass("fade"),a=function(){return o._transitionComplete(t,s,i)};if(s&&r){var l=c.getTransitionDurationFromElement(s);e(s).removeClass("show").one(c.TRANSITION_END,a).emulateTransitionEnd(l)}else a()},n._transitionComplete=function(t,n,i){if(n){e(n).removeClass("active");var o=e(n.parentNode).find("> .dropdown-menu .active")[0];o&&e(o).removeClass("active"),"tab"===n.getAttribute("role")&&n.setAttribute("aria-selected",!1)}if(e(t).addClass("active"),"tab"===t.getAttribute("role")&&t.setAttribute("aria-selected",!0),c.reflow(t),t.classList.contains("fade")&&t.classList.add("show"),t.parentNode&&e(t.parentNode).hasClass("dropdown-menu")){var s=e(t).closest(".dropdown")[0];if(s){var r=[].slice.call(s.querySelectorAll(".dropdown-toggle"));e(r).addClass("active")}t.setAttribute("aria-expanded",!0)}i&&i()},t._jQueryInterface=function(n){return this.each((function(){var i=e(this),o=i.data("bs.tab");if(o||(o=new t(this),i.data("bs.tab",o)),"string"==typeof n){if("undefined"==typeof o[n])throw new TypeError('No method named "'+n+'"');o[n]()}}))},o(t,null,[{key:"VERSION",get:function(){return"4.5.0"}}]),t}();e(document).on("click.bs.tab.data-api",'[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]',(function(t){t.preventDefault(),ht._jQueryInterface.call(e(this),"show")})),e.fn.tab=ht._jQueryInterface,e.fn.tab.Constructor=ht,e.fn.tab.noConflict=function(){return e.fn.tab=ct,ht._jQueryInterface};var ut=e.fn.toast,dt={animation:"boolean",autohide:"boolean",delay:"number"},ft={animation:!0,autohide:!0,delay:500},gt=function(){function t(t,e){this._element=t,this._config=this._getConfig(e),this._timeout=null,this._setListeners()}var n=t.prototype;return n.show=function(){var t=this,n=e.Event("show.bs.toast");if(e(this._element).trigger(n),!n.isDefaultPrevented()){this._config.animation&&this._element.classList.add("fade");var i=function(){t._element.classList.remove("showing"),t._element.classList.add("show"),e(t._element).trigger("shown.bs.toast"),t._config.autohide&&(t._timeout=setTimeout((function(){t.hide()}),t._config.delay))};if(this._element.classList.remove("hide"),c.reflow(this._element),this._element.classList.add("showing"),this._config.animation){var o=c.getTransitionDurationFromElement(this._element);e(this._element).one(c.TRANSITION_END,i).emulateTransitionEnd(o)}else i()}},n.hide=function(){if(this._element.classList.contains("show")){var t=e.Event("hide.bs.toast");e(this._element).trigger(t),t.isDefaultPrevented()||this._close()}},n.dispose=function(){clearTimeout(this._timeout),this._timeout=null,this._element.classList.contains("show")&&this._element.classList.remove("show"),e(this._element).off("click.dismiss.bs.toast"),e.removeData(this._element,"bs.toast"),this._element=null,this._config=null},n._getConfig=function(t){return t=a(a(a({},ft),e(this._element).data()),"object"==typeof t&&t?t:{}),c.typeCheckConfig("toast",t,this.constructor.DefaultType),t},n._setListeners=function(){var t=this;e(this._element).on("click.dismiss.bs.toast",'[data-dismiss="toast"]',(function(){return t.hide()}))},n._close=function(){var t=this,n=function(){t._element.classList.add("hide"),e(t._element).trigger("hidden.bs.toast")};if(this._element.classList.remove("show"),this._config.animation){var i=c.getTransitionDurationFromElement(this._element);e(this._element).one(c.TRANSITION_END,n).emulateTransitionEnd(i)}else n()},t._jQueryInterface=function(n){return this.each((function(){var i=e(this),o=i.data("bs.toast");if(o||(o=new t(this,"object"==typeof n&&n),i.data("bs.toast",o)),"string"==typeof n){if("undefined"==typeof o[n])throw new TypeError('No method named "'+n+'"');o[n](this)}}))},o(t,null,[{key:"VERSION",get:function(){return"4.5.0"}},{key:"DefaultType",get:function(){return dt}},{key:"Default",get:function(){return ft}}]),t}();e.fn.toast=gt._jQueryInterface,e.fn.toast.Constructor=gt,e.fn.toast.noConflict=function(){return e.fn.toast=ut,gt._jQueryInterface},t.Alert=d,t.Button=g,t.Carousel=E,t.Collapse=D,t.Dropdown=j,t.Modal=R,t.Popover=it,t.Scrollspy=lt,t.Tab=ht,t.Toast=gt,t.Tooltip=$,t.Util=c,Object.defineProperty(t,"__esModule",{value:!0})}));
//# sourceMappingURL=bootstrap.min.js.map
	</script>


	<script>
        "use strict";function menulayout(){resetlayout();var e=$(window)[0].innerWidth;$("#mobile-collapse").on("click",function(o){e>991?$(".pcoded-navbar:not(.theme-horizontal)").toggleClass("navbar-collapsed"):($(".pcoded-navbar").toggleClass("mob-open"),o.stopPropagation())}),$(".pcoded-navbar").on("click tap",function(e){e.stopPropagation()}),$(".pcoded-main-container,.pcoded-header").on("click",function(){e<992&&1==$(".pcoded-navbar").hasClass("mob-open")&&($(".pcoded-navbar").removeClass("mob-open"),$("#mobile-collapse,#mobile-collapse1").removeClass("on"))}),e<992?$(".pcoded-navbar").hasClass("theme-horizontal")&&($(".pcoded-navbar").addClass("theme-horizontal-dis"),$(".pcoded-navbar").removeClass("theme-horizontal")):$(".pcoded-navbar").hasClass("theme-horizontal-dis")&&($(".pcoded-navbar").addClass("theme-horizontal"),$(".pcoded-navbar").removeClass("theme-horizontal-dis"))}function resetlayout(){$("#mobile-collapse").off("click"),$("#mobile-collapse").off("hover"),$(".pcoded-navbar:not(.theme-horizontal)").removeClass("navbar-collapsed")}function togglemenu(){}function toggleFullScreen(){$(window).height();document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement?document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen&&document.webkitCancelFullScreen():document.documentElement.requestFullscreen?document.documentElement.requestFullscreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullscreen&&document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT),$(".full-screen > i").toggleClass("icon-maximize"),$(".full-screen > i").toggleClass("icon-minimize")}$(document).ready(function(){function e(e){var o=0;try{o=e.attr("placeholder").length}catch(e){o=0}e.val().length>0||o>0?e.parent(".form-group").addClass("fill"):e.parent(".form-group").removeClass("fill")}$('[data-toggle="tooltip"]').tooltip(),$('[data-toggle="popover"]').popover();var o=$(window)[0].innerWidth;if($(".to-do-list input[type=checkbox]").on("click",function(){$(this).prop("checked")?$(this).parent().addClass("done-task"):$(this).parent().removeClass("done-task")}),$(".mobile-menu").on("click",function(){$(this).toggleClass("on")}),$(".mob-toggler").on("click",function(){$(".pcoded-header > .collapse,.pcoded-header > .container > .collapse").toggleClass("d-flex")}),$(".search-btn").on("click",function(){$(this);$(".main-search").addClass("open"),o<=991?$(".main-search .form-control").css({width:"90px"}):$(".main-search .form-control").css({width:"150px"})}),$(".search-close").on("click",function(){$(this);$(".main-search").removeClass("open"),$(".main-search .form-control").css({width:"0"})}),$(".pop-search").on("click",function(){$(".search-bar").slideToggle("fast"),$(".search-bar input").focus()}),$(".search-bar .close").on("click",function(){$(".search-bar").slideToggle("fast")}),o<=991&&($(".main-search").addClass("open"),$(".main-search .form-control").css({width:"100px"})),$(".noti-body")[0]){new PerfectScrollbar(".notification  .noti-body",{wheelSpeed:.5,swipeEasing:0,suppressScrollX:!0,wheelPropagation:1,minScrollbarLength:40})}if(!$(".pcoded-navbar").hasClass("theme-horizontal")){var o=$(window)[0].innerWidth;if($(".navbar-content")[0])if(o<992||$(".pcoded-navbar").hasClass("menupos-static")){new PerfectScrollbar(".navbar-content",{wheelSpeed:.5,swipeEasing:0,suppressScrollX:!0,wheelPropagation:1,minScrollbarLength:40})}else{new PerfectScrollbar(".navbar-content",{wheelSpeed:.5,swipeEasing:0,suppressScrollX:!0,wheelPropagation:1,minScrollbarLength:40})}}$(".card-option .close-card").on("click",function(){var e=$(this);e.parents(".card").addClass("anim-close-card"),e.parents(".card").animate({"margin-bottom":"0"}),setTimeout(function(){e.parents(".card").children(".card-block").slideToggle(),e.parents(".card").children(".card-body").slideToggle(),e.parents(".card").children(".card-header").slideToggle(),e.parents(".card").children(".card-footer").slideToggle()},600),setTimeout(function(){e.parents(".card").remove()},1500)}),$(".card-option .reload-card").on("click",function(){var e=$(this);e.parents(".card").addClass("card-load"),e.parents(".card").append('<div class="card-loader"><i class="pct-loader1 anim-rotate"></div>'),setTimeout(function(){e.parents(".card").children(".card-loader").remove(),e.parents(".card").removeClass("card-load")},3e3)}),$(".card-option .minimize-card").on("click",function(){var e=$(this),o=$(e.parents(".card"));$(o).children(".card-block").slideToggle(),$(o).children(".card-body").slideToggle();o.hasClass("full-card")||$(o).css("height","auto"),$(this).children("a").children("span").toggle()}),$(".card-option .full-card").on("click",function(){var e=$(this),o=$(e.parents(".card"));if(o.toggleClass("full-card"),$(this).children("a").children("span").toggle(),o.hasClass("full-card")){$("body").css("overflow","hidden"),$("html,body").animate({scrollTop:0},1e3);var d=$(o,this),n=d.offset(),s=n.left,i=n.top,r=$(window).height(),a=$(window).width();o.animate({marginLeft:s-2*s,marginTop:i-2*i,width:a,height:r})}else $("body").css("overflow",""),o.removeAttr("style"),setTimeout(function(){$("html,body").animate({scrollTop:$(o).offset().top-70},500)},400)}),$(".event-btn").each(function(){$(this).children(".spinner-border").hide(),$(this).children(".spinner-grow").hide(),$(this).children(".load-text").hide()}),$(".event-btn").on("click",function(){var e=$(this);e.children(".spinner-border").show(),e.children(".spinner-grow").show(),e.children(".load-text").show(),e.children(".btn-text").hide(),e.attr("disabled","true"),setTimeout(function(){e.children(".spinner-border").hide(),e.children(".spinner-grow").hide(),e.children(".load-text").hide(),e.children(".btn-text").show(),e.removeAttr("disabled")},3e3)}),$(".form-control").each(function(){e($(this))}),$(".form-control").on("blur",function(){e($(this))}),$(".form-control").on("focus",function(){$(this).parent(".form-group").addClass("fill")}),setTimeout(function(){$(".loader-bg").fadeOut("slow",function(){$(this).remove()})},400),menulayout()}),$(window).resize(function(){menulayout(),($(".pcoded-navbar").hasClass("theme-horizontal")||$(".pcoded-navbar").hasClass("theme-horizontal-dis"))&&menulayout()}),$(window).scroll(function(){}),$.fn.pcodedmenu=function(e){var o=(this.attr("id"),{themelayout:"vertical",MenuTrigger:"click",SubMenuTrigger:"click"}),e=$.extend({},o,e),d={PcodedMenuInit:function(){d.HandleMenuTrigger(),d.HandleSubMenuTrigger(),d.HandleOffset()},HandleSubMenuTrigger:function(){var o=$(window),d=o.width();if(1==$(".pcoded-navbar").hasClass("theme-horizontal")||1==$(".pcoded-navbar").hasClass("theme-horizontal-dis"))if(d>=992){var n=$(".pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-submenu > li.pcoded-hasmenu");n.off("click").off("mouseenter mouseleave").hover(function(){$(this).addClass("pcoded-trigger").addClass("active")},function(){$(this).removeClass("pcoded-trigger").removeClass("active")})}else{var n=$(".pcoded-navbar.theme-horizontal-dis .pcoded-inner-navbar .pcoded-submenu > li > .pcoded-submenu > li");n.off("mouseenter mouseleave").off("click").on("click",function(e){e.stopPropagation();var o=$(this).closest(".pcoded-submenu").length;console.log("123123"),0===o?$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($("pcoded-navbar.theme-horizontal-dis .pcoded-inner-navbar > .pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown()):$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($("pcoded-navbar.theme-horizontal-dis .pcoded-inner-navbar > .pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-submenu").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown())})}switch(e.SubMenuTrigger){case"click":$(".pcoded-navbar .pcoded-hasmenu").removeClass("is-hover"),$(".pcoded-inner-navbar > .pcoded-hasmenu > .pcoded-submenu > li > .pcoded-submenu > li").on("click",function(e){e.stopPropagation(),0===$(this).closest(".pcoded-submenu").length?$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($(".pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown()):$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($(".pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-submenu").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown())}),$(".pcoded-inner-navbar > .pcoded-hasmenu > .pcoded-submenu > li").on("click",function(e){e.stopPropagation(),0===$(this).closest(".pcoded-submenu").length?$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($(".pcoded-hasmenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown()):$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($(".pcoded-hasmenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-submenu").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown())})}},HandleMenuTrigger:function(){if($(window).width()>=992){if(1==$(".pcoded-navbar").hasClass("theme-horizontal")){var o=$(".theme-horizontal .pcoded-inner-navbar > li");o.off("click").off("mouseenter mouseleave").hover(function(){if($(this).addClass("pcoded-trigger").addClass("active"),$(".pcoded-submenu",this).length){var e=$(".pcoded-submenu:first",this),o=e.offset(),d=o.left,n=e.width();if($(window).height(),d+n<=$(window).width())$(this).removeClass("edge");else{var s=$(".sidenav-inner").attr("style");$(".sidenav-inner").css({"margin-left":parseInt(s.slice(12,s.length-3))-80}),$(".sidenav-horizontal-prev").removeClass("disabled")}}},function(){$(this).removeClass("pcoded-trigger").removeClass("active")})}}else{var o=$(".pcoded-navbar.theme-horizontal-dis .pcoded-inner-navbar > li");o.off("mouseenter mouseleave").off("click").on("click",function(){$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($("li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown())})}switch(e.MenuTrigger){case"click":$(".pcoded-navbar").removeClass("is-hover"),$(".pcoded-inner-navbar > li:not(.pcoded-menu-caption) ").on("click",function(){$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($("li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown())})}},HandleOffset:function(){switch(e.themelayout){case"horizontal":"hover"===e.SubMenuTrigger?$("li.pcoded-hasmenu").on("mouseenter mouseleave",function(e){if($(".pcoded-submenu",this).length){var o=$(".pcoded-submenu:first",this),d=o.offset(),n=d.left,s=o.width();$(window).height();n+s<=$(window).width()?$(this).removeClass("edge"):$(this).addClass("edge")}}):$("li.pcoded-hasmenu").on("click",function(e){if(e.preventDefault(),$(".pcoded-submenu",this).length){var o=$(".pcoded-submenu:first",this),d=o.offset(),n=d.left,s=o.width();$(window).height();n+s<=$(window).width()||$(this).toggleClass("edge")}})}}};d.PcodedMenuInit()},$("#pcoded").pcodedmenu({MenuTrigger:"click",SubMenuTrigger:"click"}),$(".pcoded-navbar .close").on("click",function(){$(this).parents(".card").fadeOut("slow").remove()}),$(".pcoded-navbar .pcoded-inner-navbar a").each(function(){var e=window.location.href.split(/[?#]/)[0];$("body").hasClass("layout-14")||this.href==e&&""!=$(this).attr("href")&&($(this).parent("li").addClass("active"),$(".pcoded-navbar").hasClass("theme-horizontal")||($(this).parent("li").parent().parent(".pcoded-hasmenu").addClass("active").addClass("pcoded-trigger"),$(this).parent("li").parent().parent(".pcoded-hasmenu").parent().parent(".pcoded-hasmenu").addClass("active").addClass("pcoded-trigger")),$(this).parent("li").parent().parent(".sidelink").addClass("active"),$(this).parent("li").parent().parent().parent().parent(".sidelink").addClass("active"),$(this).parent("li").parent().parent().parent().parent().parent().parent(".sidelink").addClass("active"))}),$(window).scroll(function(){$(".pcoded-header").hasClass("headerpos-fixed")||($(this).scrollTop()>60?($(".pcoded-navbar.menupos-fixed").css("position","fixed"),$(".pcoded-navbar.menupos-fixed").css("transition","none"),$(".pcoded-navbar.menupos-fixed").css("margin-top","0px")):($(".pcoded-navbar.menupos-fixed").removeAttr("style"),$(".pcoded-navbar.menupos-fixed").css("position","absolute"),$(".pcoded-navbar.menupos-fixed").css("margin-top","60px"))),$("body").hasClass("box-layout")&&($(this).scrollTop()>60?($(".pcoded-navbar").css("position","fixed"),$(".pcoded-navbar").css("transition","none"),$(".pcoded-navbar").css("margin-top","0px"),$(".pcoded-navbar").css("border-radius","0px")):($(".pcoded-navbar").removeAttr("style"),$(".pcoded-navbar").css("position","absolute"),$(".pcoded-navbar").css("margin-top","60px")))}),$.ripple(".btn, .pcoded-navbar a,.pcoded-header .navbar-nav > li > .dropdown > a,.page-link, .nav .nav-link",{debug:!1,on:"mousedown",opacity:.4,color:"auto",multi:!1,duration:.7,rate:function(e){return e},easing:"linear"}),$("#more-details").on("click",function(){$("#nav-user-link").slideToggle()});
	</script>


	<script>
       "use strict";function menulayout(){resetlayout();var e=$(window)[0].innerWidth;$("#mobile-collapse").on("click",function(o){e>991?$(".pcoded-navbar:not(.theme-horizontal)").toggleClass("navbar-collapsed"):($(".pcoded-navbar").toggleClass("mob-open"),o.stopPropagation())}),$(".pcoded-navbar").on("click tap",function(e){e.stopPropagation()}),$(".pcoded-main-container,.pcoded-header").on("click",function(){e<992&&1==$(".pcoded-navbar").hasClass("mob-open")&&($(".pcoded-navbar").removeClass("mob-open"),$("#mobile-collapse,#mobile-collapse1").removeClass("on"))}),e<992?$(".pcoded-navbar").hasClass("theme-horizontal")&&($(".pcoded-navbar").addClass("theme-horizontal-dis"),$(".pcoded-navbar").removeClass("theme-horizontal")):$(".pcoded-navbar").hasClass("theme-horizontal-dis")&&($(".pcoded-navbar").addClass("theme-horizontal"),$(".pcoded-navbar").removeClass("theme-horizontal-dis"))}function resetlayout(){$("#mobile-collapse").off("click"),$("#mobile-collapse").off("hover"),$(".pcoded-navbar:not(.theme-horizontal)").removeClass("navbar-collapsed")}function togglemenu(){}function toggleFullScreen(){$(window).height();document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement?document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen&&document.webkitCancelFullScreen():document.documentElement.requestFullscreen?document.documentElement.requestFullscreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullscreen&&document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT),$(".full-screen > i").toggleClass("icon-maximize"),$(".full-screen > i").toggleClass("icon-minimize")}$(document).ready(function(){function e(e){var o=0;try{o=e.attr("placeholder").length}catch(e){o=0}e.val().length>0||o>0?e.parent(".form-group").addClass("fill"):e.parent(".form-group").removeClass("fill")}$('[data-toggle="tooltip"]').tooltip(),$('[data-toggle="popover"]').popover();var o=$(window)[0].innerWidth;if($(".to-do-list input[type=checkbox]").on("click",function(){$(this).prop("checked")?$(this).parent().addClass("done-task"):$(this).parent().removeClass("done-task")}),$(".mobile-menu").on("click",function(){$(this).toggleClass("on")}),$(".mob-toggler").on("click",function(){$(".pcoded-header > .collapse,.pcoded-header > .container > .collapse").toggleClass("d-flex")}),$(".search-btn").on("click",function(){$(this);$(".main-search").addClass("open"),o<=991?$(".main-search .form-control").css({width:"90px"}):$(".main-search .form-control").css({width:"150px"})}),$(".search-close").on("click",function(){$(this);$(".main-search").removeClass("open"),$(".main-search .form-control").css({width:"0"})}),$(".pop-search").on("click",function(){$(".search-bar").slideToggle("fast"),$(".search-bar input").focus()}),$(".search-bar .close").on("click",function(){$(".search-bar").slideToggle("fast")}),o<=991&&($(".main-search").addClass("open"),$(".main-search .form-control").css({width:"100px"})),$(".noti-body")[0]){new PerfectScrollbar(".notification  .noti-body",{wheelSpeed:.5,swipeEasing:0,suppressScrollX:!0,wheelPropagation:1,minScrollbarLength:40})}if(!$(".pcoded-navbar").hasClass("theme-horizontal")){var o=$(window)[0].innerWidth;if($(".navbar-content")[0])if(o<992||$(".pcoded-navbar").hasClass("menupos-static")){new PerfectScrollbar(".navbar-content",{wheelSpeed:.5,swipeEasing:0,suppressScrollX:!0,wheelPropagation:1,minScrollbarLength:40})}else{new PerfectScrollbar(".navbar-content",{wheelSpeed:.5,swipeEasing:0,suppressScrollX:!0,wheelPropagation:1,minScrollbarLength:40})}}$(".card-option .close-card").on("click",function(){var e=$(this);e.parents(".card").addClass("anim-close-card"),e.parents(".card").animate({"margin-bottom":"0"}),setTimeout(function(){e.parents(".card").children(".card-block").slideToggle(),e.parents(".card").children(".card-body").slideToggle(),e.parents(".card").children(".card-header").slideToggle(),e.parents(".card").children(".card-footer").slideToggle()},600),setTimeout(function(){e.parents(".card").remove()},1500)}),$(".card-option .reload-card").on("click",function(){var e=$(this);e.parents(".card").addClass("card-load"),e.parents(".card").append('<div class="card-loader"><i class="pct-loader1 anim-rotate"></div>'),setTimeout(function(){e.parents(".card").children(".card-loader").remove(),e.parents(".card").removeClass("card-load")},3e3)}),$(".card-option .minimize-card").on("click",function(){var e=$(this),o=$(e.parents(".card"));$(o).children(".card-block").slideToggle(),$(o).children(".card-body").slideToggle();o.hasClass("full-card")||$(o).css("height","auto"),$(this).children("a").children("span").toggle()}),$(".card-option .full-card").on("click",function(){var e=$(this),o=$(e.parents(".card"));if(o.toggleClass("full-card"),$(this).children("a").children("span").toggle(),o.hasClass("full-card")){$("body").css("overflow","hidden"),$("html,body").animate({scrollTop:0},1e3);var d=$(o,this),n=d.offset(),s=n.left,i=n.top,r=$(window).height(),a=$(window).width();o.animate({marginLeft:s-2*s,marginTop:i-2*i,width:a,height:r})}else $("body").css("overflow",""),o.removeAttr("style"),setTimeout(function(){$("html,body").animate({scrollTop:$(o).offset().top-70},500)},400)}),$(".event-btn").each(function(){$(this).children(".spinner-border").hide(),$(this).children(".spinner-grow").hide(),$(this).children(".load-text").hide()}),$(".event-btn").on("click",function(){var e=$(this);e.children(".spinner-border").show(),e.children(".spinner-grow").show(),e.children(".load-text").show(),e.children(".btn-text").hide(),e.attr("disabled","true"),setTimeout(function(){e.children(".spinner-border").hide(),e.children(".spinner-grow").hide(),e.children(".load-text").hide(),e.children(".btn-text").show(),e.removeAttr("disabled")},3e3)}),$(".form-control").each(function(){e($(this))}),$(".form-control").on("blur",function(){e($(this))}),$(".form-control").on("focus",function(){$(this).parent(".form-group").addClass("fill")}),setTimeout(function(){$(".loader-bg").fadeOut("slow",function(){$(this).remove()})},400),menulayout()}),$(window).resize(function(){menulayout(),($(".pcoded-navbar").hasClass("theme-horizontal")||$(".pcoded-navbar").hasClass("theme-horizontal-dis"))&&menulayout()}),$(window).scroll(function(){}),$.fn.pcodedmenu=function(e){var o=(this.attr("id"),{themelayout:"vertical",MenuTrigger:"click",SubMenuTrigger:"click"}),e=$.extend({},o,e),d={PcodedMenuInit:function(){d.HandleMenuTrigger(),d.HandleSubMenuTrigger(),d.HandleOffset()},HandleSubMenuTrigger:function(){var o=$(window),d=o.width();if(1==$(".pcoded-navbar").hasClass("theme-horizontal")||1==$(".pcoded-navbar").hasClass("theme-horizontal-dis"))if(d>=992){var n=$(".pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-submenu > li.pcoded-hasmenu");n.off("click").off("mouseenter mouseleave").hover(function(){$(this).addClass("pcoded-trigger").addClass("active")},function(){$(this).removeClass("pcoded-trigger").removeClass("active")})}else{var n=$(".pcoded-navbar.theme-horizontal-dis .pcoded-inner-navbar .pcoded-submenu > li > .pcoded-submenu > li");n.off("mouseenter mouseleave").off("click").on("click",function(e){e.stopPropagation();var o=$(this).closest(".pcoded-submenu").length;console.log("123123"),0===o?$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($("pcoded-navbar.theme-horizontal-dis .pcoded-inner-navbar > .pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown()):$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($("pcoded-navbar.theme-horizontal-dis .pcoded-inner-navbar > .pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-submenu").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown())})}switch(e.SubMenuTrigger){case"click":$(".pcoded-navbar .pcoded-hasmenu").removeClass("is-hover"),$(".pcoded-inner-navbar > .pcoded-hasmenu > .pcoded-submenu > li > .pcoded-submenu > li").on("click",function(e){e.stopPropagation(),0===$(this).closest(".pcoded-submenu").length?$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($(".pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown()):$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($(".pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-submenu").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown())}),$(".pcoded-inner-navbar > .pcoded-hasmenu > .pcoded-submenu > li").on("click",function(e){e.stopPropagation(),0===$(this).closest(".pcoded-submenu").length?$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($(".pcoded-hasmenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown()):$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($(".pcoded-hasmenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-submenu").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown())})}},HandleMenuTrigger:function(){if($(window).width()>=992){if(1==$(".pcoded-navbar").hasClass("theme-horizontal")){var o=$(".theme-horizontal .pcoded-inner-navbar > li");o.off("click").off("mouseenter mouseleave").hover(function(){if($(this).addClass("pcoded-trigger").addClass("active"),$(".pcoded-submenu",this).length){var e=$(".pcoded-submenu:first",this),o=e.offset(),d=o.left,n=e.width();if($(window).height(),d+n<=$(window).width())$(this).removeClass("edge");else{var s=$(".sidenav-inner").attr("style");$(".sidenav-inner").css({"margin-left":parseInt(s.slice(12,s.length-3))-80}),$(".sidenav-horizontal-prev").removeClass("disabled")}}},function(){$(this).removeClass("pcoded-trigger").removeClass("active")})}}else{var o=$(".pcoded-navbar.theme-horizontal-dis .pcoded-inner-navbar > li");o.off("mouseenter mouseleave").off("click").on("click",function(){$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($("li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown())})}switch(e.MenuTrigger){case"click":$(".pcoded-navbar").removeClass("is-hover"),$(".pcoded-inner-navbar > li:not(.pcoded-menu-caption) ").on("click",function(){$(this).hasClass("pcoded-trigger")?($(this).removeClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideUp()):($("li.pcoded-trigger").children(".pcoded-submenu").slideUp(),$(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger"),$(this).addClass("pcoded-trigger"),$(this).children(".pcoded-submenu").slideDown())})}},HandleOffset:function(){switch(e.themelayout){case"horizontal":"hover"===e.SubMenuTrigger?$("li.pcoded-hasmenu").on("mouseenter mouseleave",function(e){if($(".pcoded-submenu",this).length){var o=$(".pcoded-submenu:first",this),d=o.offset(),n=d.left,s=o.width();$(window).height();n+s<=$(window).width()?$(this).removeClass("edge"):$(this).addClass("edge")}}):$("li.pcoded-hasmenu").on("click",function(e){if(e.preventDefault(),$(".pcoded-submenu",this).length){var o=$(".pcoded-submenu:first",this),d=o.offset(),n=d.left,s=o.width();$(window).height();n+s<=$(window).width()||$(this).toggleClass("edge")}})}}};d.PcodedMenuInit()},$("#pcoded").pcodedmenu({MenuTrigger:"click",SubMenuTrigger:"click"}),$(".pcoded-navbar .close").on("click",function(){$(this).parents(".card").fadeOut("slow").remove()}),$(".pcoded-navbar .pcoded-inner-navbar a").each(function(){var e=window.location.href.split(/[?#]/)[0];$("body").hasClass("layout-14")||this.href==e&&""!=$(this).attr("href")&&($(this).parent("li").addClass("active"),$(".pcoded-navbar").hasClass("theme-horizontal")||($(this).parent("li").parent().parent(".pcoded-hasmenu").addClass("active").addClass("pcoded-trigger"),$(this).parent("li").parent().parent(".pcoded-hasmenu").parent().parent(".pcoded-hasmenu").addClass("active").addClass("pcoded-trigger")),$(this).parent("li").parent().parent(".sidelink").addClass("active"),$(this).parent("li").parent().parent().parent().parent(".sidelink").addClass("active"),$(this).parent("li").parent().parent().parent().parent().parent().parent(".sidelink").addClass("active"))}),$(window).scroll(function(){$(".pcoded-header").hasClass("headerpos-fixed")||($(this).scrollTop()>60?($(".pcoded-navbar.menupos-fixed").css("position","fixed"),$(".pcoded-navbar.menupos-fixed").css("transition","none"),$(".pcoded-navbar.menupos-fixed").css("margin-top","0px")):($(".pcoded-navbar.menupos-fixed").removeAttr("style"),$(".pcoded-navbar.menupos-fixed").css("position","absolute"),$(".pcoded-navbar.menupos-fixed").css("margin-top","60px"))),$("body").hasClass("box-layout")&&($(this).scrollTop()>60?($(".pcoded-navbar").css("position","fixed"),$(".pcoded-navbar").css("transition","none"),$(".pcoded-navbar").css("margin-top","0px"),$(".pcoded-navbar").css("border-radius","0px")):($(".pcoded-navbar").removeAttr("style"),$(".pcoded-navbar").css("position","absolute"),$(".pcoded-navbar").css("margin-top","60px")))}),$.ripple(".btn, .pcoded-navbar a,.pcoded-header .navbar-nav > li > .dropdown > a,.page-link, .nav .nav-link",{debug:!1,on:"mousedown",opacity:.4,color:"auto",multi:!1,duration:.7,rate:function(e){return e},easing:"linear"}),$("#more-details").on("click",function(){$("#nav-user-link").slideToggle()});
	</script>


    <script>
       "use strict";$(document).ready(function(){$("body").append('<div id="styleSelector" class="menu-styler"><div class="style-toggler"><a href="#!"></a></div><div class="style-block"><h4 class="mb-2">Able-pro <small class="font-weight-normal">v8.0 Customizer</small></h4><hr class=""><div class="m-style-scroller"><h6 class="mt-2">Layouts</h6><div class="theme-color layout-type"><a href="#!" class="" data-value="menu-dark" title="Default Layout"><span></span><span></span></a><a href="#!" class="active" data-value="menu-light" title="Light"><span></span><span></span></a><a href="#!" class="" data-value="dark" title="Dark"><span></span><span></span></a><a href="#!" class="" data-value="reset" title="Reset">Reset</a></div><h6>background color</h6><div class="theme-color background-color flat"><a href="#!" class="active" data-value="background-blue"><span></span><span></span></a><a href="#!" class="" data-value="background-red"><span></span><span></span></a><a href="#!" class="" data-value="background-purple"><span></span><span></span></a><a href="#!" class="" data-value="background-info"><span></span><span></span></a><a href="#!" class="" data-value="background-green"><span></span><span></span></a><a href="#!" class="" data-value="background-dark"><span></span><span></span></a></div><h6>background Gradient</h6><div class="theme-color background-color gradient"><a href="#!" class="" data-value="background-grd-blue"><span></span><span></span></a><a href="#!" class="" data-value="background-grd-red"><span></span><span></span></a><a href="#!" class="" data-value="background-grd-purple"><span></span><span></span></a><a href="#!" class="" data-value="background-grd-info"><span></span><span></span></a><a href="#!" class="" data-value="background-grd-green"><span></span><span></span></a><a href="#!" class="" data-value="background-grd-dark"><span></span><span></span></a></div><h6>background Image</h6><div class="theme-color background-color image"><a href="#!" class="" data-value="background-img-1"><span></span><span></span></a><a href="#!" class="" data-value="background-img-2"><span></span><span></span></a><a href="#!" class="" data-value="background-img-3"><span></span><span></span></a><a href="#!" class="" data-value="background-img-4"><span></span><span></span></a><a href="#!" class="" data-value="background-img-5"><span></span><span></span></a><a href="#!" class="" data-value="background-img-6"><span></span><span></span></a></div><div class="form-group mb-2"><div class="switch switch-primary d-inline m-r-10"><input type="checkbox" id="theme-rtl"><label for="theme-rtl" class="cr"></label></div><label>RTL</label></div><div class="form-group mb-2"><div class="switch switch-primary d-inline m-r-10"><input type="checkbox" id="menu-fixed" checked><label for="menu-fixed" class="cr"></label></div><label>Sidebar Fixed</label></div><div class="form-group mb-2"><div class="switch switch-primary d-inline m-r-10"><input type="checkbox" id="header-fixed" checked><label for="header-fixed" class="cr"></label></div><label>Header Fixed</label></div><div class="form-group mb-2"><div class="switch switch-primary d-inline m-r-10"><input type="checkbox" id="box-layouts"><label for="box-layouts" class="cr"></label></div><label>Box Layouts</label></div><div class="form-group mb-2"><div class="switch switch-primary d-inline m-r-10"><input type="checkbox" id="breadcumb-layouts"><label for="breadcumb-layouts" class="cr"></label></div><label>Breadcumb sticky</label></div></div><a href="https://themeforest.net/user/phoenixcoded" class="btn btn-success btn-block m-r-15 m-t-10 m-b-10">Profile</a><a href="http://ableproadmin.com/doc-7.0/" target="_blank" class="btn btn-primary btn-block m-r-15 m-t-5 m-b-10 ">Online Documentation</a><div class="text-center"><span class="text-center f-18 m-t-15 m-b-15 d-block">Thank you for sharing !</span><a href="https://www.facebook.com/Phoenixcoded/" target="_blank" class="btn text-white bg-facebook btn-icon m-b-20"><i class="feather icon-facebook"></i></a><a href="https://twitter.com/phoenixcoded" target="_blank" class="btn text-white bg-twitter btn-icon m-l-20 m-b-20"><i class="feather icon-twitter"></i></a></div></div></div>');setTimeout(function(){$(".m-style-scroller").css({height:"calc(100vh - 335px)",position:"relative"});var a=new PerfectScrollbar(".m-style-scroller",{wheelSpeed:0.5,swipeEasing:0,suppressScrollX:!0,wheelPropagation:1,minScrollbarLength:40,})},400);$("#styleSelector > .style-toggler").on("click",function(){$("#styleSelector").toggleClass("open");$("#styleSelector").removeClass("prebuild-open")});$(".layout-type > a").on("click",function(){var a=$(this).attr("data-value");$(".layout-type > a").removeClass("active");$(".pcoded-navbar").removeClassPrefix("navbar-image-");$(this).addClass("active");$("head").append('<link rel="stylesheet" class="layout-css" href="">');if(a=="menu-dark"){$(".pcoded-navbar").removeClassPrefix("menu-");$(".pcoded-navbar").removeClass("navbar-dark")}if(a=="menu-light"){$(".pcoded-navbar").removeClassPrefix("menu-");$(".pcoded-navbar").removeClass("navbar-dark");$(".pcoded-navbar").addClass(a)}if(a=="reset"){location.reload()}if(a=="dark"){$(".pcoded-navbar").removeClassPrefix("menu-");$(".pcoded-navbar").addClass("navbar-dark");$(".layout-css").attr("href","assets/css/layout-dark.css")}else{$(".layout-css").attr("href","")}});$(".background-color.flat > a").on("click",function(){var a=$(this).attr("data-value");$(".background-color > a").removeClass("active");$(".pcoded-header").removeClassPrefix("brand-");$(this).addClass("active");if(a=="background-default"){$(".pcoded-header").removeClassPrefix("header-")}else{$(".pcoded-header").removeClassPrefix("header-");$(".pcoded-header").addClass("header-"+a.slice(11,a.length));$("body").removeClassPrefix("background-");$("body").addClass("background-"+a.slice(11,a.length))}});$(".background-color.gradient > a").on("click",function(){var a=$(this).attr("data-value");$(".background-color > a").removeClass("active");$(".pcoded-header").removeClassPrefix("brand-");$(this).addClass("active");if(a=="background-default"){}else{$("body").removeClassPrefix("background-");$("body").addClass("background-"+a.slice(11,a.length))}});$(".background-color.image > a").on("click",function(){var a=$(this).attr("data-value");$(".background-color > a").removeClass("active");$(".pcoded-header").removeClassPrefix("brand-");$(this).addClass("active");if(a=="background-default"){}else{$("body").removeClassPrefix("background-");$("body").addClass("background-"+a.slice(11,a.length))}});$("#theme-rtl").change(function(){$("head").append('<link rel="stylesheet" class="rtl-css" href="">');if($(this).is(":checked")){$(".rtl-css").attr("href","assets/css/layout-rtl.css")}else{$(".rtl-css").attr("href","")}});$("#menu-fixed").change(function(){if($(this).is(":checked")){$(".pcoded-navbar").addClass("menupos-fixed");setTimeout(function(){},400)}else{$(".pcoded-navbar").removeClass("menupos-fixed")}});$("#header-fixed").change(function(){if($(this).is(":checked")){$(".pcoded-header").addClass("headerpos-fixed")}else{$(".pcoded-header").removeClass("headerpos-fixed")}});$("#breadcumb-layouts").change(function(){if($(this).is(":checked")){$(".page-header").addClass("breadcumb-sticky")}else{$(".page-header").removeClass("breadcumb-sticky")}});$("#box-layouts").change(function(){if($(this).is(":checked")){$("body").addClass("container");$("body").addClass("box-layout")}else{$("body").removeClass("container");$("body").removeClass("box-layout")}});$.fn.removeClassPrefix=function(a){this.each(function(c,d){var b=d.className.split(" ").map(function(e){return e.indexOf(a)===0?"":e});d.className=b.join(" ")});return this}});
	</script>

<!-- ekko-lightbox Js -->
<script src="assets/js/plugins/ekko-lightbox.min.js"></script>
<script src="assets/js/plugins/lightbox.min.js"></script>
<script src="assets/js/pages/ac-lightbox.js"></script>
<script>
	// [ customer-scroll ] start
	var px = new PerfectScrollbar('.cust-scroll', {
		wheelSpeed: .5,
		swipeEasing: 0,
		wheelPropagation: 1,
		minScrollbarLength: 40,
	});
	// [ customer-scroll ] end
</script>
</body>

</html>
