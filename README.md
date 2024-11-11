# 🌐 Simple Theme - WordPress Theme

**Simple Theme** è un tema WordPress personalizzato progettato per offrire funzionalità di base e uno stile essenziale. Questo tema include il supporto per titoli dinamici, immagini in evidenza e menu personalizzati, consentendo una struttura semplice e flessibile per i siti web.

## 🌟 Funzionalità

- **Titolo Dinamico**: Abilita il titolo dinamico nelle intestazioni delle pagine.
- **Immagine in Evidenza**: Consente l'uso di immagini in evidenza per post e pagine.
- **Menu Personalizzato**: Include un’area di menu personalizzabile nel tema, per una navigazione intuitiva.
- **Foglio di Stile Personalizzato**: Carica un foglio di stile custom (`style.css`) per definire l’aspetto del tema.

## 📋 Configurazione del Tema

Il tema è configurato tramite funzioni personalizzate nel file `functions.php`:

- **simple_setup**: Configura il tema per supportare i titoli dinamici e le immagini in evidenza, e registra un'area menu per l'header.
- **simple_styles**: Carica il file `style.css` dal tema per aggiungere stili personalizzati.

## 🛠️ Installazione

1. **Scarica o Clona il Repository**:

   ```bash
   git clone https://github.com/tuo-username/simple-theme.git
   ```

2. **Carica il Tema su WordPress**:

   - Vai alla dashboard di WordPress.
   - Naviga su **Aspetto > Temi** e clicca su **Aggiungi Nuovo**.
   - Carica la cartella del tema `simple-theme` nella directory `/wp-content/themes/`.

3. **Attiva il Tema**:

   Dopo aver caricato il tema, attivalo dalla sezione **Aspetto > Temi**.

## 📝 Configurazione e Utilizzo

- **Titolo Dinamico**: WordPress genererà automaticamente i titoli delle pagine e dei post in base alle impostazioni del sito.
- **Immagine in Evidenza**: Puoi aggiungere un’immagine in evidenza a qualsiasi post o pagina, selezionando l’opzione **Immagine in Evidenza** nell’editor.
- **Menu Personalizzato**: Vai su **Aspetto > Menu** per creare un nuovo menu e assegnarlo alla posizione **Header**.

## 📂 Struttura del Tema

- **functions.php**: Contiene le funzioni di configurazione e gestione del tema.
  - `simple_setup`: Configura il supporto per titolo dinamico, immagini in evidenza e menu personalizzato.
  - `simple_styles`: Enqueue del file `style.css` per caricare gli stili personalizzati.
- **style.css**: Foglio di stile principale del tema per la personalizzazione visiva.

## 📄 Licenza

Questo progetto è distribuito sotto la licenza **MIT**.
