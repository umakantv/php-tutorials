
<?php
  
  // Initialize a file URL to the variable
  $url = 
  'https://rzp-1018-nonprod-test-bucket.s3.ap-south-1.amazonaws.com/2023-02-27T07%3A20%3A52_0?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Security-Token=FwoGZXIvYXdzEMH%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEaDIcs8GrOpuQ4ZxlJZSKtAWzbf%2FSfDakQc1VJQ1XAgHjSLA4d9XirS6hR%2Fh5I4rzaQbYU47jVkkJUAFu0B%2FZJHTzfM9ccCmvkFRZx8RM2UA%2Bsm4%2FQxErWjISICVCaPgk9OzWL0cp4wM9bkATUgDzyNq4syUsQu8mhQuNR%2BhCY%2BcrTo6GJwy3I22GW6EzR%2BA1rF1Bvdl3j36upMGqqBNPTjMgAhrQ8LWYxO7mdv10QHCQ51EFM0Rma97lI2lA1KMuv8Z8GMi1IZz6IRcoEHxWJ5DTfFXhlAhBGY3J9VYDpCXk4T3Qz877qopX%2F6aAf0%2BQjsyY%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=ASIARPN2ZIK2ADJUR4ED%2F20230227%2Fap-south-1%2Fs3%2Faws4_request&X-Amz-Date=20230227T072052Z&X-Amz-SignedHeaders=host&X-Amz-Expires=900&X-Amz-Signature=613fb05de52c4548564830e3f69a173b9c8dc4a9d1c0c12088617d491d6b6bea';
    
  // Use basename() function to return the base name of file
  $file_name = "Docket.pdf";

  $content = file_get_contents($url);

  if ($content) {
    echo "Content loaded successfully";
  } else {
    echo "Content not loaded successfully";
  }
    
  // Use file_get_contents() function to get the file
  // from url and use file_put_contents() function to
  // save the file by using base name
  if (file_put_contents($file_name, $content))
  {
      echo "File downloaded successfully";
  }
  else
  {
      echo "File downloading failed.";
  }
?>