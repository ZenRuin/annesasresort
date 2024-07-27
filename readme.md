#annesasresort
# The Annesa Resort Project

## Installation

- Make sure you have XAMPP, Composer, PHP installed
- If you have you can continue
- put the file at the htdocs in C:/Xampp/htdocs
- then change the index.php in the htdocs folder like this:

```
    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    	# $uri = 'https://';
    } else {
    	# $uri = 'http://';
    }
    $uri .= $_SERVER['HTTP_HOST'];
    header('Location: '.$uri.'./htdocs');
    exit;
```

- then run the XAMPP.
