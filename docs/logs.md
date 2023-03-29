# Logs
Currently, the browser agent and the access date is being stored in `user_agents.tsv`.

This is done immediately upon the user landing on `index.php`.

After it is added (still being executed within `index.php`), operations are done and stored in `timeseries_data.tsv` and `user_agent_calc.json`.

## timeseries_data.tsv
    - This is yet to be implemented.

## user_agent_calc.json
    - This contains counts for how many times a specific browser has accessed `index.php`.
    - Example format:
`{
    "Chrome": n, 
    "Firefox: n,
    "Edge": n,
    "Other": n
}`

## Debugging output
Use the logLine() PHP function from logging.php to log to logs/log.txt.

This file is appended to any time the log() function is called.