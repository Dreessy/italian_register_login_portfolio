# 🔐 Sistema di Autenticazione PHP

<div align="center">

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

**Un sistema di autenticazione completo e sicuro sviluppato in PHP con design moderno e funzionalità avanzate**

[Demo Live](#) • [Documentazione](#caratteristiche) • [Installazione](#installazione)

</div>

---
## IMPORTANTE!:
Se vuoi scaricare il progetto importante eliminare index.html essendo una pagina demo! Il file principale da avviare é index.php tramite stringa di comando!
---

## 🌟 Caratteristiche Principali

### 🔒 **Sicurezza Avanzata**
- **Hash delle password** con `password_hash()` e `password_verify()`
- **Protezione SQL Injection** tramite prepared statements
- **Gestione sessioni sicura** con controlli di autenticazione
- **Validazione input** lato server e client

### 👤 **Gestione Utenti Completa**
- ✅ **Registrazione** con controllo username univoci
- 🔑 **Login/Logout** sicuro
- 🏠 **Area utente protetta**
- 📊 **Dashboard personalizzata**

### 🍪 **Cookie Compliance & Analytics**
- 📈 **Tracking avanzato** di OS e browser degli utenti
- 🌍 **Geolocalizzazione IP** per analytics
- ⚖️ **GDPR Compliant** con banner cookie personalizzabile
- 📊 **Logging dettagliato** delle preferenze utente

### 🎨 **Design Moderno**
- 📱 **Responsive Design** ottimizzato per tutti i dispositivi
- 🌈 **Gradienti CSS moderni** e animazioni fluide
- 🎯 **UX/UI professionale** con feedback visivi
- ⚡ **Performance ottimizzate** e caricamento veloce


## 🛠️ Tecnologie Utilizzate

<table>
<tr>
<td>

**Backend**
- PHP 7.4+
- MySQL/MariaDB
- PDO per database
- Session Management

</td>
<td>

**Frontend**
- HTML5 Semantico
- CSS3 con Flexbox/Grid
- JavaScript Vanilla
- Design Responsive

</td>
<td>

**Sicurezza**
- Password Hashing
- Prepared Statements
- CSRF Protection
- Input Validation

</td>
</tr>
</table>

---

## 📦 Installazione

### Prerequisiti
- PHP 7.4 o superiore
- MySQL 5.7+ o MariaDB
- Web server (Apache/Nginx)
- Estensioni PHP: `pdo`, `pdo_mysql`

### Setup Rapido

```bash
# 1. Clona il repository
git clone https://github.com/Dreessy/italian_register_login_portfolio
cd italian_register_login_portfolio

# 2. Configura il database
mysql -u root -p < database.sql

# 3. Modifica config.php con le tue credenziali
# Modifica $host, $db, $user, $pass in config.php

# 4. Avvia il server locale
php -S localhost:8000
```

### Configurazione Database

```php
// config.php
$host = 'localhost';     // Il tuo host MySQL
$db   = 'sito_1';        // Nome del database
$user = 'root';          // Username MySQL
$pass = '';              // Password MySQL
```

---

## 📁 Struttura del Progetto

```
login-system/
├── 📄 index.php              # Homepage con cookie banner
├── 🔑 login.php              # Pagina di login
├── 📝 register.php           # Registrazione utenti
├── 👤 user.php               # Area utente protetta
├── 🚪 logout.php             # Logout e pulizia sessione
├── ⚙️ config.php             # Configurazione database
├── 🍪 save_cookie_log.php    # Gestione cookie e analytics
├── 🎨 style.css              # Stili CSS moderni
├── 🗄️ database.sql           # Schema database
└── 📖 README.md              # Documentazione
```

---

## 🔧 Funzionalità Dettagliate

### 🔐 Sistema di Autenticazione
- **Registrazione sicura** con hash password
- **Login con validazione** credenziali
- **Protezione aree riservate** tramite sessioni
- **Logout completo** con pulizia sessione

### 📊 Analytics e Tracking
- **Rilevamento automatico** OS e browser
- **Logging IP** per geolocalizzazione
- **Statistiche accettazione** cookie
- **Timestamp** per analisi temporali

### 🎨 Interfaccia Utente
- **Design gradient** moderno e accattivante
- **Animazioni CSS** fluide e professionali
- **Feedback visivi** per azioni utente
- **Compatibilità cross-browser**

---

## 🔒 Sicurezza

### Misure Implementate
- ✅ **Password Hashing** con algoritmi sicuri
- ✅ **Prepared Statements** contro SQL Injection
- ✅ **Session Security** con controlli rigorosi
- ✅ **Input Sanitization** per XSS prevention
- ✅ **HTTPS Ready** per produzione

### Best Practices
- Validazione input lato server
- Escape output HTML
- Gestione errori sicura
- Logging attività sospette

---

## 🚀 Deployment

### Ambiente di Produzione
1. **Configura HTTPS** per connessioni sicure
2. **Aggiorna credenziali** database in `config.php`
3. **Imposta permessi** file appropriati
4. **Configura backup** database automatici

### Ottimizzazioni
- Abilita **OPcache** per performance PHP
- Configura **gzip compression**
- Implementa **CDN** per assets statici
- Monitora **logs** per sicurezza

---

## 🤝 Contribuire

1. **Fork** il progetto
2. **Crea** un branch per la tua feature (`git checkout -b feature/AmazingFeature`)
3. **Commit** le modifiche (`git commit -m 'Add some AmazingFeature'`)
4. **Push** al branch (`git push origin feature/AmazingFeature`)
5. **Apri** una Pull Request

---

## 📄 Licenza

Questo progetto è distribuito sotto licenza MIT. Vedi `LICENSE` per maggiori informazioni.

---

## 👨‍💻 Autore

**Ciro Casoria** - *Developer*

- 💼 [LinkedIn](https://www.linkedin.com/in/ciro-casoria-01b93b201)
- 🐙 [GitHub](https://github.com/Dreessy)
- 📧 [Email](ciro062012@icloud.com)

---

<div align="center">

### ⭐ Se questo progetto ti è stato utile, lascia una stella!

**Sviluppato con ❤️ per dimostrare competenze in sviluppo web sicuro e moderno**

</div>
