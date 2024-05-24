# Start from a core stack version
FROM python:3.9-slim-buster
WORKDIR "/app"

# Add system libraries
RUN apt-get update \
 && apt-get install -y --no-install-recommends build-essential cmake \
 && apt-get clean \
 && rm -rf /var/lib/apt/lists/*

# Add Python libraries
COPY requirements.txt requirements.txt
RUN pip install --no-cache-dir -r requirements.txt \
 && rm -rf ~/.cache/pip

# Run command
CMD ["python", "api.py"]