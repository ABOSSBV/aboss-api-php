# ABOSS API - PHP Example File
Example PHP Integration of the ABOSS API

# Introduction
ABOSS offers a JSON REST API.

# Authentication
ABOSS APIs use the OAuth 2.0 protocol for authentication and authorization. To begin, obtain OAuth 2.0 credentials from your personal account. You can find your OAuth 2.0 credentials in your profile which you can access on the top right by going to Profile Settings.

# Events
```cURL
  GET /public_events
```

The /public_events GET call will provide you with a JSON output of all events that are set public in ABOSS between the start and end date you provide.

### URL Structure

##### ARTIST
https://data.a-boss.net/v1/artist/[projectId]/public_events

##### AGENCY
https://data.a-boss.net/v1/agency/[agencyId]/[projectId]/public_events

### Variables
The public_events call accepts the following variables:
- from (Date in Y-m-d format)
- to (Date in Y-m-d format)

### Output
  - [id] => [Event ID]
  - [project] => [Project Title]
  - [title] => [Event Title]
  - [eventType] => [Event Type]
  - [start] => [Event Start DateTime]
  - [end] => [Event End DateTime]
  - [tba] => [true or false]
  - [allday] => [true or false]
  - [status] => [Event Status]
  - [website] => [Event Website URL]
  - [occupancyRate] => [Occupancy Rate in percentage]
  - [ticketLink] => [Ticket URL]
  - [location] =>
    (
      - [title] => [Location Title]
      - [country] => [Location Country]
      - [city] => [Location City]
      - [website] => [Location Website]
    )
  - [lineUp] => [Event Line-Up]
