(function(window, document, $, undefined) {
  "use strict";
  var DropzoneDemos = function() {

    // multi file upload
    Dropzone.options.multiFileUpload = {
      paramName: "file",
      previewsContainer: ".multiFileUpload",
      maxFiles: 15,
      maxFilesize: 15,
      accept: function(file, done) {
        if (file.name == "justinbieber.jpg") {
          done("Naha, you don't.");
        } else {
          done();
        }
      }
    };


  };

  DropzoneDemos();

})(window, document, window.jQuery);
