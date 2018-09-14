## Technical Test Backend Enginer - DOT Indonesia
Repository untuk jawaban serta test yang di berikan **DOT Indonesia**  
perihal **Technical Test Backend Enginer**  


### Sprint 1
**[Check Sprint 1](https://github.com/hengkydev/dot-requirements/tree/sprint1)**  
berikut hasil untuk test **sprint 1** yang terdapat pada branch **sprint1**
### Sprint 2
**[Check Sprint 2](https://github.com/hengkydev/dot-requirements/tree/sprint2)**  
berikut hasil untuk test **sprint 2** yang terdapat pada branch **sprint2**
 
### Struktur data & Logika
Soal yang di berikan :  
> Diberikan sebuah array S​ dengan sejumlah data integer di dalamnya. Carilah bilangan dengan  
nilai terbesar kedua​ dari kumpulan integer tersebut dengan catatan bilangan dengan nilai yang  
sama boleh muncul lebih dari satu kali.  
Contoh array:  
> S = [2, 1, 6, 9, 9, 4, 3]  
> Output​: 6  
> Penjelasan​:  
> Dalam array S, bilangan 6 merupakan bilangan terbesar kedua setelah bilangan 9.

**Jawaban :**  
terdapat 2 file di dalam folder logic :
  - **[/logic/index.php](logic/index.php)**  
    file ini menggunakan fungsi bawaan dari php
  - **[/logic/logic.php](logic/logic.php)**  
    file ini menggunakan logika bahasa pemrograman  
jalankan file di dalam folder, jalankan **index.php** : 
``` sh
$ cd /logic
$ php index.php
```
atau **logic.php** :  
``` sh
$ cd /logic
$ php logic.php
```
maka output program akan seperti berikut :  
``` sh
| ---------------------------------------------- |
| Technical Test Backend Enginer - DOT Indonesia |
| Struktur data & Logic                          |
| ---------------------------------------------- |

Masukkan nilai array contoh '1,4,5,2,3' separated by comma :
1,4,5,2,3
--------------------------------------------------
Array yang di masukkan : ["1","4","5","2","3"]
Hasil terbeser ke 2 : 4
--------------------------------------------------

Terima Kasih
```
## Knowledge & Experience Questions
1. Apa tantangan terbesar yang pernah anda temui saat membuat web application dan  
bagaimana anda menyelesaikannya dari sisi engineering nya?  
> kebutuhan dan pengelolahan data besar yang memungkinkan meninggalkan sejuta bug
> pada saat masuk bagian pengetest an
> penyelesaian terbaik melakukan debug dengan detail dan melakukan unit testing
> secara berkala

2. Bagaimana penerapan clean code pada project anda?
> mengikuti guidelines yang biasa di pakai oleh programer yang
> lebih berpengalaman, contoh saya mengikuti guideline pada link berikut
> https://flowframework.readthedocs.io/en/stable/TheDefinitiveGuide/PartV/CodingGuideLines/PHP.html

3. Untuk efisiensi pengerjaan project dalam tim, jelaskan bagaimana gitflow yang biasa
anda lakukan.
> dalam pertanyaan ini saya berposisi sebagai backend programer
> 1. menyusun struktur data pada lingkup project
> 2. pemilihan resources sesuai lingkup project 
>    (database, framework, server, language front end, language backend)
> 3. membangun struktur code backend seperti crud ataupun Rest API
> 4. melakukan unit testing

4. Apa yang anda ketahui dengan design pattern? Jika pernah menggunakan, jelaskan
design pattern apa saja yang biasanya digunakan untuk menyelesaikan masalah
software engineering di web application.
> saya sebenarnya tidak begitu tahu detail apa itu design pattern
> yang saya ketahui tentang design pattern sendiri
> dimana suatu cara yang memudahkan menyelesaikan masalah 
> pada hal ini seperti OOP atau singleton

5. Apa anda bersedia ditempatkan onsite di Malang? Jika memang harus remote,
bagaimana pengaturan waktu & availability dalam komunikasi dan kolaborasi
pengerjaan project?
> untuk saat ini saya lebih memilih remote
> untuk pengaturan waktu & availability dalam kommunikasi
> saya menyesuaikan dengan waktu perusahaan pada umumnya
