# System Architecture: Software Security Core

## The CIA Triad (Foundational Pillars)
System security is strictly governed by Confidentiality (restricting access to authorized entities), Integrity (preventing unauthorized data modification), and Availability (ensuring the system is accessible when needed).

## Zero Trust Architecture
The system must operate on the principle of "Never Trust Input" by validating and sanitizing all incoming data.

## Design Principles
Security must be integrated at the design phase using layered defenses (Defense in Depth), minimal required access (Least Privilege), and secure default configurations.

# Access Protocols: Authentication vs. Authorization

## Authentication (Identity Verification)
This is the mandatory first step that answers "Who are you?" using mechanisms like sessions, tokens, or hashed passwords.

## Authorization (Access Control)
This occurs strictly after authentication and answers "What are you allowed to do?" using roles, middleware, Gates, or Policies.

# Framework Implementation: Laravel 13 Defenses

## Credential Handling
Plain text passwords are strictly prohibited; the system must use cryptographic hashing (like bcrypt or argon2) via `Hash::make()`.

## Access Management
Middleware filters requests before they hit controllers, Gates handle simple closure-based permission checks, and Policies manage authorization rules tied to specific models.

## Threat Mitigation (OWASP Top 10)
- **SQL Injection (A03):** Mitigated natively via Eloquent and Query Builder using prepared statements and parameter binding.
- **Cross-Site Scripting / XSS (A03):** Mitigated by utilizing Blade's `{{ $var }}` syntax, which automatically escapes HTML output.
- **CSRF:** Blocked by requiring the `@csrf` token directive on all active forms to validate requests.

# Project Specs: B University Action Items

## URL Obfuscation (Slug Security)
Route model binding must use auto-generated, unique slugs instead of exposing numeric IDs in the URLs to prevent data enumeration.

## Foreign Key Integrity
The `users_id` parameter connecting announcements and news must never be passed via mass assignment or form inputs; it must be securely sourced directly from the authenticated session using `auth()->id()`.

## Admin Panel ICE
The Filament admin panel must be locked down behind proper authentication and access controls.