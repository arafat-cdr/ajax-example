<script>
// by web_lover
// other wise file will not upload
var formData = new FormData('#register');

$.ajax({
  url: listeo_login.ajaxurl,
  type: 'POST',
  dataType: 'json',
  // for sending file in ajax below 3 are important
  processData: false,
  contentType: false,
  data: formData,
  // use this 3 for sending file in ajax
});

</script>
