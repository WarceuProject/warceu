#1690868687
echo "const http = require('http')
const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World! NodeJS \n');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});" | node -e
#1690868734
clear
#1690868755
echo "const http = require('http')
const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World! NodeJS \n');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});" | const http = require('http') -e
#1690868755
const hostname = '127.0.0.1';
#1690868755
const port = 3000;
#1690868755
const server = http.createServer((req, res) => {
#1690868755
  res.statusCode = 200;
#1690868755
  res.setHeader('Content-Type', 'text/plain');
#1690868755
  res.end('Hello World! NodeJS \n');
#1690868755
});
#1690868755
server.listen(port, hostname, () => {
#1690868755
  console.log(`Server running at http://${hostname}:${port}/`);
#1690868762
});clear
#1690868775
clear
#1690868805
echo "const http = require('http')
const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World! NodeJS \n');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});" | /opt/cpanel/ea-nodejs16/bin/node -e
#1690868855
echo  "const http = require('http')
const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World! NodeJS \n');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});"
#1690868868
echo  "const http = require('http')
const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World! NodeJS \n');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});" > app.js
#1690868897
nano index.js
#1690868926
clear
#1690868956
/opt/cpanel/ea-nodejs16/bin/node app.js
#1690869169
passenger
#1690869265
exit
#1690900063
clear
#1690900064
ls
#1690900190
sudo su
#1690898709
clear
#1690898713
ls
#1690898728
cat index.js
#1690898748
rm -f *.js
#1690898750
ls
#1690898767
cd public_html
#1690898769
ls
#1690898792
mv index.html index.html.bk
#1690900167
git clone https://github.com/WarceuProject/Backup node-server
#1690900453
ls
#1690900465
cd node-server
#1690900466
ls
#1690900522
git sparse-checkout set node-server
#1690900590
ls
#1690900612
rm -f 0_README_BEFORE_DELETING_VIRTFS  latest
#1690900617
clear
#1690900626
cd node-server
#1690900639
rm -rf node_modules
#1690900696
pwd
#1690900714
mv * ../
#1690900735
cd ../; rm -rf node-server
#1690900737
ls
#1690900810
npm i
#1690900824
node .
#1690900922
find /etc -iname "*pass*"
#1690902374
sudo find /etc -iname "*pass*"
#1690902389
clear
#1690902407
pwd
#1690906345
ls
#1690906351
passenger start --port 4000 --log-file awesome.log
#1690906467
passenger-status
#1690992257
ls
#1690992273
cd $HOME
#1690992275
ls
#1690992296
cd public_html
#1690992300
ls
#1690992305
pwd
#1690992316
ls
#1690992340
cd webhost.warceuproject.dev
#1690992342
ls
#1690992720
rm -f WHMCS-7.5.3-master.zip whmcs_v7.9.zip 'whmcs_v832_full(1).zip' whmcs_v8.6.1_bacarito.zip
#1690992722
ls
#1690992908
mkdir ../backup; mv whmcs_v861_full.zip whmcs_v861.zip
#1690992910
ls
#1690992924
mkdir ../backup; mv whmcs_v861_full.zip whmcs_v861.zip
#1690992928
ls
#1690992964
mv KiraLicenseCrack.zip whmcs_v861.zip ../backup
#1690992966
ls
#1690992977
rm -f *
#1690992986
rm -rf *
#1690992989
ls
#1690993017
cd ../
#1690993023
ls
#1690993031
cd backup
#1690993034
ls
#1690993054
unzip whmcs_v861.zip
#1690993099
ls
#1690993113
unzip whmcs_v861.zip
#1690993128
unzip whmcs_v861.zip d
#1690993135
unzi[
#1690993141
unzip
#1690993167
clear
#1690993175
ls
#1690993185
gunzip -h
#1690993234
tar -xvzf whmcs_v861.zip
#1690993258
unzip
#1690993320
unzip -q whmcs_v861.zip
#1690994331
clear
#1690994466
wget
#1690994472
wget https://drive.google.com/file/d/1O5ZN8uwsPgKWYT-7X-Z5pL_t9Ne6EZGR/view?usp=drive_link
#1690994478
ls
#1690994488
cd whmcs
#1690994490
ls
#1690994495
cd ../
#1690994502
rm -rf whmcs
#1690994523
mv 'view?usp=drive_link' x.zip
#1690994528
unzip 
#1690994534
unzip x
#1690994538
unzip x.zip
#1690994547
ls
#1690994562
rm x.zip
#1690994564
ls
#1690994569
cd ../
#1690994571
ls
#1690994581
cd webhost.warceuproject.dev
#1690994583
ls
#1690994601
wget https://drive.google.com/file/d/1j2-IDfhss1_rwUb1OiLEiGxtGAlb3L6l/view
#1690994615
ls
#1690994687
rm -rf view
#1690994777
curl -Lo https://drive.google.com/file/d/1O5ZN8uwsPgKWYT-7X-Z5pL_t9Ne6EZGR/view?usp=drive_link x.zip
#1690994785
ls
#1690994829
curl -oL https://drive.google.com/file/d/1j2-IDfhss1_rwUb1OiLEiGxtGAlb3L6l/view x.zip
#1690994867
curl -Lo x.zip https://drive.google.com/file/d/1O5ZN8uwsPgKWYT-7X-Z5pL_t9Ne6EZGR/view?usp=drive_link
#1690994871
ls
#1690994877
rm L
#1690994882
rm x.zip
#1690994886
ls
#1690995117
curl -Lo x.zip https://doc-0k-ac-docs.googleusercontent.com/docs/securesc/jmvoigj6a7fkkrahh7jlm1snhk6ji0hf/tht64spcrn6c99rpuve6f8bgadho6rnm/1690995000000/16390001684460989920/04458294140748960445Z/11jFNas8fHx8CusQkoLC7dPcN7HwFkz0z?e=download&uuid=1f167657-8cfc-4bac-ac8b-95db22edd9bd&nonce=9kob6efncr4fm&user=04458294140748960445Z&hash=1o7i5l4051hp3h0napiafu596i1be94v
#1690995127
ls
#1690995413
curl -L -o whmcs.zip https://doc-14-14-docs.googleusercontent.com/docs/securesc/jmvoigj6a7fkkrahh7jlm1snhk6ji0hf/fmtbu8e86a2lq986rjvrk4eu4nibb1o7/1690995225000/05534987135659224608/04458294140748960445Z/1j2-IDfhss1_rwUb1OiLEiGxtGAlb3L6l?e=download&uuid=35190a69-ce23-4839-a2b4-0c0f1df78df7
#1690995423
ls
#1690995443
clear
#1690996793
curl -o whmcs.zip https://gitlab.com/kirasinigami/test/-/raw/main/whmcs_v861.zip
#1690996807
ls
#1690996813
ls -h
#1690996818
ls -si
#1690996826
ls -i
#1690996841
unzip whmcs.zi[
#1690996846
unzip whmcs.zip
#1690996857
ls
#1690996914
mv whmcs_v861/* ./
#1690996917
ls
#1690996942
cd whmcs
#1690996945
ls
#1690996955
cd ..
#1690996957
ls
#1690996977
mv whmcs/* ./
#1690996979
ls
#1690997195
mysql -u root
#1690997214
sudo mysql -u root
#1690997269
mysql -u $USER -p
#1690997405
hostname -i
#1690997436
whoami
#1690997493
mysql -u $USER -p
#1691537202
ls
#1691537215
cd www
#1691537215
ls
#1691537235
cd uploads
#1691537237
ls
#1691537241
cd 1
#1691537242
ls
#1691537254
cd
#1692125249
ls
#1692125262
ls -a
#1692125324
sudo systemctl start code-server@$USER
#1692125358
systemctl
#1692125387

#1692125410
systemctl status code-server@$USER
#1692125478

#1692125554
systemctl status code-server@$USER
#1692125611
sudo systemctl start code-server@$USER
#1692125623
systemctl status code-server@$USER
#1692125660
sudo systemctl stop code-server@$USER
#1692125668
systemctl status code-server@$USER
#1692126664
ls
#1692126761
clear
#1692126826
cd /
#1692126828
ls
#1692126834
cd
#1692126839
clear
#1692127212
ps aux
#1692127307
php tes.php?kira=ls
#1692127325
php tes.php?kira=uname -a
#1692127351
php -h
#1692127986
yum install
#1692127037
ls
#1692127041
cat tes.php
#1692127049
clear
#1692127099
php -S 0.0.0.0:3000
#1692127654
cd
#1692127658
rm -rf tes
#1692127659
ls
#1692127663
clar
#1692127665
clear
#1692126921
ls
#1692126929
mkdir tes
#1692126932
cd tes
#1692126933
ls
#1692126947
clear
#1692126956
touch tes.php
#1692126272
code-servee
#1692126274
code-server
#1692126298
nano ~/.local/share/code-server
#1692126348
nano ~/.config/code-server/config.yaml
#1692126419
code-server
#1692168245
ls
#1692168258
cd public_html
#1692168268
npx pm2
#1692168291
npx pm2 start index.js
#1692168309
cd node-server
#1692168313
npx pm2 start index.js
#1692569663
npx pm2 list
#1692569710
npx
#1692569725
npx pm2
#1692570385
ls -a
#1692570393
pm2
#1692570400
npx pm2
#1692570436
rm -rf .pm2
