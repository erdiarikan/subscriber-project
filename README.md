# 📬 Laravel + Vue Subscriber App

A simple Laravel 12 project with Vue.js 3 integration, using Laravel Sail for local development.  
The landing page contains a subscriber form that posts data via a standard HTML form and enqueues the subscriber creation job using Laravel's job queue system.

---

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/erdiarikan/subscriber-project.git
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install NPM Dependencies
```bash
npm install
```

### 4. Start Laravel Sail
```bash
./vendor/bin/sail up -d
```

### 5. Run Migrations
```bash
./vendor/bin/sail artisan migrate
```

### 6. Build Assets
```bash
npm run dev
```

### 7. Visit the App
- Visit [http://localhost](http://localhost) in your browser.

---

## 🖼️ Application Overview
- ✅ Vue.js is integrated directly inside the Laravel app using Vite.
- ✅ The default landing page (/subscribe) contains a Vue-powered subscriber form.
- ✅ Submissions are queued via Laravel's job dispatching system.

## 📥 Submitting a Subscriber
1. Visit http://localhost/
2. Fill out the form and click Add Subscriber
3. The request is stored in a job queue.

### or

The application also provides an API endpoint for programmatically adding subscribers.
Payload example:
```bash
{
  "email": "user@example.com",
  "status": "subscribed"
}
```
status can be either "subscribed" or "unsubscribed".


### 🔁 Process the Queue
```bash
sail artisan queue:work
```
