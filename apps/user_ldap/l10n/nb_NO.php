<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "Klarte ikke å nullstille tilknytningene.",
"Failed to delete the server configuration" => "Klarte ikke å slette tjener-konfigurasjonen.",
"The configuration is valid and the connection could be established!" => "Konfigurasjonen er i orden og tilkoblingen skal være etablert!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Konfigurasjonen er i orden, men Bind mislyktes. Vennligst sjekk tjener-konfigurasjonen og påloggingsinformasjonen.",
"The configuration is invalid. Please have a look at the logs for further details." => "Konfigurasjonen er ikke gyldig. Sjekk loggene for flere detaljer.",
"No action specified" => "Ingen handling spesifisert",
"No configuration specified" => "Ingen konfigurasjon spesifisert",
"No data specified" => "Ingen data spesifisert",
" Could not set configuration %s" => "Klarte ikke å sette konfigurasjon %s",
"Deletion failed" => "Sletting mislyktes",
"Take over settings from recent server configuration?" => "Hent innstillinger fra tidligere tjener-konfigurasjon?",
"Keep settings?" => "Behold innstillinger?",
"Cannot add server configuration" => "Kan ikke legge til tjener-konfigurasjon",
"mappings cleared" => "tilknytninger nullstilt",
"Success" => "Suksess",
"Error" => "Feil",
"Configuration OK" => "Konfigurasjon OK",
"Configuration incorrect" => "Konfigurasjon feil",
"Configuration incomplete" => "Konfigurasjon ufullstendig",
"Select groups" => "Velg grupper",
"Select object classes" => "Velg objektklasser",
"Select attributes" => "Velg attributter",
"Connection test succeeded" => "Tilkoblingstest lyktes",
"Connection test failed" => "Tilkoblingstest mislyktes",
"Do you really want to delete the current Server Configuration?" => "Er du sikker på at du vil slette aktiv tjener-konfigurasjon?",
"Confirm Deletion" => "Bekreft sletting",
"_%s group found_::_%s groups found_" => array("%s gruppe funnet","%s grupper funnet"),
"_%s user found_::_%s users found_" => array("%s bruker funnet","%s brukere funnet"),
"Invalid Host" => "Ugyldig tjener",
"Could not find the desired feature" => "Fant ikke den ønskede funksjonaliteten",
"Save" => "Lagre",
"Test Configuration" => "Test konfigurasjonen",
"Help" => "Hjelp",
"only those object classes:" => "kun de objektklassene:",
"only from those groups:" => "kun fra de gruppene:",
"Edit raw filter instead" => "Rediger ubearbeidet filter i stedet",
"Raw LDAP filter" => "Ubearbeidet LDAP-filter",
"The filter specifies which LDAP groups shall have access to the %s instance." => "Filteret spesifiserer hvilke LDAP-grupper som skal ha tilgang til %s-instansen.",
"groups found" => "grupper funnet",
"LDAP Username:" => "LDAP-brukernavn:",
"LDAP Email Address:" => "LDAP-epostadresse:",
"Other Attributes:" => "Andre attributter:",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" => "Definerer filteret som skal brukes når innlogging forsøkes. %%uid erstatter brukernavnet i innloggingshandlingen. Eksempel: \"uid=%%uid\"",
"Add Server Configuration" => "Legg til tjener-konfigurasjon",
"Host" => "Tjener",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Du kan utelate protokollen, men du er påkrevd å bruke SSL.  Deretter starte med ldaps://",
"Port" => "Port",
"User DN" => "Bruker DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "DN nummeret til klienten som skal bindes til, f.eks. uid=agent,dc=example,dc=com. For anonym tilgang, la DN- og passord-feltet stå tomt.",
"Password" => "Passord",
"For anonymous access, leave DN and Password empty." => "For anonym tilgang, la DN- og passord-feltet stå tomt.",
"One Base DN per line" => "En hoved DN pr. linje",
"You can specify Base DN for users and groups in the Advanced tab" => "Du kan spesifisere Base DN for brukere og grupper under Avansert fanen",
"The filter specifies which LDAP users shall have access to the %s instance." => "Filteret spesifiserer hvilke LDAP-brukere som skal ha tilgang til %s-instansen.",
"users found" => "brukere funnet",
"Back" => "Tilbake",
"Continue" => "Fortsett",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>Advarsel:</b> Appene user_ldap og user_webdavauth er ikke kompatible med hverandre. Uventet oppførsel kan forekomme. Be systemadministratoren om å deaktivere en av dem.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Warning:</b> PHP LDAP modulen er ikke installert, hjelperen vil ikke virke. Vennligst be din system-administrator om å installere den.",
"Connection Settings" => "Innstillinger for tilkobling",
"Configuration Active" => "Konfigurasjon aktiv",
"When unchecked, this configuration will be skipped." => "Når ikke huket av så vil denne konfigurasjonen bli hoppet over.",
"Backup (Replica) Host" => "Sikkerhetskopierings (Replica) vert",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Oppgi en valgfri reservetjener. Den må være en replika av hovedtjeneren for LDAP/AD.",
"Backup (Replica) Port" => "Reserve (Replika) Port",
"Disable Main Server" => "Deaktiver hovedtjeneren",
"Only connect to the replica server." => "Koble til bare replika-tjeneren.",
"Case insensitve LDAP server (Windows)" => "Case-insensitiv LDAP tjener (Windows)",
"Turn off SSL certificate validation." => "Slå av SSL-sertifikat validering",
"Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." => "Ikke anbefalt, bruk kun for testing! Hvis tilkobling bare virker med dette valget, importer LDAP-tjenerens SSL-sertifikat i %s-serveren din.",
"Cache Time-To-Live" => "Levetid i mellomlager",
"in seconds. A change empties the cache." => "i sekunder. En endring tømmer bufferen.",
"Directory Settings" => "Innstillinger for Katalog",
"User Display Name Field" => "Vis brukerens navnfelt",
"The LDAP attribute to use to generate the user's display name." => "LDAP-attributten som skal brukes til å generere brukerens visningsnavn.",
"Base User Tree" => "Hovedbruker tre",
"One User Base DN per line" => "En Bruker Base DN pr. linje",
"User Search Attributes" => "Attributter for brukersøk",
"Optional; one attribute per line" => "Valgfritt, en attributt pr. linje",
"Group Display Name Field" => "Vis gruppens navnfelt",
"The LDAP attribute to use to generate the groups's display name." => "LDAP-attributten som skal brukes til å generere gruppens visningsnavn.",
"Base Group Tree" => "Hovedgruppe tre",
"One Group Base DN per line" => "En gruppe hoved-DN pr. linje",
"Group Search Attributes" => "Attributter for gruppesøk",
"Group-Member association" => "gruppe-medlem assosiasjon",
"Special Attributes" => "Spesielle attributter",
"Quota Field" => "Felt med lagringskvote",
"Quota Default" => "Standard lagringskvote",
"in bytes" => "i bytes",
"Email Field" => "Felt med e-postadresse",
"User Home Folder Naming Rule" => "Navneregel for brukers hjemmemappe",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "La stå tom for brukernavn (standard). Ellers, spesifiser en LDAP/AD attributt.",
"Internal Username" => "Internt brukernavn",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "Som standard vil det interne brukernavnet bli laget utifra UUID-attributten. Dette sikrer at brukernavnet er unikt og at det ikke er nødvendig å konvertere tegn. Det interne brukernavnet har den begrensningen at bare disse tegnene er tillatt: [ a-zA-Z0-9_.@- ]. Andre tegn erstattes av tilsvarende ASCII-tegn eller blir ganske enkelt utelatt. Ved kollisjon blir et nummer lagt til / øket. Det interne brukernavnet brukes til å identifisere en bruker internt. Det er også standardnavnet på brukerens hjemmemappe. Det er også med i fjern-URL-er, for eksempel for alle *DAV-tjenester. Med denne innstillingen kan standard oppførsel overstyres. For å få en oppførsel som likner oppførselen før ownCloud 5, legg inn attributten for brukerens visningsnavn i dette feltet. La feltet stå tomt for standard oppførsel. Endringer vil kun påvirke nylig tilknyttede (opprettede) LDAP-brukere.",
"Internal Username Attribute:" => "Attributt for internt brukernavn:",
"Override UUID detection" => "Overstyr UUID-oppdaging",
"By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." => "Som standard blir UUID-attributten oppdaget automatisk. UUID-attributten brukes til å identifisere LDAP-brukere og -grupper uten tvil. Det interne brukernavnet vil også bli laget basert på UUID, hvis ikke annet er spesifisert ovenfor. Du kan overstyre innstillingen og oppgi den attributten du ønsker. Du må forsikre det om at din valgte attributt kan hentes ut både for brukere og for grupper og at den er unik. La stå tomt for standard oppførsel. Endringer vil kun påvirke nylig tilknyttede (opprettede) LDAP-brukere og -grupper.",
"UUID Attribute for Users:" => "UUID-attributt for brukere:",
"UUID Attribute for Groups:" => "UUID-attributt for grupper:",
"Username-LDAP User Mapping" => "Tilknytning av brukernavn til LDAP-bruker",
"Usernames are used to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found. The internal username is used all over. Clearing the mappings will have leftovers everywhere. Clearing the mappings is not configuration sensitive, it affects all LDAP configurations! Never clear the mappings in a production environment, only in a testing or experimental stage." => "Brukernavn brukes til å lagre og tilordne (meta)data. For at brukere skal identifiseres og gjenkjennes presist, vil hver LDAP-bruker ha et internt brukernavn. Dette krever en tilknytning fra brukernavn til LDAP-bruker. Brukernavn som opprettes blir knyttet til LDAP-brukerens UUID. I tillegg mellomlagres DN for å redusere LDAP-kommunikasjon, men det brukes ikke til identifisering. Hvis DN endres vil endringene bli oppdaget. Det interne brukernavnet brukes alle steder. Nullstilling av tilknytningene vil etterlate seg rester overalt. Nullstilling av tilknytningene skjer ikke pr. konfigurasjon, det påvirker alle LDAP-konfigurasjoner! Nullstill aldri tilknytningene i et produksjonsmiljø, kun ved testing eller eksperimentering.",
"Clear Username-LDAP User Mapping" => "Nullstill tilknytning av brukernavn til LDAP-bruker",
"Clear Groupname-LDAP Group Mapping" => "Nullstill tilknytning av gruppenavn til LDAP-gruppe"
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
