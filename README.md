# Portál odbornej praxe

Aplikácia na evidenciu odbornej praxe: registrácia študentov a firiem, schvaľovanie praxí, správa dokumentov, PDF dohody a e-mailové notifikácie.

Správca repozitára: [Jakub Albert](https://github.com/JakubAlbert).

- Backend: Laravel, MySQL, Sanctum a Passport.
- Frontend: React, TypeScript a Vite.
- [Dokumentácia a spustenie projektu](README_Evidencia_Praxe.md).

Závislosti sa inštalujú cez `composer install` v `backend/` a `npm ci` v `frontend/`. Priečinky `vendor`, `node_modules`, lokálne databázy, logy a `.env` nepatria do repozitára.

Konfiguráciu vytvor z príslušného `.env.example`. V backende vygeneruj vlastný kľúč príkazom `php artisan key:generate`. Lokálne sa e-maily zapisujú do logu; SMTP nastav vo svojom `.env`.

Údaje zástupcu školy, garanta a kontakt v PDF dohode nastav cez `AGREEMENT_REPRESENTATIVE`, `AGREEMENT_GUARANTOR`, `AGREEMENT_EMAIL` a `AGREEMENT_PHONE`. Bez konfigurácie zostanú v dohode prázdne polia na doplnenie.

Demo účty vytvorené seedermi používajú adresy `garant@example.com` a `external-system@example.com` a heslo `heslo123`; sú určené na lokálne skúšanie.
