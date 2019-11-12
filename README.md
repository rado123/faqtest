# FAQtest

Aplikacija v Laravel + Vue, ki omogoča pregled in ažuriranje vprašanj in odgovorov (Frequently Asking Questions).

Značilnosti:

- Na zaledni aplikaciji :
    - CRUD operacije za faq
    - avtentikacija in omejitev na rute
- Na frontendu:
    - pregled vprašanj,
        - razšitev/zožitev (expand/collaps) vprašanj z odgovori:
            - vsakega posamezno
            - vse hkrati
    - urejanje faq
    - kreiranje faq
    - brisanje faq
    - avtentikacijske forme

## Priprava okolja

Primeri za Linux OS

Inštalacija mysql baze, kreiranje podatkovne baze faqtest:

`mysql -u root -p`

`mysql> create database faqtest;`

Popravek .env datoteke s parametri za bazo (geslo ipd.)

Postavitev inicialne baze:

`php artisan migrate:refresh`

## Zagon ukazov med razvojem/testiranjem

`php artisan serve`

za zagon spletne aplikacije.

`npm run watch`

za sprotno prevajanje JavaScript in css datotek v javni imenik

## Uporaba aplikacije

Potrebna je registracija uporabnika, nato prijava.

V zavihku Preview je možno videti že vnešena vprašanja, tu jih je možno brisati in urejati.
V zavihku Create je možno vnesti vprašanje in odgovor (faq).
