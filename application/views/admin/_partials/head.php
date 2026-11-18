<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title><?= SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    body { font-size: 0.95rem; }
    #wrapper { display: flex; }
    #content-wrapper { flex: 1; min-height: 100vh; display: flex; flex-direction: column; }
    .sidebar { width: 220px; min-height: 100vh; background-color: #343a40; }
    .sidebar .nav-link { color: rgba(255,255,255,0.75); padding: 12px 16px; display: block; text-decoration: none; }
    .sidebar .nav-link:hover, .sidebar .nav-link.active { color: #fff; background-color: rgba(255,255,255,0.1); }
    .sidebar .nav-link i { margin-right: 8px; }
    .sticky-footer { margin-top: auto; background: #eaecf4; padding: 16px 0; }
    .img-thumb { width: 64px; height: 64px; object-fit: cover; border-radius: 4px; }
</style>

