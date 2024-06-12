# VirtCloudPro Blacklist Checker

This project provides a web interface to check if an IP address is blacklisted in the VirtCloudPro network. It includes an HTML page for user interaction, and PHP scripts to handle IP data fetching and synchronization.

## Contents

- `index.html`: Main web interface to search for blacklisted IPs and create support tickets.
- `get_ips.php`: Fetches the list of blacklisted IPs from the database.
- `sync_ips.php`: Syncs the IP blacklist from a text file to the database.

## Setup Instructions

### Database Setup

1. Create a MySQL database named `virtclou1_blacklist`.
2. Create a table named `ips` with a column `ip` (VARCHAR).
3. Use the following SQL commands to set up the database:

```sql
CREATE DATABASE virtclou1_blacklist;
USE virtclou1_blacklist;

CREATE TABLE ips (
    ip VARCHAR(45) NOT NULL PRIMARY KEY
);
```
Make sure to read the `get_ips.php` and `sync_ips.php` make sure to fill the database in.

# ips.txt
Create a file named ips.txt in the specified location (/var/www/YOUR_LOCATION_TO/ips.txt) and populate it with the desired blacklisted IPs and subnets, each on a new line.

Example ips.txt
Copy code
192.168.1.1
203.0.113.0/24
198.51.100.42
