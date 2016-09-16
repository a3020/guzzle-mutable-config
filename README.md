Guzzle, PHP HTTP client with mutable config
===========================================

The Guzzle configuration is immutable by default. It can only be set via
the constructor and retrieved via getConfig. 

In case you need to for example crawl different domains, you may want
to change the base_uri instead of creating hundreds of instances. This is a copy of the Guzzle Client implementation with two additional methods:

- `setConfig(array $array)`
- `setConfigOption(string $key, $value)`
