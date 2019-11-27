#!/usr/bin/env bash

# Copy the configuration files
rsync -av vendor/emau18/weather/config ./

# Copy the controller files
rsync -av vendor/emau18/weather/src/IpController /src

# Copy the model files
rsync -av vendor/emau18/weather/src/Models /src
