import nmap

scanner = nmap.PortScanner()         # instantiate nmap.PortScanner object


#ip_addr = '127.0.0.1'

#pembukaan alat garuda NMAP
print("""
 GARUDA NMAP

 [>] Di Koding Oleh : Galih Anggoro Prasetya
 [>] Email          : g4lihanggoro@gmail.com]
 [>] Github         : ]
 [>] Website        :]
""")

print("[!] DISCLAIMER: menggunakan alat garuda NMAP dalam penyadapan sistem komputer ataupun bentuk tujuan meretas tanpa ijin oleh pihak itu sama dengan perbuatan ilegal.\n alat garuda NMAP di ciptakan untuk pengujian penetrasi keamanan jaringan.saya tidak mau bertanggung jawab jika anda melakukan hal peretasan tanpa ijin oleh pihak!")
print('\n')


#garuda NMAP
print("""
================================
[+]       GARUDA NMAP        [+]
================================
 [1] Scan Port              
 [2] Deteksi Sistem Operasi
 [3] Deteksi Status Jaringan
 [4] Bantuan                   
 [5] Keluar                    
                              
================================
\n""")
while True:
 print("\n")
 #tanya user
 tanyaUser = input("[+] pilih nomor yang anda mau : ")

#jika user pilih nomor 1
 if tanyaUser == "1":
     try:
         #scan port pada sasaran
         port_scan_garudaNMAP = input("[+] masukkan sasaran pada garuda NMAP : ")
         scanner.scan(port_scan_garudaNMAP, '1-10', '-v -sS')
         print("[+] info pada sasaran : ", scanner.scaninfo())
         print("[+] status sasaran : ", scanner[port_scan_garudaNMAP].state())
         for host in scanner.all_hosts():
             print("[+] host : %s (%s)" % (host, scanner[host].hostname()))
         for protokol in scanner[host].all_protocols():
             print("[+] protokol : %s" % protokol)
             print("----------------------------------")
             daftar_port = scanner[host][protokol].keys()
             for port in daftar_port:
                 print("[+] port : %s\tkeadaan : %s" % (port, scanner[host][protokol][port]["state"]))

     except:
         print("Maaf yang anda masukkan salah!\n")
         
#jika user bukan memilih nomor 1, 2, 3, 4, 5
 elif tanyaUser != "1" and tanyaUser != "2" and tanyaUser != "3" and tanyaUser != "4" and tanyaUser != "5":
     #Kasih peringatan
     print("[-] maaf nomor yang anda masukkan salah!")

#jika selain user pilih nomor 2
 elif tanyaUser == '2':
    #scan sistem operasi pada sasaran
    port_scan_garudaNMAP = input("[+] masukkan sasaran pada garuda NMAP : ")
    machine = scanner.scan(port_scan_garudaNMAP , arguments='-O')
    print("[+] sistem operasi pada sasaran : ", machine['scan'][port_scan_garudaNMAP]['osmatch'][0])

#jika selain user pilih nomor 3
 elif tanyaUser == "3":
     #cek status jaringan pada sasaran
     port_scan_garudaNMAP = input("[+] masukkan sasaran pada garuda NMAP : ")
     scanner.scan(hosts=port_scan_garudaNMAP, arguments='-n -sP -PE -PA21,23,80,3389')
     print("[+] status jaringan pada sasaran : ", scanner[port_scan_garudaNMAP].state())

#jika selain user pilih nomor 4
 elif tanyaUser == "4":
    #info pada bantuan garuda NMAP
     print("""
[!] BANTUAN :

 Ketika anda memulai port scan anda cukup mencari ip address pada sasaran yang anda inginkan. anda bisa melihat contoh di bawah ini:

 Masukkan sasaran pada garuda NMAP : 127.0.0.1

 Maka akan muncul informasi sasaran yang anda telah lakukan. ini berlaku pada perintah nomor 2, 3, pada garuda NMAP.
""")

 elif tanyaUser == "5":
     exit
     break



