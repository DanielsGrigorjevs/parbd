# Teorija (Laravel README.md failā):
    • Kas ir API?
    Tas ir iepriekš definētu klašu, procedūru, funkciju, struktūru un konstanšu kopums, kas tiek pasniegts kā pielikums, kuru iespējams izmantot ārējiem programmatūras produktiem.

    • Kā deklarēt mainīgo PHP valodā?
    $var = value;

    • Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
    MVC - ir fundamentāls projektēšanas šablons, sistēmā, kur mijiedarbība starp lietotāju un sistēmu notiek dialogu režīmā, paredz lietotāja saskarni un iekļauj elementus, ar kuriem lietotājs manipulē ar sistēmu, un elementus, kas attēlo šo manipulāciju rezultātus. Modelis, kontrolleris, Skats.

    • Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
        ORM ir saīsinājums no "Object-Relational Mapping" jeb objektu-relāciju attēlošana. Tas ir programmēšanas tehnoloģiju veids, kas ļauj attēlot relāciju datu bāzes datus objektu orientētā programmēšanas valodā.
        ORM bibliotēkas ļauj izveidot abstrakciju slāni starp datu bāzes tabulām un aplikācijas kodu. Tā vietā, lai tieši rakstītu SQL pieprasījumus, attīstītāji var darboties ar objektiem un klases, kas atspoguļo datu bāzes struktūru. ORM pārņem atbildību par SQL pieprasījumu ģenerēšanu un izpildi, kas ievērojami atvieglo datu operāciju veikšanu.

    • Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
    $users = User::where('rating', '>', 4)->get();

Obj | Type
--- | ---
username | VARCHAR(255)
email | VARCHAR(255)
password | VARCHAR(255)
rating | DECIMAL(8, 2)
created_at | TIMESTAMP
updated_at | TIMESTAMP


# Praktika:
	Izveido Laravel projektu ar modeli un migrāciju priekš kursiem. Kurss sastāvēs no - nosaukuma, paskaidrojošā teksta, banera adreses un kursa cilvēku skaita. Ir jābūt divām API adresēm (galapunktiem): 
    1. Store - pievieno jaunu kursu datu bāzē + ienākošo datu validācija,
    2. Index - atgriež visus kursus.

# Kad esi pabeidzis:
	Izveido publisku github repozitoriju, uz kura uzliec visu savu Laravel projektu ar README.md failu. Aizpildi Google form: https://forms.gle/BnBnDQ1czLxqrZ6eA
