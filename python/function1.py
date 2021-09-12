#function 1
def say_hello():
    print('Hello')

say_hello()

#function2
def program_nilai(a, b):
    if a > b:
        print('Nilai ', a, ' lebih besar dari ', b )
    elif a < b:
        print('Nilai, ', a, ' lebih kecil dari ', b)

program_nilai(20,50)

#function3
def hacking(hacking, design):
    if hacking != design:
        print('Hacking tidak lah sama dengan design')
    elif hacking == design:
        print('Hacking sama dengan design')
    else:
        print('Data tidak di temukan')

hacking('hacking', 'design')

