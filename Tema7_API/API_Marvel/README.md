# Como conectarnos a la API

1. Nos registramos en la cuenta de la API de Marvel, se nos generará 
· Clave pública: a020ce7d08119889a71cafc466d8f631
. Clave privada: 3533266013cb4b99e4110dc35b3f47a9e62d28d4

2. Autenticación para aplicaciones del lado del servidor

Las aplicaciones del lado del servidor deben pasar dos parámetros además del parámetro apikey:

ts : una marca de tiempo (u otra cadena larga que puede cambiar según cada solicitud)
hash : un resumen md5 del parámetro ts, su clave privada y su clave pública (por ejemplo, md5(+privateKey+publicKey))
